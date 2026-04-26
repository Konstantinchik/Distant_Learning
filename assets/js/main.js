// main.js — универсальная интерактивность сайта (адаптивная версия 2026)
// Работает на ПК + мобильных (touch). Минимум дублирования.
// Идея: задания “подключаются” через классы/атрибуты в HTML, а main.js сам всё инициализирует.

// ──────────────────────────────────────────────────────────────────────────────
// ГЛОБАЛЬНОЕ СОСТОЯНИЕ
// ──────────────────────────────────────────────────────────────────────────────
// currentItem используется в drag&drop и (при желании) в других инициализаторах.
// Делаем глобальным намеренно.
let currentItem = null;

document.addEventListener('DOMContentLoaded', () => {
  // 1) Озвучка (кнопки .speak-btn)
  initSpeechSynthesis();

  // 2) Типовые интерактивы
  initYesNoQuestions();    // блоки .yesno-question[data-answer="..."]
  initDragDropTouch();     // перетаскивание для заданий с классами draggable/targets
  initWordGroups();        // точка расширения (не ломает ничего)
  initSelectChecks();      // <select data-correct="...">
  initTextInputChecks();   // <input data-answer="...">

  // (опционально) 3) Соединение “слева → справа” (tap/tap)
  // Работает только если вы добавите контейнер с атрибутом data-match-pairs
  initMatchPairs();

  // 4) Глобальный прогресс
  updateGlobalProgress();
});

// ──────────────────────────────────────────────────────────────────────────────
// 1. ОЗВУЧКА — глобальная для кнопок .speak-btn
// Использование в HTML:
// <button class="speak-btn" data-text="Текст для озвучки">▶</button>
// Можно также: data-lang="ru-RU" (если понадобится другое)
// ──────────────────────────────────────────────────────────────────────────────
function initSpeechSynthesis() {
  if (!('speechSynthesis' in window)) {
    console.warn('Браузер не поддерживает озвучку (speechSynthesis).');
    return;
  }

  let ruVoice = null;

  // Загружаем голоса (в некоторых браузерах они появляются асинхронно)
  const loadVoices = () => {
    const voices = speechSynthesis.getVoices();
    ruVoice = voices.find(v => (v.lang || '').toLowerCase().startsWith('ru')) || null;
  };

  speechSynthesis.onvoiceschanged = loadVoices;
  loadVoices();

  function speak(text, lang = 'ru-RU') {
    if (!text) return;

    // Останавливаем предыдущую озвучку
    speechSynthesis.cancel();

    const utterance = new SpeechSynthesisUtterance(text);
    utterance.lang = lang;

    // Если есть русский голос — используем его
    if (lang.toLowerCase().startsWith('ru') && ruVoice) {
      utterance.voice = ruVoice;
    }

    // Чуть быстрее для учебных материалов
    utterance.rate = 1.05;
    utterance.pitch = 1.0;

    speechSynthesis.speak(utterance);
  }

  // Делегирование: работает и для динамически добавленных кнопок
  document.addEventListener('click', e => {
    const btn = e.target.closest('.speak-btn');
    if (!btn) return;

    const text = (btn.dataset.text || btn.textContent || '').trim();
    const lang = (btn.dataset.lang || 'ru-RU').trim();

    speak(text, lang);
  });
}

// ──────────────────────────────────────────────────────────────────────────────
// 2. ВОПРОСЫ «ДА / НЕТ» (универсальная проверка)
// Ожидаем разметку:
// <div class="yesno-question" data-answer="да|нет">
//   <label><input type="radio" name="q1" value="да"> Да</label>
//   <label><input type="radio" name="q1" value="нет"> Нет</label>
//   <span class="feedback"></span>  (можно не добавлять — создадим сами)
// </div>
// ──────────────────────────────────────────────────────────────────────────────
function initYesNoQuestions() {
  document.querySelectorAll('.yesno-question').forEach(block => {
    const radios = block.querySelectorAll('input[type="radio"]');
    radios.forEach(radio => {
      radio.addEventListener('change', () => {
        const correct = (block.dataset.answer || '').trim().toLowerCase();
        const selected = block.querySelector('input:checked');
        const feedback = block.querySelector('.feedback') || createInlineFeedback(block);

        feedback.className = 'feedback fw-bold ms-3';
        feedback.classList.remove('text-success', 'text-danger');

        if (!selected) return;

        const val = (selected.value || '').trim().toLowerCase();
        const exp = block.dataset.explanation || '';
        if (val === correct) {
          feedback.innerHTML = '<span class="text-success">Правильно!</span>'
            + (exp ? ' <span class="text-muted fw-normal">— ' + exp + '</span>' : '');
          feedback.classList.add('text-success');
        } else {
          feedback.innerHTML = '<span class="text-danger">Неправильно. Правильно: ' + block.dataset.answer + '</span>'
            + (exp ? ' <span class="text-muted fw-normal">— ' + exp + '</span>' : '');
          feedback.classList.add('text-danger');
        }
      });
    });
  });

  function createInlineFeedback(parent) {
    const fb = document.createElement('span');
    fb.className = 'feedback fw-bold ms-3';
    parent.appendChild(fb);
    return fb;
  }
}

// ──────────────────────────────────────────────────────────────────────────────
// 3. DRAG & DROP + TOUCH (универсальный каркас)
// ВАЖНО для мобильных: НЕ блокируем скролл, если пользователь не тащит элемент.
// Поддерживаем элементы-источники и цели через селекторы ниже.
// ──────────────────────────────────────────────────────────────────────────────
function initDragDropTouch() {
  const items = document.querySelectorAll(
    '.draggable, .t11-word, .t12-word, .l4t3-word'
  );

  const targets = document.querySelectorAll(
    '.drop-zone, .t11-target, .t12-target, .l4t3-root-card'
  );

  if (!items.length || !targets.length) return; // нечего инициализировать

  // Удобный helper для addEventListener
  const on = (el, event, handler, passive = true) => {
    el.addEventListener(event, handler, { passive });
  };

  // Чтобы на touch перетаскивание было стабильным по всей странице,
  // используем document-level обработчики, включаем их только во время drag.
  let draggingTouch = false;

  // Запомним “временные” стили, чтобы вернуть как было
  const tmpStyle = {
    position: '',
    left: '',
    top: '',
    pointerEvents: '',
    zIndex: ''
  };

  function applyDragStyleTouch(touch) {
    if (!currentItem) return;

    // Сохраняем исходные значения только один раз
    if (!draggingTouch) return;

    // Визуально “таскаем” элемент поверх страницы
    currentItem.style.position = 'fixed';
    currentItem.style.left = (touch.clientX - 20) + 'px';
    currentItem.style.top  = (touch.clientY - 20) + 'px';
    currentItem.style.pointerEvents = 'none';
    currentItem.style.zIndex = '9999';
  }

  function restoreTouchStyle() {
    if (!currentItem) return;
    currentItem.style.position = tmpStyle.position;
    currentItem.style.left = tmpStyle.left;
    currentItem.style.top = tmpStyle.top;
    currentItem.style.pointerEvents = tmpStyle.pointerEvents;
    currentItem.style.zIndex = tmpStyle.zIndex;
  }

  function startTouchDrag(item, e) {
    // Начали тащить — теперь можно блокировать скролл ТОЛЬКО во время drag
    draggingTouch = true;
    currentItem = item;
    item.classList.add('dragging');

    // сохраняем текущее состояние стилей (чтобы потом вернуть)
    tmpStyle.position = item.style.position;
    tmpStyle.left = item.style.left;
    tmpStyle.top = item.style.top;
    tmpStyle.pointerEvents = item.style.pointerEvents;
    tmpStyle.zIndex = item.style.zIndex;

    // ставим обработчики на документ (не на target!)
    // так drag будет работать в любом месте страницы
    document.addEventListener('touchmove', onDocTouchMove, { passive: false });
    document.addEventListener('touchend', onDocTouchEnd, { passive: true });

    // предотвращаем “первичный” скролл при старте
    e.preventDefault();
  }

  function finishTouchDrag() {
    if (!currentItem) return;

    currentItem.classList.remove('dragging');
    restoreTouchStyle();

    currentItem = null;
    draggingTouch = false;

    document.removeEventListener('touchmove', onDocTouchMove);
    document.removeEventListener('touchend', onDocTouchEnd);
  }

  function onDocTouchMove(e) {
    if (!draggingTouch || !currentItem) return;

    // Вот здесь блокируем прокрутку — но только когда реально тащим
    e.preventDefault();

    const touch = e.touches[0];
    applyDragStyleTouch(touch);
  }

  function onDocTouchEnd(e) {
    if (!draggingTouch || !currentItem) return;

    const touch = e.changedTouches[0];
    const elUnderTouch = document.elementFromPoint(touch.clientX, touch.clientY);

    const dropTarget = elUnderTouch?.closest(
      '.drop-zone, .t11-target, .t12-target, .l4t3-root-card'
    );

    if (dropTarget) {
      handleDrop(dropTarget, currentItem);
    }

    finishTouchDrag();
  }

  // Источники (items)
  items.forEach(item => {
    // ПК drag
    on(item, 'dragstart', e => {
      currentItem = item;
      item.classList.add('dragging');

      // Передаём любые идентификаторы (на будущее, если понадобится)
      const payload =
        item.dataset.id ||
        item.dataset.word ||
        item.dataset.device ||
        item.textContent.trim();

      e.dataTransfer?.setData('text/plain', payload);
    }, true);

    on(item, 'dragend', () => {
      item.classList.remove('dragging');
      // currentItem сбросится на drop (или останется — но это не критично)
    }, true);

    // Touch drag
    on(item, 'touchstart', e => startTouchDrag(item, e), false);
  });

  // Цели (targets) — только для ПК drag&drop:
  targets.forEach(target => {
    on(target, 'dragover', e => e.preventDefault(), false);
    on(target, 'drop', e => {
      e.preventDefault();
      if (!currentItem) return;

      handleDrop(target, currentItem);
      currentItem.classList.remove('dragging');
      currentItem = null;
    }, false);
  });

  // ── ВАЖНО ───────────────────────────────────────────────────────────────
  // handleDrop — “универсальная вставка”.
  // Если для какого-то задания нужно другое поведение,
  // лучше делать специальный data-атрибут и ветвление здесь.
  // ────────────────────────────────────────────────────────────────────────
  function handleDrop(target, item) {
    // Пытаемся найти список, куда вставлять результат
    const list = target.querySelector('ul, .t11-list, .t12-list, .l4t3-root-list');
    if (!list) return;

    // Создаём “помещённый” элемент
    const li = document.createElement('li');
    li.textContent =
      item.textContent?.trim() ||
      item.dataset.word ||
      item.dataset.device ||
      item.dataset.id ||
      '';

    li.dataset.id =
      item.dataset.id ||
      item.dataset.word ||
      item.dataset.device ||
      li.textContent.trim();

    // Базовый вид
    li.className = 'py-1 px-2 border rounded mb-1 bg-white';

    list.appendChild(li);

    // Убираем из банка
    item.remove();

    // Лёгкий визуальный фидбек на цели
    target.classList.add('bg-success-subtle');
  }
}

// ──────────────────────────────────────────────────────────────────────────────
// 4. ГРУППЫ СЛОВ (точка расширения)
// Сейчас ничего не делает (и это ОК).
// Если позже захотите — можно тут подключить проверку группировки по data-root.
// ──────────────────────────────────────────────────────────────────────────────
function initWordGroups() {
  // Ничего не ломаем. Оставлено для будущего расширения.
}

// ──────────────────────────────────────────────────────────────────────────────
// 5. ПРОВЕРКА <select data-correct="...">
// Рекомендуемая разметка:
// <select data-correct="память">...</select>
// (рядом будет автоматически создан feedback)
// ──────────────────────────────────────────────────────────────────────────────
function initSelectChecks() {
  document.querySelectorAll('select[data-correct]').forEach(select => {
    select.addEventListener('change', () => {
      const feedback = select.nextElementSibling || createFeedback(select.parentElement);
      feedback.className = 'feedback small mt-1';
      feedback.classList.remove('text-success', 'text-danger');

      if (!select.value) {
        feedback.textContent = '';
        return;
      }

      if (select.value === select.dataset.correct) {
        feedback.textContent = 'Правильно';
        feedback.classList.add('text-success');
      } else {
        feedback.textContent = 'Неправильно';
        feedback.classList.add('text-danger');
      }
    });
  });
}

// ──────────────────────────────────────────────────────────────────────────────
// 6. ПРОВЕРКА <input data-answer="..."> — мягкая
// - сравнение “по нормализованной строке” (ё→е, лишние пробелы)
// - добавляем Bootstrap-классы is-valid / is-invalid
// ──────────────────────────────────────────────────────────────────────────────
function initTextInputChecks() {
  document.querySelectorAll('input[data-answer]').forEach(input => {
    input.addEventListener('input', () => {
      const feedback = input.nextElementSibling || createFeedback(input.parentElement);
      feedback.className = 'feedback small mt-1';
      feedback.classList.remove('text-success', 'text-danger');

      const user = normalize(input.value);
      const correct = normalize(input.dataset.answer);

      if (!user) {
        feedback.textContent = '';
        input.classList.remove('is-valid', 'is-invalid');
        return;
      }

      if (user === correct) {
        feedback.textContent = 'Правильно';
        feedback.classList.add('text-success');
        input.classList.add('is-valid');
        input.classList.remove('is-invalid');
      } else {
        feedback.textContent = 'Неправильно';
        feedback.classList.add('text-danger');
        input.classList.add('is-invalid');
        input.classList.remove('is-valid');
      }
    });
  });

  // Нормализация строки — помогает “мягкому” вводу
  function normalize(s) {
    return (s || '')
      .toLowerCase()
      .replace(/ё/g, 'е')
      .replace(/\s+/g, ' ')
      .trim();
  }
}

// Создание блока feedback (универсально для select/input)
function createFeedback(parent) {
  const fb = document.createElement('div');
  fb.className = 'feedback small mt-1';
  parent.appendChild(fb);
  return fb;
}

// ──────────────────────────────────────────────────────────────────────────────
// 7. “СОЕДИНИТЕ ПАРЫ” (tap/tap) — удобно на телефоне и ПК
// ВКЛЮЧАЕТСЯ ТОЛЬКО если в HTML есть контейнер:
// <div data-match-pairs>
//   <div data-match-left>  <button class="match-item" data-id="...">...</button> ... </div>
//   <div data-match-right> <button class="match-item" data-id="...">...</button> ... </div>
//   <div data-match-output></div>
//   <button data-match-check>Проверить</button>   (необязательно)
//   <button data-match-reset>Сбросить</button>    (необязательно)
// </div>
//
// А правильные ответы задаются так:
// <div data-match-pairs data-answer='{"leftId":"rightId","left2":"right2"}'>
// ──────────────────────────────────────────────────────────────────────────────
function initMatchPairs() {
  const blocks = document.querySelectorAll('[data-match-pairs]');
  if (!blocks.length) return;

  blocks.forEach(block => {
    const leftWrap  = block.querySelector('[data-match-left]');
    const rightWrap = block.querySelector('[data-match-right]');
    const output    = block.querySelector('[data-match-output]');
    if (!leftWrap || !rightWrap || !output) return;

    // Перемешаем правую колонку, чтобы не запоминали порядок
    shuffleChildren(rightWrap);

    // Читаем ответы из data-answer (JSON)
    let correct = {};
    try {
      correct = block.dataset.answer ? JSON.parse(block.dataset.answer) : {};
    } catch (e) {
      console.warn('data-answer должен быть JSON, пример: {"text":"tables"}', e);
    }

    let selectedLeft = null;
    const pairs = new Map(); // leftId -> rightId

    block.addEventListener('click', e => {
      const btn = e.target.closest('.match-item');
      if (!btn) return;

      const isLeft = btn.closest('[data-match-left]');
      const isRight = btn.closest('[data-match-right]');

      if (isLeft) {
        clearActive(leftWrap);
        btn.classList.add('active');
        selectedLeft = btn.dataset.id;
        return;
      }

      if (isRight) {
        if (!selectedLeft) return;

        pairs.set(selectedLeft, btn.dataset.id);
        clearActive(leftWrap);
        selectedLeft = null;
        renderPairs(leftWrap, rightWrap, output, pairs);
      }
    });

    const checkBtn = block.querySelector('[data-match-check]');
    if (checkBtn) {
      checkBtn.addEventListener('click', () => {
        const total = Object.keys(correct).length || pairs.size;
        let ok = 0;

        for (const [l, r] of pairs.entries()) {
          if (correct[l] && correct[l] === r) ok++;
        }

        // “мягкая” проверка: показываем сколько верных
        const box = block.querySelector('[data-match-status]') || createStatus(block);
        box.innerHTML = `
          <div class="alert alert-info mb-0">
            Верных соответствий: <b>${ok}</b> из <b>${total}</b>.
            ${total && ok === total ? '<div class="mt-2 text-success fw-bold">Отлично! Всё верно.</div>' : ''}
          </div>
        `;
      });
    }

    const resetBtn = block.querySelector('[data-match-reset]');
    if (resetBtn) {
      resetBtn.addEventListener('click', () => {
        pairs.clear();
        selectedLeft = null;
        clearActive(leftWrap);
        const box = block.querySelector('[data-match-status]');
        if (box) box.innerHTML = '';
        renderPairs(leftWrap, rightWrap, output, pairs);
      });
    }

    // первичный рендер
    renderPairs(leftWrap, rightWrap, output, pairs);
  });

  function createStatus(block) {
    const div = document.createElement('div');
    div.setAttribute('data-match-status', '');
    div.className = 'mt-3';
    block.appendChild(div);
    return div;
  }

  function clearActive(wrap) {
    wrap.querySelectorAll('.match-item').forEach(b => b.classList.remove('active'));
  }

  function renderPairs(leftWrap, rightWrap, output, pairs) {
    if (!pairs.size) {
      output.textContent = 'Пока нет пар. Выберите слева и справа.';
      return;
    }

    const leftLabels = Object.fromEntries(
      Array.from(leftWrap.querySelectorAll('.match-item')).map(b => [b.dataset.id, b.textContent.trim()])
    );
    const rightLabels = Object.fromEntries(
      Array.from(rightWrap.querySelectorAll('.match-item')).map(b => [b.dataset.id, b.textContent.trim()])
    );

    output.innerHTML = Array.from(pairs.entries()).map(([l, r]) => `
      <div class="d-flex align-items-center justify-content-between border rounded p-2 mb-2 bg-light">
        <div><b>${leftLabels[l] || l}</b> → ${rightLabels[r] || r}</div>
        <button class="btn btn-sm btn-outline-danger" type="button" data-del-pair="${l}">×</button>
      </div>
    `).join('');

    // удаление пары
    output.querySelectorAll('[data-del-pair]').forEach(btn => {
      btn.addEventListener('click', () => {
        pairs.delete(btn.dataset.delPair);
        renderPairs(leftWrap, rightWrap, output, pairs);
      });
    });
  }

  function shuffleChildren(parent) {
    const arr = Array.from(parent.children);
    for (let i = arr.length - 1; i > 0; i--) {
      const j = Math.floor(Math.random() * (i + 1));
      [arr[i], arr[j]] = [arr[j], arr[i]];
    }
    arr.forEach(el => parent.appendChild(el));
  }
}

// ──────────────────────────────────────────────────────────────────────────────
// 8. ГЛОБАЛЬНЫЙ ПРОГРЕСС (24 занятия)
// Храним: lesson_X_completed = 'true'
// ──────────────────────────────────────────────────────────────────────────────
function updateGlobalProgress() {
  let completed = 0;

  // localStorage иногда может быть недоступен (private mode/ограничения)
  try {
    for (let i = 1; i <= 24; i++) {
      if (localStorage.getItem(`lesson_${i}_completed`) === 'true') completed++;
    }
  } catch (e) {
    console.warn('localStorage недоступен, прогресс не сохраняется.', e);
  }

  const percent = Math.round((completed / 24) * 100);
  const bar = document.getElementById('globalProgress');

  if (bar) {
    bar.style.width = percent + '%';
    bar.textContent = percent + '%';
  }
}

// Вызывайте после успешного выполнения ключевого задания урока:
window.markLessonCompleted = function(lessonNum) {
  try {
    localStorage.setItem(`lesson_${lessonNum}_completed`, 'true');
  } catch (e) {
    console.warn('localStorage недоступен, не удалось сохранить прогресс.', e);
  }
  updateGlobalProgress();
};

// ============================================================
// MCQ — Multiple Choice Questions (общий обработчик)
// ------------------------------------------------------------
// Использование:
//   <div class="mcq-set">
//     <div class="question-block" data-correct="b">
//       <p>Вопрос?</p>
//       <input type="radio" name="qN" value="a"><label>а) ...</label>
//       <input type="radio" name="qN" value="b"><label>б) ... (правильный)</label>
//       ...
//       <div class="feedback d-none"></div>
//     </div>
//     <button onclick="checkMCQ(this)">Проверить</button>
//   </div>
// ============================================================
window.checkMCQ = function(btn) {
  const set = btn.closest('.mcq-set');
  if (!set) return;
  let correct = 0, total = 0;
  set.querySelectorAll('.question-block').forEach(block => {
    total++;
    const expected = block.dataset.correct;
    const exp = block.dataset.explanation || '';
    const checked = block.querySelector('input[type=radio]:checked');
    const fb = block.querySelector('.feedback');
    block.classList.remove('border-success','border-danger');
    if (fb) {
      fb.classList.remove('d-none','text-success','text-danger','text-warning');
    }
    if (!checked) {
      if (fb) { fb.textContent = 'Не выбран ответ'; fb.classList.add('text-warning'); }
    } else if (checked.value === expected) {
      if (fb) {
        fb.innerHTML = '<span class="text-success">Правильно!</span>'
          + (exp ? ' <span class="text-muted fw-normal">— ' + exp + '</span>' : '');
      }
      block.classList.add('border-success');
      correct++;
    } else {
      if (fb) {
        fb.innerHTML = '<span class="text-danger">Неверно. Правильный: <strong>'
          + String(expected).toUpperCase() + '</strong></span>'
          + (exp ? ' <span class="text-muted fw-normal">— ' + exp + '</span>' : '');
      }
      block.classList.add('border-danger');
    }
  });
  let result = set.querySelector('.mcq-result');
  if (!result) {
    result = document.createElement('div');
    result.className = 'mcq-result mt-3';
    set.appendChild(result);
  }
  result.className = 'mcq-result mt-3 fw-bold ' + (correct === total ? 'text-success' : 'text-danger');
  result.textContent = correct === total
    ? '✓ Все ' + total + ' вопросов правильно!'
    : 'Правильных ответов: ' + correct + ' из ' + total;
};


// ============================================================
// checkAllYesNo — общая проверка yesno-блоков по кнопке «Проверить»
// Использует data-answer и data-explanation на .yesno-question
// ============================================================
window.checkAllYesNo = function() {
  document.querySelectorAll('.yesno-question').forEach(block => {
    const correct = (block.dataset.answer || '').trim().toLowerCase();
    const selected = block.querySelector('input[type=radio]:checked');
    let fb = block.querySelector('.feedback');
    if (!fb) {
      fb = document.createElement('div');
      fb.className = 'feedback mt-2 fw-bold';
      block.appendChild(fb);
    }
    fb.classList.remove('d-none', 'text-success', 'text-danger', 'text-warning');
    const exp = block.dataset.explanation || '';
    if (!selected) {
      fb.innerHTML = '<span class="text-warning">Выбери ответ</span>';
      return;
    }
    const val = (selected.value || '').trim().toLowerCase();
    if (val === correct) {
      fb.innerHTML = '<span class="text-success">Правильно!</span>'
        + (exp ? ' <span class="text-muted fw-normal">— ' + exp + '</span>' : '');
    } else {
      fb.innerHTML = '<span class="text-danger">Неправильно. Правильно: ' + block.dataset.answer + '</span>'
        + (exp ? ' <span class="text-muted fw-normal">— ' + exp + '</span>' : '');
    }
  });
};

<!-- lesson19.php — переработано в интерактивный Pascal-урок -->
<div class="lesson">

    <h2 class="text-primary mb-4">Занятие 19. Знакомство с языком программирования Паскаль</h2>

<!-- intro -->
<div class="alert alert-primary border-start border-primary border-4 fs-5 mb-4">
    Pascal — язык высокого уровня, разработанный Никлаусом Виртом в 1970 году. Это первый язык, который ты будешь изучать всерьёз. Он строгий, понятный и хорошо учит мыслить алгоритмически.
</div>


    <!-- Задание 1: словарь (сохранён без изменений) -->
<div class="card mb-5">
  <div class="card-header bg-light fw-bold fs-5">
    1. Прочитайте слова и словосочетания, переведите, запомните их значения.
  </div>

  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered align-middle">
        <tbody>

          <!-- Программирование -->
          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn"
                      data-text="Программирование" aria-label="Озвучить">
                ▶
              </button>
              Программи́рование
            </td>
            <td class="text-start">
              <div class="mb-2">
                <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn"
                        data-text="Системное программирование" aria-label="Озвучить">
                  ▶
                </button>
                Систе́мное программи́рование
              </div>
              <div class="mb-2">
                <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn"
                        data-text="Прикладное программирование" aria-label="Озвучить">
                  ▶
                </button>
                Прикладно́е программи́рование
              </div>
              <div>
                <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn"
                        data-text="Объектно ориентированное программирование" aria-label="Озвучить">
                  ▶
                </button>
                Объе́ктно-ориенти́рованное программи́рование
              </div>
            </td>
          </tr>

          <!-- Язык программирования -->
          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn"
                      data-text="Язык программирования" aria-label="Озвучить">
                ▶
              </button>
              Язы́к программи́рования
            </td>
            <td class="text-start"></td>
          </tr>

          <!-- Транслятор -->
          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn"
                      data-text="Транслятор" aria-label="Озвучить">
                ▶
              </button>
              Трансля́тор
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn"
                      data-text="Транслятор с этого языка в машинные коды" aria-label="Озвучить">
                ▶
              </button>
              Трансля́тор с этого языка́ в маши́нные ко́ды
            </td>
          </tr>

          <!-- Интерпретатор -->
          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn"
                      data-text="Интерпретатор" aria-label="Озвучить">
                ▶
              </button>
              Интерпрета́тор
            </td>
            <td class="text-start"></td>
          </tr>

          <!-- Компилятор -->
          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn"
                      data-text="Компилятор" aria-label="Озвучить">
                ▶
              </button>
              Компиля́тор
            </td>
            <td class="text-start"></td>
          </tr>

          <!-- Комментарий -->
          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn"
                      data-text="Комментарий" aria-label="Озвучить">
                ▶
              </button>
              Коммента́рий
            </td>
            <td class="text-start"></td>
          </tr>

          <!-- Процедура -->
          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn"
                      data-text="Процедура" aria-label="Озвучить">
                ▶
              </button>
              Процеду́ра
            </td>
            <td class="text-start"></td>
          </tr>

          <!-- Функция -->
          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn"
                      data-text="Функция" aria-label="Озвучить">
                ▶
              </button>
              Фу́нкция
            </td>
            <td class="text-start"></td>
          </tr>

          <!-- Идентификатор -->
          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn"
                      data-text="Идентификатор" aria-label="Озвучить">
                ▶
              </button>
              Идентифика́тор
            </td>
            <td class="text-start"></td>
          </tr>

          <!-- Тип -->
          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn"
                      data-text="Тип" aria-label="Озвучить">
                ▶
              </button>
              Тип
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn"
                      data-text="Тип величины" aria-label="Озвучить">
                ▶
              </button>
              Тип величины́
            </td>
          </tr>

          <!-- Скаляpный тип -->
          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn"
                      data-text="Скалярный тип" aria-label="Озвучить">
                ▶
              </button>
              Скаля́рный тип
            </td>
            <td class="text-start"></td>
          </tr>

          <!-- Составной тип -->
          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn"
                      data-text="Составной тип" aria-label="Озвучить">
                ▶
              </button>
              Составно́й тип
            </td>
            <td class="text-start"></td>
          </tr>

          <!-- Базовый тип -->
          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn"
                      data-text="Базовый тип" aria-label="Озвучить">
                ▶
              </button>
              Ба́зовый тип
            </td>
            <td class="text-start"></td>
          </tr>

        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- Конец задания 1 -->

<!-- Теория -->
<div class="card mb-4 border-info">
    <div class="card-header bg-info text-white fw-bold">📖 Теория</div>
    <div class="card-body">
        
        <h6 class="text-primary mt-3">Структура программы</h6>
        <div class="pas-listing">
            <pre><code>program ИмяПрограммы;       // заголовок
uses модули;                // подключаемые модули (необязательно)
const ...;                  // константы (необязательно)
var ...;                    // переменные (необязательно)
begin                       // начало основного тела
   операторы;
end.</code></pre>
        </div>
        <h6 class="text-primary mt-3">Простейший пример</h6>
        <div class="pas-listing">
            <pre><code>program Hello;
begin
  writeln('Привет, мир!');
end.</code></pre>
        </div>
    </div>
</div>


<!-- run-тренажёр -->
<div class="card mb-4">
    <div class="card-header bg-light fw-bold">
        <span class="pas-task-badge run">▶ Запустить</span> Тренажёр: запустить первую программу
    </div>
    <div class="card-body">
        <p class="text-muted mb-2">Нажми «Запустить» — программа выполнится прямо в браузере и покажет вывод ниже.</p>
        <div class="pas-listing">
    <div class="pas-listing-header">
        <span class="pas-listing-title">Hello.pas</span>
        <div class="pas-listing-actions">
            <button class="btn btn-sm btn-success me-2" data-run>▶ Запустить</button>
            <button class="btn btn-sm btn-light" data-copy>Копировать</button>
        </div>
    </div>
    <pre><code>program Hello;
begin
  writeln('Привет, Pascal!');
  writeln('Это моя первая программа.');
end.</code></pre>
    <div class="pas-run-output"></div>
</div>
    </div>
</div>


<!-- predict-тренажёр -->
<div class="card mb-4">
    <div class="card-header bg-light fw-bold">
        <span class="pas-task-badge predict">Что выведет?</span> Тренажёр: что выведет программа?
    </div>
    <div class="card-body">
        <p class="text-muted mb-2">Прочитай код, мысленно выполни и впиши ожидаемый вывод. Потом проверь.</p>
        <div class="pas-listing">
    <div class="pas-listing-header">
        <span class="pas-listing-title">program.pas</span>
        <div class="pas-listing-actions">
            <button class="btn btn-sm btn-light" data-copy>Копировать</button>
        </div>
    </div>
    <pre><code>var a, b: integer;
begin
  a := 5;
  b := 3;
  writeln('a + b = ', a + b);
  writeln('a * b = ', a * b);
end.</code></pre>
    
</div>
        <div class="pas-predict mt-3" data-expected="a + b = 8\na * b = 15">
            <label class="form-label">Что выведет программа? Напиши вывод (каждое значение с новой строки):</label>
            <textarea class="pas-predict-input" rows="4" placeholder="Твой ответ..."></textarea>
            <div class="d-flex align-items-center gap-2 mt-2">
                <button class="btn btn-primary" data-check>Проверить</button>
                <span class="pas-predict-feedback"></span>
            </div>
        </div>
    </div>
</div>


<!-- blanks-тренажёр -->
<div class="card mb-4">
    <div class="card-header bg-light fw-bold">
        <span class="pas-task-badge blank">Заполни пропуск</span> Тренажёр: заполни пропуски в структуре программы
    </div>
    <div class="card-body">
        <p class="text-muted mb-2">Это типовая структура программы Pascal. Подскажи компьютеру, какие <strong>ключевые слова</strong> должны быть на местах пропусков. Подсказки — в комментариях справа от строки.</p>
        <div class="pas-blanks">
            <div class="pas-listing">
                <pre><code class="pas-no-highlight"><span class="pas-keyword"><input class="pas-blank" data-correct="program" size="9"></span> First;            <span class="pas-comment">// ключевое слово</span>
<span class="pas-keyword"><input class="pas-blank" data-correct="var" size="6"></span> x: <span class="pas-type">integer</span>;            <span class="pas-comment">// ключевое слово</span>
<span class="pas-keyword"><input class="pas-blank" data-correct="begin" size="7"></span>                    <span class="pas-comment">// ключевое слово</span>
  x := 10;
  <span class="pas-builtin">writeln</span>(x);
<span class="pas-keyword"><input class="pas-blank" data-correct="end" size="6"></span>.                      <span class="pas-comment">// ключевое слово</span></code></pre>
            </div>
            <div class="d-flex align-items-center gap-2 mt-2">
                <button class="btn btn-primary" data-check>Проверить</button>
                <span class="pas-blanks-feedback"></span>
            </div>
        </div>
    </div>
</div>


<!-- reorder-тренажёр -->
<div class="card mb-4">
    <div class="card-header bg-light fw-bold">
        <span class="pas-task-badge reorder">Расставь по порядку</span> Тренажёр: расставь строки программы по порядку
    </div>
    <div class="card-body">
        <p class="text-muted mb-2">Программа складывает два числа и выводит сумму. <strong>Обрати внимание</strong>: <code>a := 5;</code> и <code>b := 7;</code> — независимы между собой, поэтому их можно ставить <em>в любом порядке</em>. А вот <code>s := a + b;</code> должно идти <strong>после</strong> обоих присваиваний, иначе сумма будет неправильной.</p>
        <div class="pas-reorder">
            <div class="pas-reorder-list">
        <div class="pas-reorder-item" data-order="1">program Sum;</div>
        <div class="pas-reorder-item" data-order="2">var a, b, s: integer;</div>
        <div class="pas-reorder-item" data-order="3">begin</div>
        <div class="pas-reorder-item" data-order="4">  a := 5;</div>
        <div class="pas-reorder-item" data-order="4">  b := 7;</div>
        <div class="pas-reorder-item" data-order="5">  s := a + b;</div>
        <div class="pas-reorder-item" data-order="6">  writeln(s);</div>
        <div class="pas-reorder-item" data-order="7">end.</div>
            </div>
        </div>
        <div class="d-flex align-items-center gap-2 mt-2">
            <button class="btn btn-primary" data-check>Проверить порядок</button>
            <span class="pas-reorder-feedback"></span>
        </div>
    </div>
</div>


</div>
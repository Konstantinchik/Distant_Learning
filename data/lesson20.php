<!-- lesson20.php — переработано в интерактивный Pascal-урок -->
<div class="lesson">

    <h2 class="text-primary mb-4">Занятие 20. Линейные программы</h2>

<!-- intro -->
<div class="alert alert-primary border-start border-primary border-4 fs-5 mb-4">
    Линейная программа — это последовательность команд, выполняемых одна за другой, без ветвлений и циклов. Самый частый шаблон: <em>прочитал данные → вычислил → вывел</em>.
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

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Программа">▶</button>
              Програ́мма
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Простейшая программа">▶</button>
              Просте́йшая програ́мма
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Линейная вычислительная программа">▶</button>
              Лине́йная вычисли́тельная програ́мма
            </td>
            <td class="text-start"></td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Программирование">▶</button>
              Программи́рование
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Объектно ориентированное программирование">▶</button>
              Объе́ктно-ориенти́рованное программи́рование
            </td>
          </tr>

          <tr>
            <td class="text-start"></td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Структурное программирование">▶</button>
              Структу́рное программи́рование
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Оператор">▶</button>
              Опера́тор
            </td>
            <td class="text-start"></td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Тип данных">▶</button>
              Тип да́нных
            </td>
            <td class="text-start"></td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Модуль">▶</button>
              Мо́дуль
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Библиотека модулей">▶</button>
              Библиоте́ка мо́дулей
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Читать. Прочитать">▶</button>
              Чита́ть I, Прочита́ть I (что?)
            </td>
            <td class="text-start"></td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Чтение">▶</button>
              Чте́ние (сущ., ср.р.)
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Чтение с клавиатуры">▶</button>
              Чте́ние с клавиату́ры
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Писать. Записать">▶</button>
              Писа́ть I, записа́ть I (что?)
            </td>
            <td class="text-start"></td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Запись">▶</button>
              За́пись (сущ., ж.р.)
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Запись в консоль">▶</button>
              За́пись в консо́ль
            </td>
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
        
        <h6 class="text-primary mt-3">Арифметические операции</h6>
        <div class="pas-listing">
            <pre><code>+   сложение
-   вычитание
*   умножение
/   деление вещественное
div деление целое
mod остаток от деления</code></pre>
        </div>
        <h6 class="text-primary mt-3">Пример: длина окружности</h6>
        <div class="pas-listing">
            <pre><code>program Circle;
const Pi = 3.14159;
var r, c: real;
begin
  r := 5;
  c := 2 * Pi * r;
  writeln('Длина окружности = ', c);
end.</code></pre>
        </div>
    </div>
</div>


<!-- run-тренажёр -->
<div class="card mb-4">
    <div class="card-header bg-light fw-bold">
        <span class="pas-task-badge run">▶ Запустить</span> Тренажёр: запустить программу
    </div>
    <div class="card-body">
        <p class="text-muted mb-2">Программа вычисляет сумму, разность, произведение и частное двух чисел.</p>
        <div class="pas-listing">
    <div class="pas-listing-header">
        <span class="pas-listing-title">Calc.pas</span>
        <div class="pas-listing-actions">
            <button class="btn btn-sm btn-success me-2" data-run>▶ Запустить</button>
            <button class="btn btn-sm btn-light" data-copy>Копировать</button>
        </div>
    </div>
    <pre><code>program Calc;
var a, b: integer;
begin
  a := 17;
  b := 5;
  writeln('a + b = ', a + b);
  writeln('a - b = ', a - b);
  writeln('a * b = ', a * b);
  writeln('a div b = ', a div b);
  writeln('a mod b = ', a mod b);
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
        <p class="text-muted mb-2">Особое внимание на порядок операций.</p>
        <div class="pas-listing">
    <div class="pas-listing-header">
        <span class="pas-listing-title">program.pas</span>
        <div class="pas-listing-actions">
            <button class="btn btn-sm btn-light" data-copy>Копировать</button>
        </div>
    </div>
    <pre><code>var x, y: integer;
begin
  x := 10;
  y := 3;
  writeln(x + y * 2);
  writeln((x + y) * 2);
  writeln(x div y);
  writeln(x mod y);
end.</code></pre>
    
</div>
        <div class="pas-predict mt-3" data-expected="16\n26\n3\n1">
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
        <span class="pas-task-badge blank">Заполни пропуск</span> Тренажёр: заполни пропуски — формула среднего
    </div>
    <div class="card-body">
        <p class="text-muted mb-2">Программа должна вычислить <strong>среднее арифметическое</strong> трёх чисел: a=10, b=20, c=30. Среднее = сумма всех чисел, делённая на их количество. Впиши недостающие <strong>арифметические операторы</strong>.</p>
        <div class="pas-blanks">
            <div class="pas-listing">
                <pre><code class="pas-no-highlight"><span class="pas-keyword">var</span> a, b, c, s: <span class="pas-type">integer</span>;
    avg: <span class="pas-type">real</span>;
<span class="pas-keyword">begin</span>
  a := 10; b := 20; c := 30;
  s := a <input class="pas-blank" data-correct="+" size="6"> b <input class="pas-blank" data-correct="+" size="6"> c;            <span class="pas-comment">// арифметический оператор</span>
  avg := s <input class="pas-blank" data-correct="/" size="6"> 3;                <span class="pas-comment">// арифметический оператор</span>
  <span class="pas-builtin">writeln</span>(<span class="pas-string">'Среднее = '</span>, avg);
<span class="pas-keyword">end</span>.</code></pre>
            </div>
            <div class="d-flex align-items-center gap-2 mt-2">
                <button class="btn btn-primary" data-check>Проверить</button>
                <span class="pas-blanks-feedback"></span>
            </div>
        </div>
    </div>
</div>


</div>
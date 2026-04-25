<!-- lesson24.php — переработано в интерактивный Pascal-урок -->
<div class="lesson">

    <h2 class="text-primary mb-4">Занятие 24. Массивы</h2>

<!-- intro -->
<div class="alert alert-primary border-start border-primary border-4 fs-5 mb-4">
    Массив — это упорядоченный набор элементов одного типа, объединённых под одним именем. Каждый элемент имеет свой <strong>индекс</strong> (порядковый номер). Массив идеален для хранения списков: оценок, температур, имён.
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
            <td class="text-start" style="width:45%;">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Таблица">▶</button>
              Табли́ца
            </td>
            <td class="text-start" style="width:55%;"></td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Массив">▶</button>
              Масси́в
            </td>
            <td class="text-start"></td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Размерность">▶</button>
              Разме́рность (ж.р.)
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Размерность массива">▶</button>
              Разме́рность масси́ва
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Размер">▶</button>
              Разме́р
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Размер массива">▶</button>
              Разме́р масси́ва
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn"
                      data-text="Случайный. Случайная. Случайное. Случайные">▶</button>
              Случа́йный, -ая, -ое, -ые
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Случайные числа">▶</button>
              Случа́йные чи́сла
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Датчик">▶</button>
              Да́тчик
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Датчик случайных чисел">▶</button>
              Да́тчик случа́йных чи́сел
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Установка">▶</button>
              Устано́вка
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Установка датчика случайных чисел">▶</button>
              Устано́вка да́тчика случа́йных чи́сел
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Генерировать, сгенерировать">▶</button>
              Генери́ровать I, сгенери́ровать I (что?)
            </td>
            <td class="text-start"></td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Генератор">▶</button>
              Генера́тор
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Генератор случайных чисел">▶</button>
              Генера́тор случа́йных чи́сел
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Генерация">▶</button>
              Генера́ция (сущ., ж.р.)
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Генерация случайного числа">▶</button>
              Генера́ция случа́йного числа́
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
        
        <h6 class="text-primary mt-3">Объявление массива</h6>
        <div class="pas-listing">
            <pre><code>var
  a: array[1..10] of integer;       // массив из 10 целых чисел
  marks: array[1..5] of real;       // 5 вещественных чисел
  letters: array[1..3] of string;   // 3 строки

// Доступ к элементу:
a[1] := 100;
writeln(a[1]);</code></pre>
        </div>
        <h6 class="text-primary mt-3">Заполнение и обход массива</h6>
        <div class="pas-listing">
            <pre><code>for i := 1 to 10 do
  a[i] := i * i;            // заполнили квадратами

for i := 1 to 10 do
  writeln(a[i]);            // вывели по одному в строке</code></pre>
        </div>
    </div>
</div>


<!-- run-тренажёр -->
<div class="card mb-4">
    <div class="card-header bg-light fw-bold">
        <span class="pas-task-badge run">▶ Запустить</span> Тренажёр: заполнить и вывести массив
    </div>
    <div class="card-body">
        <p class="text-muted mb-2">Запусти — программа создаёт массив квадратов чисел от 1 до 10 и печатает их.</p>
        <div class="pas-listing">
    <div class="pas-listing-header">
        <span class="pas-listing-title">ArraySquares.pas</span>
        <div class="pas-listing-actions">
            <button class="btn btn-sm btn-success me-2" data-run>▶ Запустить</button>
            <button class="btn btn-sm btn-light" data-copy>Копировать</button>
        </div>
    </div>
    <pre><code>program ArraySquares;
var a: array[1..10] of integer;
    i: integer;
begin
  for i := 1 to 10 do
    a[i] := i * i;
  for i := 1 to 10 do
    writeln('a[', i, '] = ', a[i]);
end.</code></pre>
    <div class="pas-run-output"></div>
</div>
    </div>
</div>


<!-- run-тренажёр -->
<div class="card mb-4">
    <div class="card-header bg-light fw-bold">
        <span class="pas-task-badge run">▶ Запустить</span> Тренажёр: сумма элементов массива
    </div>
    <div class="card-body">
        <p class="text-muted mb-2">Программа складывает все элементы массива.</p>
        <div class="pas-listing">
    <div class="pas-listing-header">
        <span class="pas-listing-title">ArraySum.pas</span>
        <div class="pas-listing-actions">
            <button class="btn btn-sm btn-success me-2" data-run>▶ Запустить</button>
            <button class="btn btn-sm btn-light" data-copy>Копировать</button>
        </div>
    </div>
    <pre><code>var a: array[1..5] of integer;
    i, sum: integer;
begin
  a[1] := 10; a[2] := 20; a[3] := 30; a[4] := 40; a[5] := 50;
  sum := 0;
  for i := 1 to 5 do
    sum := sum + a[i];
  writeln('Сумма = ', sum);
end.</code></pre>
    <div class="pas-run-output"></div>
</div>
    </div>
</div>


<!-- run-тренажёр -->
<div class="card mb-4">
    <div class="card-header bg-light fw-bold">
        <span class="pas-task-badge run">▶ Запустить</span> Тренажёр: поиск максимума
    </div>
    <div class="card-body">
        <p class="text-muted mb-2">Программа находит наибольший элемент массива.</p>
        <div class="pas-listing">
    <div class="pas-listing-header">
        <span class="pas-listing-title">ArrayMax.pas</span>
        <div class="pas-listing-actions">
            <button class="btn btn-sm btn-success me-2" data-run>▶ Запустить</button>
            <button class="btn btn-sm btn-light" data-copy>Копировать</button>
        </div>
    </div>
    <pre><code>var a: array[1..6] of integer;
    i, max: integer;
begin
  a[1] := 7; a[2] := 23; a[3] := 4; a[4] := 19; a[5] := 41; a[6] := 12;
  max := a[1];
  for i := 2 to 6 do
    if a[i] &gt; max then max := a[i];
  writeln('Максимум = ', max);
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
        <p class="text-muted mb-2">Массив заполняется в обратном порядке.</p>
        <div class="pas-listing">
    <div class="pas-listing-header">
        <span class="pas-listing-title">program.pas</span>
        <div class="pas-listing-actions">
            <button class="btn btn-sm btn-light" data-copy>Копировать</button>
        </div>
    </div>
    <pre><code>var a: array[1..5] of integer;
    i: integer;
begin
  for i := 1 to 5 do
    a[i] := 6 - i;
  for i := 1 to 5 do
    writeln(a[i]);
end.</code></pre>
    
</div>
        <div class="pas-predict mt-3" data-expected="5\n4\n3\n2\n1">
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
        <span class="pas-task-badge blank">Заполни пропуск</span> Тренажёр: заполни массив
    </div>
    <div class="card-body">
        <p class="text-muted mb-2">Программа должна заполнить массив <code>A[1..5]</code> <strong>кубами чисел</strong> и вывести их. Подсказки в комментариях справа.</p>
        <div class="pas-blanks">
            <div class="pas-listing">
                <pre><code class="pas-no-highlight"><span class="pas-keyword">var</span> a: <span class="pas-keyword">array</span>[1..<input class="pas-blank" data-correct="5" size="6">] <span class="pas-keyword">of</span> <span class="pas-type">integer</span>;     <span class="pas-comment">// введите число</span>
    i: <span class="pas-type">integer</span>;
<span class="pas-keyword">begin</span>
  <span class="pas-keyword">for</span> i := 1 <span class="pas-keyword">to</span> 5 <span class="pas-keyword">do</span>
    a[<input class="pas-blank" data-correct="i" size="6">] := i <input class="pas-blank" data-correct="*" size="6"> i <input class="pas-blank" data-correct="*" size="6"> i;        <span class="pas-comment">// имя переменной и арифметические операторы</span>
  <span class="pas-keyword">for</span> i := 1 <span class="pas-keyword">to</span> 5 <span class="pas-keyword">do</span>
    <span class="pas-builtin">writeln</span>(a[i]);
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
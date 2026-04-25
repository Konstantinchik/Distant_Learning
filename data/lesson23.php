<!-- lesson23.php — переработано в интерактивный Pascal-урок -->
<div class="lesson">

    <h2 class="text-primary mb-4">Занятие 23. Процедуры и функции</h2>

<!-- intro -->
<div class="alert alert-primary border-start border-primary border-4 fs-5 mb-4">
    Процедуры и функции — это <strong>подпрограммы</strong>: блоки кода, которые можно вызывать по имени. Они помогают структурировать программу и избегать повторений. Процедура выполняет действие; функция вычисляет и возвращает значение.
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
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Подпрограмма">▶</button>
              Подпрогра́мма
            </td>
            <td class="text-start" style="width:55%;"></td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Помогать, помочь">▶</button>
              Помога́ть I, помо́чь I (чему? чем?)
            </td>
            <td class="text-start"></td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Вспомогательный">▶</button>
              Вспомога́тельный, -ая, -ое, -ые
            </td>
            <td class="text-start">
              <div class="mb-1">
                <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Вспомогательный алгоритм">▶</button>
                Вспомога́тельный алгори́тм
              </div>
              <div>
                <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Вспомогательная функция">▶</button>
                Вспомога́тельная фу́нкция
              </div>
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Параметр">▶</button>
              Пара́метр
            </td>
            <td class="text-start">
              <div class="mb-1">
                <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Формальный параметр">▶</button>
                Форма́льный пара́метр
              </div>
              <div>
                <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Фактический параметр">▶</button>
                Факти́ческий пара́метр
              </div>
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Функция">▶</button>
              Фу́нкция
            </td>
            <td class="text-start"></td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Процедура">▶</button>
              Процеду́ра
            </td>
            <td class="text-start"></td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Программа">▶</button>
              Програ́мма
            </td>
            <td class="text-start"></td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Программный">▶</button>
              Програ́ммный, -ая, -ое, -ые
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Программная единица">▶</button>
              Програ́ммная едини́ца
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Спецификация">▶</button>
              Специфика́ция (сущ., ж.р.)
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Спецификация параметров">▶</button>
              Специфика́ция пара́метров
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Возврат">▶</button>
              Возвра́т
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Оператор возврата">▶</button>
              Опера́тор возвра́та
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Рекурсия">▶</button>
              Реку́рсия
            </td>
            <td class="text-start"></td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Рекурсивный">▶</button>
              Рекурси́вный, -ая, -ое, -ые
            </td>
            <td class="text-start">
              <div class="mb-1">
                <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Рекурсивное определение">▶</button>
                Рекурси́вное определе́ние
              </div>
              <div>
                <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Рекурсивный алгоритм">▶</button>
                Рекурси́вный алгори́тм
              </div>
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Обращение">▶</button>
              Обраще́ние (сущ., ср.р.)
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Обращение к функции">▶</button>
              Обраще́ние к фу́нкции
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
        
        <h6 class="text-primary mt-3">Процедура</h6>
        <div class="pas-listing">
            <pre><code>procedure Имя(параметры);
var локальные_переменные;
begin
  тело
end;

// вызов:
Имя(аргументы);</code></pre>
        </div>
        <h6 class="text-primary mt-3">Функция</h6>
        <div class="pas-listing">
            <pre><code>function Имя(параметры): тип_результата;
var локальные;
begin
  тело;
  Имя := значение;   // возврат
end;

// вызов в выражении:
x := Имя(аргументы);</code></pre>
        </div>
        <h6 class="text-primary mt-3">Пример процедуры</h6>
        <div class="pas-listing">
            <pre><code>procedure Greet(name: string);
begin
  writeln('Привет, ', name, '!');
end;

begin
  Greet('Анна');
  Greet('Иван');
end.</code></pre>
        </div>
        <h6 class="text-primary mt-3">Пример функции</h6>
        <div class="pas-listing">
            <pre><code>function Square(n: integer): integer;
begin
  Square := n * n;
end;

var x: integer;
begin
  x := Square(5);
  writeln(x);
end.</code></pre>
        </div>
    </div>
</div>


<!-- predict-тренажёр -->
<div class="card mb-4">
    <div class="card-header bg-light fw-bold">
        <span class="pas-task-badge predict">Что выведет?</span> Тренажёр: что выведет программа с процедурой?
    </div>
    <div class="card-body">
        <p class="text-muted mb-2">Процедура PrintLine выводит строку из символов '*' заданной длины.</p>
        <div class="pas-listing">
    <div class="pas-listing-header">
        <span class="pas-listing-title">program.pas</span>
        <div class="pas-listing-actions">
            <button class="btn btn-sm btn-light" data-copy>Копировать</button>
        </div>
    </div>
    <pre><code>procedure PrintLine(n: integer);
var i: integer;
begin
  for i := 1 to n do write('*');
  writeln;
end;

begin
  PrintLine(3);
  PrintLine(5);
  PrintLine(7);
end.</code></pre>
    
</div>
        <div class="pas-predict mt-3" data-expected="***\n*****\n*******">
            <label class="form-label">Что выведет программа? Напиши вывод (каждое значение с новой строки):</label>
            <textarea class="pas-predict-input" rows="4" placeholder="Твой ответ..."></textarea>
            <div class="d-flex align-items-center gap-2 mt-2">
                <button class="btn btn-primary" data-check>Проверить</button>
                <span class="pas-predict-feedback"></span>
            </div>
        </div>
    </div>
</div>


<!-- predict-тренажёр -->
<div class="card mb-4">
    <div class="card-header bg-light fw-bold">
        <span class="pas-task-badge predict">Что выведет?</span> Тренажёр: что вернёт функция?
    </div>
    <div class="card-body">
        <p class="text-muted mb-2">Функция Cube возвращает куб числа.</p>
        <div class="pas-listing">
    <div class="pas-listing-header">
        <span class="pas-listing-title">program.pas</span>
        <div class="pas-listing-actions">
            <button class="btn btn-sm btn-light" data-copy>Копировать</button>
        </div>
    </div>
    <pre><code>function Cube(n: integer): integer;
begin
  Cube := n * n * n;
end;

begin
  writeln(Cube(2));
  writeln(Cube(4));
end.</code></pre>
    
</div>
        <div class="pas-predict mt-3" data-expected="8\n64">
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
        <span class="pas-task-badge blank">Заполни пропуск</span> Тренажёр: заполни функцию
    </div>
    <div class="card-body">
        <p class="text-muted mb-2">Функция должна возвращать <strong>абсолютное значение</strong> числа: для отрицательного — изменить знак на плюс, для положительного — оставить как есть. Подсказки в комментариях справа.</p>
        <div class="pas-blanks">
            <div class="pas-listing">
                <pre><code class="pas-no-highlight"><span class="pas-keyword">function</span> MyAbs(x: <span class="pas-type">integer</span>): <span class="pas-type"><input class="pas-blank" data-correct="integer" size="9"></span>;     <span class="pas-comment">// введите тип данных</span>
<span class="pas-keyword">begin</span>
  <span class="pas-keyword">if</span> x <input class="pas-blank" data-correct="<" size="6"> 0                       <span class="pas-comment">// введите знак сравнения</span>
  <span class="pas-keyword">then</span> MyAbs := <input class="pas-blank" data-correct="-x" size="6">                  <span class="pas-comment">// введите выражение</span>
  <span class="pas-keyword">else</span> MyAbs := x;
<span class="pas-keyword">end</span>;</code></pre>
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
        <span class="pas-task-badge reorder">Расставь по порядку</span> Тренажёр: расставь объявление функции
    </div>
    <div class="card-body">
        <p class="text-muted mb-2">Это функция Min, возвращающая меньшее из двух чисел. Расставь строки по порядку.</p>
        <div class="pas-reorder">
            <div class="pas-reorder-list">
        <div class="pas-reorder-item" data-order="1">function Min(a, b: integer): integer;</div>
        <div class="pas-reorder-item" data-order="2">begin</div>
        <div class="pas-reorder-item" data-order="3">  if a &lt; b</div>
        <div class="pas-reorder-item" data-order="4">  then Min := a</div>
        <div class="pas-reorder-item" data-order="5">  else Min := b;</div>
        <div class="pas-reorder-item" data-order="6">end;</div>
            </div>
        </div>
        <div class="d-flex align-items-center gap-2 mt-2">
            <button class="btn btn-primary" data-check>Проверить порядок</button>
            <span class="pas-reorder-feedback"></span>
        </div>
    </div>
</div>


<!-- note -->
<div class="alert alert-warning mb-4">
    <strong>Примечание:</strong> Учти: встроенный «Запустить» в этих тренажёрах поддерживает базовые конструкции, но <strong>не работает</strong> с procedure/function. Для запуска таких программ используй задание «что выведет?» и проверяй вывод по эталону, либо запусти код в Free Pascal на компьютере.
</div>

</div>
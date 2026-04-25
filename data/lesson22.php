<!-- lesson22.php — переработано в интерактивный Pascal-урок -->
<div class="lesson">

    <h2 class="text-primary mb-4">Занятие 22. Циклы</h2>

<!-- intro -->
<div class="alert alert-primary border-start border-primary border-4 fs-5 mb-4">
    В Pascal три типа циклов: <strong>for</strong> — с заранее известным числом повторений, <strong>while</strong> — с проверкой условия в начале, <strong>repeat … until</strong> — с проверкой условия в конце.
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

          <!-- Цикл -->
          <tr>
            <td class="text-start" style="width:45%;">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Цикл">▶</button>
              Цикл
            </td>
            <td class="text-start" style="width:55%;">
              <div class="mb-1">
                <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Цикл с параметром">▶</button>
                Цикл с пара́метром
              </div>
              <div class="mb-1">
                <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Цикл с предусловием">▶</button>
                Цикл с предусло́вием
              </div>
              <div>
                <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Цикл с постусловием">▶</button>
                Цикл с постусло́вием
              </div>
            </td>
          </tr>

          <!-- Счётчик -->
          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Счётчик">▶</button>
              Счётчик
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Счётчик цикла">▶</button>
              Счётчик ци́кла
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
        
        <h6 class="text-primary mt-3">Цикл for (с параметром)</h6>
        <div class="pas-listing">
            <pre><code>for счётчик := от to до do
  оператор;

// или с убыванием:
for счётчик := от downto до do
  оператор;</code></pre>
        </div>
        <h6 class="text-primary mt-3">Цикл while (с предусловием)</h6>
        <div class="pas-listing">
            <pre><code>while условие do
  оператор;
// Тело цикла выполняется, пока условие истинно.</code></pre>
        </div>
        <h6 class="text-primary mt-3">Цикл repeat (с постусловием)</h6>
        <div class="pas-listing">
            <pre><code>repeat
  оператор;
until условие;
// Тело выполняется хотя бы один раз; цикл прекращается, когда условие становится истинным.</code></pre>
        </div>
    </div>
</div>


<!-- run-тренажёр -->
<div class="card mb-4">
    <div class="card-header bg-light fw-bold">
        <span class="pas-task-badge run">▶ Запустить</span> Тренажёр: цикл for — таблица квадратов
    </div>
    <div class="card-body">
        <p class="text-muted mb-2">Запусти и убедись, что программа выводит квадраты чисел от 0 до 10.</p>
        <div class="pas-listing">
    <div class="pas-listing-header">
        <span class="pas-listing-title">ForSquares.pas</span>
        <div class="pas-listing-actions">
            <button class="btn btn-sm btn-success me-2" data-run>▶ Запустить</button>
            <button class="btn btn-sm btn-light" data-copy>Копировать</button>
        </div>
    </div>
    <pre><code>program ForSquares;
var x, y: integer;
begin
  for x := 0 to 10 do
  begin
    y := x * x;
    writeln(x, ' -&gt; ', y);
  end;
end.</code></pre>
    <div class="pas-run-output"></div>
</div>
    </div>
</div>


<!-- run-тренажёр -->
<div class="card mb-4">
    <div class="card-header bg-light fw-bold">
        <span class="pas-task-badge run">▶ Запустить</span> Тренажёр: цикл while
    </div>
    <div class="card-body">
        <p class="text-muted mb-2">Тот же результат, но с циклом while.</p>
        <div class="pas-listing">
    <div class="pas-listing-header">
        <span class="pas-listing-title">WhileSquares.pas</span>
        <div class="pas-listing-actions">
            <button class="btn btn-sm btn-success me-2" data-run>▶ Запустить</button>
            <button class="btn btn-sm btn-light" data-copy>Копировать</button>
        </div>
    </div>
    <pre><code>program WhileSquares;
var x, y: integer;
begin
  x := 0;
  while x &lt;= 10 do
  begin
    y := x * x;
    writeln(x, ' -&gt; ', y);
    x := x + 1;
  end;
end.</code></pre>
    <div class="pas-run-output"></div>
</div>
    </div>
</div>


<!-- run-тренажёр -->
<div class="card mb-4">
    <div class="card-header bg-light fw-bold">
        <span class="pas-task-badge run">▶ Запустить</span> Тренажёр: вложенные циклы — таблица умножения
    </div>
    <div class="card-body">
        <p class="text-muted mb-2">Цикл внутри цикла — классический способ построить таблицу.</p>
        <div class="pas-listing">
    <div class="pas-listing-header">
        <span class="pas-listing-title">MultTable.pas</span>
        <div class="pas-listing-actions">
            <button class="btn btn-sm btn-success me-2" data-run>▶ Запустить</button>
            <button class="btn btn-sm btn-light" data-copy>Копировать</button>
        </div>
    </div>
    <pre><code>program MultTable;
var x, y, p: integer;
begin
  for x := 1 to 5 do
  begin
    for y := 1 to 5 do
    begin
      p := x * y;
      write(p, ' ');
    end;
    writeln;
  end;
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
        <p class="text-muted mb-2">Цикл с убыванием — обрати внимание на начальное и конечное значения.</p>
        <div class="pas-listing">
    <div class="pas-listing-header">
        <span class="pas-listing-title">program.pas</span>
        <div class="pas-listing-actions">
            <button class="btn btn-sm btn-light" data-copy>Копировать</button>
        </div>
    </div>
    <pre><code>var i: integer;
begin
  for i := 5 downto 1 do
    writeln(i);
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


<!-- reorder-тренажёр -->
<div class="card mb-4">
    <div class="card-header bg-light fw-bold">
        <span class="pas-task-badge reorder">Расставь по порядку</span> Тренажёр: расставь строки цикла
    </div>
    <div class="card-body">
        <p class="text-muted mb-2">Это цикл <code>repeat-until</code>, выводящий чётные числа от 0 до 10. Расставь строки в правильном порядке. <strong>Обрати внимание</strong> — что должно повторяться на каждой итерации, а что выполняется один раз.</p>
        <div class="pas-reorder">
            <div class="pas-reorder-list">
        <div class="pas-reorder-item" data-order="1">var n: integer;</div>
        <div class="pas-reorder-item" data-order="2">begin</div>
        <div class="pas-reorder-item" data-order="3">  n := 0;</div>
        <div class="pas-reorder-item" data-order="4">  repeat</div>
        <div class="pas-reorder-item" data-order="5">    writeln(n);</div>
        <div class="pas-reorder-item" data-order="6">    n := n + 2;</div>
        <div class="pas-reorder-item" data-order="7">  until n &gt; 10;</div>
        <div class="pas-reorder-item" data-order="8">end.</div>
            </div>
        </div>
        <div class="d-flex align-items-center gap-2 mt-2">
            <button class="btn btn-primary" data-check>Проверить порядок</button>
            <span class="pas-reorder-feedback"></span>
        </div>
    </div>
</div>


<!-- blanks-тренажёр -->
<div class="card mb-4">
    <div class="card-header bg-light fw-bold">
        <span class="pas-task-badge blank">Заполни пропуск</span> Тренажёр: заполни цикл
    </div>
    <div class="card-body">
        <p class="text-muted mb-2">Программа должна посчитать <strong>сумму чисел от 1 до 100</strong>. Цикл <code>for</code> прибавляет к переменной <code>s</code> каждое следующее <code>i</code>. Подсказки в комментариях справа.</p>
        <div class="pas-blanks">
            <div class="pas-listing">
                <pre><code class="pas-no-highlight"><span class="pas-keyword">var</span> i, s: <span class="pas-type">integer</span>;
<span class="pas-keyword">begin</span>
  s := 0;
  <span class="pas-keyword">for</span> i := 1 <span class="pas-keyword">to</span> <input class="pas-blank" data-correct="100" size="6"> <span class="pas-keyword">do</span>      <span class="pas-comment">// введите число</span>
    s := s <input class="pas-blank" data-correct="+" size="6"> i;            <span class="pas-comment">// введите арифметический оператор</span>
  <span class="pas-builtin">writeln</span>(<input class="pas-blank" data-correct="s" size="6">);                    <span class="pas-comment">// введите имя переменной</span>
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
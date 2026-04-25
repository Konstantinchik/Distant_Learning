<!-- lesson21.php — переработано в интерактивный Pascal-урок -->
<div class="lesson">

    <h2 class="text-primary mb-4">Занятие 21. Ветвление</h2>

<!-- intro -->
<div class="alert alert-primary border-start border-primary border-4 fs-5 mb-4">
    Условный оператор <code>if … then … else</code> позволяет программе принимать решения. Часто строит «развилку»: одно действие — если условие истинно, другое — если ложно.
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
            <td class="text-start w-50">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Оператор">▶</button>
              Опера́тор
            </td>
            <td class="text-start w-50">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Условный оператор">▶</button>
              Усло́вный опера́тор
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Оператор выбора">▶</button>
              Опера́тор вы́бора
            </td>
            <td class="text-start"></td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Переключатель">▶</button>
              Переключа́тель (м.р.)
            </td>
            <td class="text-start"></td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Константа">▶</button>
              Конста́нта
            </td>
            <td class="text-start"></td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Нумеровать, пронумеровать">▶</button>
              Нумерова́ть I, пронумерова́ть I (что?)
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Пронумеровать дни недели">▶</button>
              Пронумерова́ть дни неде́ли
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
        
        <h6 class="text-primary mt-3">Полное и неполное ветвление</h6>
        <div class="pas-listing">
            <pre><code>// Неполное: только then
if условие then оператор;

// Полное: then и else
if условие then оператор1
          else оператор2;

// Составной оператор: begin … end
if условие then
begin
  оператор1;
  оператор2;
end
else
  оператор3;</code></pre>
        </div>
        <h6 class="text-primary mt-3">Операции сравнения</h6>
        <div class="pas-listing">
            <pre><code>=    равно
&lt;&gt;   не равно
&lt;    меньше
&gt;    больше
&lt;=   меньше или равно
&gt;=   больше или равно</code></pre>
        </div>
    </div>
</div>


<!-- run-тренажёр -->
<div class="card mb-4">
    <div class="card-header bg-light fw-bold">
        <span class="pas-task-badge run">▶ Запустить</span> Тренажёр: проверка чёт/нечёт
    </div>
    <div class="card-body">
        <p class="text-muted mb-2">Программа определяет, чётное число или нечётное.</p>
        <div class="pas-listing">
    <div class="pas-listing-header">
        <span class="pas-listing-title">EvenOdd.pas</span>
        <div class="pas-listing-actions">
            <button class="btn btn-sm btn-success me-2" data-run>▶ Запустить</button>
            <button class="btn btn-sm btn-light" data-copy>Копировать</button>
        </div>
    </div>
    <pre><code>program EvenOdd;
var n: integer;
begin
  n := 17;
  if n mod 2 = 0 then writeln(n, ' — чётное')
  else writeln(n, ' — нечётное');
end.</code></pre>
    <div class="pas-run-output"></div>
</div>
    </div>
</div>


<!-- run-тренажёр -->
<div class="card mb-4">
    <div class="card-header bg-light fw-bold">
        <span class="pas-task-badge run">▶ Запустить</span> Тренажёр: максимум двух чисел
    </div>
    <div class="card-body">
        <p class="text-muted mb-2">Программа выбирает большее из двух чисел.</p>
        <div class="pas-listing">
    <div class="pas-listing-header">
        <span class="pas-listing-title">MaxOf2.pas</span>
        <div class="pas-listing-actions">
            <button class="btn btn-sm btn-success me-2" data-run>▶ Запустить</button>
            <button class="btn btn-sm btn-light" data-copy>Копировать</button>
        </div>
    </div>
    <pre><code>program MaxOf2;
var a, b: integer;
begin
  a := 23;
  b := 41;
  if a &gt; b then writeln('Максимум: ', a)
  else writeln('Максимум: ', b);
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
        <p class="text-muted mb-2">Вложенное условие — внимательно проследи логику.</p>
        <div class="pas-listing">
    <div class="pas-listing-header">
        <span class="pas-listing-title">program.pas</span>
        <div class="pas-listing-actions">
            <button class="btn btn-sm btn-light" data-copy>Копировать</button>
        </div>
    </div>
    <pre><code>var n: integer;
begin
  n := 0;
  if n &gt; 0 then writeln('положительное')
  else if n &lt; 0 then writeln('отрицательное')
  else writeln('ноль');
end.</code></pre>
    
</div>
        <div class="pas-predict mt-3" data-expected="ноль">
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
        <span class="pas-task-badge blank">Заполни пропуск</span> Тренажёр: заполни условие
    </div>
    <div class="card-body">
        <p class="text-muted mb-2">Программа находит <strong>минимум</strong> из двух чисел. У нас a = 12, b = 7. Логика простая: если a меньше b — выводим a; иначе — выводим b. Подсказки в комментариях справа.</p>
        <div class="pas-blanks">
            <div class="pas-listing">
                <pre><code class="pas-no-highlight"><span class="pas-keyword">var</span> a, b: <span class="pas-type">integer</span>;
<span class="pas-keyword">begin</span>
  a := 12; b := 7;
  <span class="pas-keyword">if</span> a <input class="pas-blank" data-correct="<" size="6"> b                                 <span class="pas-comment">// введите знак сравнения</span>
  <span class="pas-keyword">then</span> <span class="pas-builtin">writeln</span>(<span class="pas-string">'Минимум: '</span>, <input class="pas-blank" data-correct="a" size="6">)         <span class="pas-comment">// введите имя переменной</span>
  <span class="pas-keyword">else</span> <span class="pas-builtin">writeln</span>(<span class="pas-string">'Минимум: '</span>, <input class="pas-blank" data-correct="b" size="6">);        <span class="pas-comment">// введите имя переменной</span>
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
<!--lesson22.php-->
<div class="lesson">

    <h2 class="text-primary mb-4">
        Занятие 22. Язык программирования Паскаль. Циклы
    </h2>

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

<!-- 2. Прочитайте текст. -->
<div class="card mb-5 border-primary">
    <div class="card-header bg-primary text-white fw-bold">2. Прочитайте текст.</div>
    <div class="card-body fs-5 lh-lg">
<pre style="white-space: pre-wrap; font-family: inherit; margin: 0;">Для программирования циклов в языке Паскаль существуют три типа
операторов: цикл с параметром (for), цикл с предусловием (while), цикл с
постусловием (repeat…until).
     Цикл с параметром. Формат оператора цикла с параметром:
     for счетчик := начальное_значение to конечное_значение do
      оператор;

Cчётчик — переменная, которая изменяется на каждой итерации.
Начальное_значение — присваивается счётчику один раз в начале цикла.
Конечное_значение — условие окончания цикла (итерации выполняются, пока
счётчик ≤ конечного значения).
Оператор — тело цикла, может быть простым или составным (несколько
операторов заключаются в begin … end).

      Задача 1. Найти значения функции y = x2 для всех целых значений x из
отрезка [0; 20]. Блок-схема алгоритма решения данной задачи была составлена в
тексте занятия 12 (рис. 17). Используем её для составления программы.
Листинг 11.
program ForCycle;
var
        x, y: integer;              //описание переменных величин целого типа
begin
      // цикл с параметром (for)
      for x := 0 to 20 do           //заголовок цикла
      begin
              y := x * x;           // вычисление квадрата
              WriteLn(x, &#x27; &#x27;, y);   // вывод значений x и y
      end;
end.
      Цикл с предусловием. Формат оператора цикла с предусловием:
      While выражение do
           оператор;
      Цикл с предусловием продолжает работу, пока значение выражения (условие
продолжения работы цикла) истинно. Как и для цикла с параметром, оператор (тело
цикла) может быть простым или составным. Если оператор составной, то его нужно
заключить в блок begin … end.
      Блок-схема алгоритма решения задачи с помощью цикла с предусловием
составлена в тексте занятия 12 (рис. 18, а). Используя оператор цикла с предусловием
для решения задачи 1, получим следующую программу.
Листинг 1_2.
program WhileCycle;
var
        x, y: integer;           //описание переменных величин целого типа
begin
        x := 0;                  // начальное значение
        while x &lt;= 20 do         // условие продолжения. Цикл с предусловием
        begin
                 y := x * x;         // вычисление значения величины у
                 WriteLn(x, &#x27; &#x27;, y); // вывод x и y
                 x := x + 1;     // увеличение x
        end;
end.
Листинг 1_3.
program RepeatCycle;
var
        x, y: integer;           //описание переменных величин целого типа
begin
        x := 0;                  // начальное значение
        repeat                   // цикл с постусловием
        y := x * x;              // вычисление квадрата
        WriteLn(x, &#x27; &#x27;, y);      // вывод x и y
        x := x + 1;            // увеличение x на 1
        until x &gt; 20;          // условие выхода их цикла
end.
        Циклические алгоритмы, как и условные, могут быть вложенными.

      Задача 2. Вывести на экран таблицу умножения для чисел от 1 до 10
(табл. 9).
      Используя оператор цикла с параметром и блок-схему алгоритма решения
данной задачи (рис. 19), составим программу.
Л и с т и нг 2 .
program NestedLoops;
var
        x, y, p: integer;                 //описание переменных величин целого типа
begin
        for x := 1 to 10 do               // внешний цикл
               for y := 1 to 10 do        // внутренний цикл
               begin
                        p := x * y;       // вычисление произведения
                        Write(p, &#x27; &#x27;);    // вывод p через пробел
               end;
               WriteLn;        // переход на новую строку после строки таблицы
end.</pre>
    </div>
</div>

<!-- 3. Ответьте на вопросы. -->
<div class="card mb-5">
    <div class="card-header bg-primary text-white fw-bold">3. Ответьте на вопросы.</div>
    <div class="card-body">
        <ol class="list-unstyled mb-0">
                <li class="list-group-item p-3 mb-2 bg-light border rounded">
                    <p class="mb-2 fw-500">1. Что такое циклический алгоритм?</p>
                    <textarea class="form-control" rows="2" placeholder="Ваш ответ…"></textarea>
                </li>
                <li class="list-group-item p-3 mb-2 bg-light border rounded">
                    <p class="mb-2 fw-500">2. Какие операторы существуют в языке Паскаль для программирования циклических алгоритмов?</p>
                    <textarea class="form-control" rows="2" placeholder="Ваш ответ…"></textarea>
                </li>
                <li class="list-group-item p-3 mb-2 bg-light border rounded">
                    <p class="mb-2 fw-500">3. Какой формат оператора цикла с параметром?</p>
                    <textarea class="form-control" rows="2" placeholder="Ваш ответ…"></textarea>
                </li>
                <li class="list-group-item p-3 mb-2 bg-light border rounded">
                    <p class="mb-2 fw-500">4. Как выполняется оператор цикла с параметром?</p>
                    <textarea class="form-control" rows="2" placeholder="Ваш ответ…"></textarea>
                </li>
                <li class="list-group-item p-3 mb-2 bg-light border rounded">
                    <p class="mb-2 fw-500">5. Какой формат оператора цикла с предусловием?</p>
                    <textarea class="form-control" rows="2" placeholder="Ваш ответ…"></textarea>
                </li>
                <li class="list-group-item p-3 mb-2 bg-light border rounded">
                    <p class="mb-2 fw-500">6. Какой порядок выполнения оператора цикла с предусловием?</p>
                    <textarea class="form-control" rows="2" placeholder="Ваш ответ…"></textarea>
                </li>
                <li class="list-group-item p-3 mb-2 bg-light border rounded">
                    <p class="mb-2 fw-500">7. Какой формат оператора цикла с постусловием?</p>
                    <textarea class="form-control" rows="2" placeholder="Ваш ответ…"></textarea>
                </li>
                <li class="list-group-item p-3 mb-2 bg-light border rounded">
                    <p class="mb-2 fw-500">8. Как выполняется оператор цикла с постусловием?</p>
                    <textarea class="form-control" rows="2" placeholder="Ваш ответ…"></textarea>
                </li>
        </ol>
    </div>
</div>

<!-- 4. Заполните схему. Напишите названия типов операторов для -->
<div class="card mb-5">
    <div class="card-header bg-light fw-bold">4. Заполните схему. Напишите названия типов операторов для</div>
    <div class="card-body fs-5">
<pre style="white-space: pre-wrap; font-family: inherit; margin: 0;">программирования циклов и их особенности.</pre>
        <div class="mt-3">
            <textarea class="form-control" rows="4" placeholder="Ваш ответ…"></textarea>
        </div>
    </div>
</div>

<!-- 5. Составьте план рассказа о способах программирования цикличес -->
<div class="card mb-5 border-success">
    <div class="card-header bg-success text-white fw-bold">5. Составьте план рассказа о способах программирования циклических</div>
    <div class="card-body">
<pre style="white-space: pre-wrap; font-family: inherit; margin: 0;">алгоритмов на Паскале. Расскажите текст по плану.</pre>
        <div class="mt-3">
            <textarea class="form-control" rows="6" placeholder="Запишите ваш ответ для тренировки…"></textarea>
        </div>
    </div>
</div>

<!-- 6. Составьте программы решения задач задания 8 из занятия 12. И -->
<div class="card mb-5">
    <div class="card-header bg-light fw-bold">6. Составьте программы решения задач задания 8 из занятия 12. Используйте</div>
    <div class="card-body fs-5">
<pre style="white-space: pre-wrap; font-family: inherit; margin: 0;">блок-схемы.</pre>
        <div class="mt-3">
            <textarea class="form-control" rows="4" placeholder="Ваш ответ…"></textarea>
        </div>
    </div>
</div>

</div>

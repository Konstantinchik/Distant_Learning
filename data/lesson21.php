<!--lesson21.php-->
<div class="lesson">

    <h2 class="text-primary mb-4">
        Занятие 21. Язык программирования Паскаль. Ветвление 

    </h2>

    <!-- ==================================================
     1. Прочитайте слова и словосочетания, переведите, запомните их значения.
     ================================================== -->

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

<!-- 2. Прочитайте текст -->
<div class="card mb-5 border-primary">
    <div class="card-header bg-primary text-white fw-bold">2. Прочитайте текст</div>
    <div class="card-body fs-5 lh-lg">
<pre style="white-space: pre-wrap; font-family: inherit; margin: 0;">Для программирования разветвляющихся алгоритмов в языке Паскаль
существуют различные средства. К ним относятся условный оператор if…then…else
и оператор выбора case…of.
      Условный оператор. Формат условного оператора:
      if выражение then
            оператор1
      else
            оператор2;

     Это полная форма условного оператора. Здесь выражение — это условие,
которое содержит операции отношения и логические операции. Если значение этого
выражения - не нуль (истина), то выполняется оператор1, если значение
выражения - нуль (ложь), то выполняется оператор2.
     Запомните!
   1. Внутри условного оператора выражение не обязательно заключать в
      скобки.
   2. Если тело ветви состоит из одного оператора, скобки begin…end не нужны;
      для нескольких операторов их используют
   3. Для неполной формы условного оператора можно опустить else:

      Задача 1. Найти наибольшее из двух чисел.
      В тексте занятия 11 были составлены две блок-схемы решения данной задачи -
с помощью полной и неполной формы условного алгоритма (рис. 13). На основе
этих блок-схем составим две программы решения данной задачи.
Листинг 1_1.
program MaxOfTwo;
var
      x, y, m: real;
begin
        ReadLn(x);        // ввод значения x
        ReadLn(y);        // ввод значения y
        if x &gt; y then
              m := x
        else
              m := y;       // присваивание максимального значения

        WriteLn(m);       // вывод максимального значения
end.

Листинг 1_2.
program MaxOfTwo;
var
      x, y, m: real;
begin
      ReadLn(x);     // ввод значения x
      ReadLn(y);     // ввод значения y

        m := x;         // присваивание начального значения

        if y &gt; m then    // сравнение и при необходимости обновление m
              m := y;
        WriteLn(m);       // вывод максимального значения
end.

        Задача 2. Найти значение функции у = |x| для любого значения х :



      Блок-схема решения данной задачи была составлена в тексте занятия 11 (рис.
14). Составим программу решения данной задачи.
Листинг 2.
program AbsoluteValue;
var
     x, y: real;       //описание переменных величин вещественного типа
begin
     ReadLn(x);        // ввод значения x
       if x &gt;= 0 then    //сравнение значения величины х с нулём
           y := x
       else
           y := -x;      // вычисление модуля числа
  WriteLn(y);            // вывод результата
end.
      В языке Pascal можно вычислить абсолютное значение числа без
использования условного оператора if…then…else, используя встроенные функции: y
:= abs(x); В старых реализациях Pascal для вещественных чисел иногда
использовалась функция fabs (из математической библиотеки), но в стандартном
Pascal достаточно abs.
       Задача 3. Найти значение функции y=f(x) для любого значения x:




     Программу решения данной задачи составим на основе блок-схемы, которая
содержит вложенные условные алгоритмы (рис. 15, б).
Листинг 3.
program ConditionalExample;
var
      x, y: real;     //описание переменных величин вещественного типа
begin
      ReadLn(x);      // ввод значения x

       if x &lt;= 0 then
              y := x * x
       else if x &lt;= 2 then
              y := 2 * x
       else
              y := 4;

       WriteLn(y);           // вывод значения y
end.

Оператор выбора (переключатель). Формат оператора выбора:
case целочисленное_выражение of
      константа1: список_операторов;
      константа2: список_операторов;
      …
else
      список_операторов;   // обработка всех остальных случаев
end;


   Замечание. В Паскале ветвь else (аналог default в C++) может отсутствовать.

   Порядок выполнения оператора выбора, следующий:
   1. Вычисляется выражение, указанное после case.
   2. Полученное значение сравнивается с константами, перечисленными в
      ветвях case.
   3. При первом совпадении выполняются операторы, записанные после :.
         o Если ни с одной константой совпадения не произошло и указана ветвь
            else, выполняются операторы после else.
         o Если ветви else нет — выполнение оператора case завершается без
            какого-либо действия.


     Задача 4. Спросить у пользователя номер дня недели и вывести на экран
название этого дня недели.
     Дни недели пронумеруем от одного до семи: 1 - понедельник, 2 - вторник, 7 -
воскресенье.

Листинг 4.
program DayOfWeek;
var
        n: integer;              //описание переменной величины целого типа
begin
        ReadLn(n);               // ввод числа
        case n of
               1: WriteLn(&#x27;Понедельник.&#x27;);
               2: WriteLn(&#x27;Вторник.&#x27;);
               3: WriteLn(&#x27;Среда.&#x27;);
               4: WriteLn(&#x27;Четверг.&#x27;);
               5: WriteLn(&#x27;Пятница.&#x27;);
               6: WriteLn(&#x27;Суббота.&#x27;);
               7: WriteLn(&#x27;Воскресенье.&#x27;);
        Else                     // если нужного ответа нет
               WriteLn(&#x27;Такого дня недели нет!&#x27;);
        end;
end.
     Замечание. В Паскал оператор case … of проверяет значение переменной n и
выполняет соответствующую ветвь. Ветвь else используется для обработки всех
значений, не указанных явно в списке.</pre>
    </div>
</div>

<!-- 3. Ответьте на вопросы. -->
<div class="card mb-5">
    <div class="card-header bg-primary text-white fw-bold">3. Ответьте на вопросы.</div>
    <div class="card-body">
        <ol class="list-unstyled mb-0">
                <li class="list-group-item p-3 mb-2 bg-light border rounded">
                    <p class="mb-2 fw-500">1. Что такое условный (разветвляющийся) алгоритм?</p>
                    <textarea class="form-control" rows="2" placeholder="Ваш ответ…"></textarea>
                </li>
                <li class="list-group-item p-3 mb-2 bg-light border rounded">
                    <p class="mb-2 fw-500">2. Какие операторы существуют в языке Паскаль для программирования разветвляющихся (условных) алгоритмов?</p>
                    <textarea class="form-control" rows="2" placeholder="Ваш ответ…"></textarea>
                </li>
                <li class="list-group-item p-3 mb-2 bg-light border rounded">
                    <p class="mb-2 fw-500">3. Какой формат условного оператора?</p>
                    <textarea class="form-control" rows="2" placeholder="Ваш ответ…"></textarea>
                </li>
                <li class="list-group-item p-3 mb-2 bg-light border rounded">
                    <p class="mb-2 fw-500">4. Что такое выражение в записи условного оператора?</p>
                    <textarea class="form-control" rows="2" placeholder="Ваш ответ…"></textarea>
                </li>
                <li class="list-group-item p-3 mb-2 bg-light border rounded">
                    <p class="mb-2 fw-500">5. Как выполняется условный оператор?</p>
                    <textarea class="form-control" rows="2" placeholder="Ваш ответ…"></textarea>
                </li>
                <li class="list-group-item p-3 mb-2 bg-light border rounded">
                    <p class="mb-2 fw-500">6. Какой формат оператора выбора?</p>
                    <textarea class="form-control" rows="2" placeholder="Ваш ответ…"></textarea>
                </li>
                <li class="list-group-item p-3 mb-2 bg-light border rounded">
                    <p class="mb-2 fw-500">7. Какой порядок выполнения оператора выбора?</p>
                    <textarea class="form-control" rows="2" placeholder="Ваш ответ…"></textarea>
                </li>
        </ol>
    </div>
</div>

<!-- 4. Заполните схему. Напишите названия операторов разветвляющихс -->
<div class="card mb-5">
    <div class="card-header bg-light fw-bold">4. Заполните схему. Напишите названия операторов разветвляющихся</div>
    <div class="card-body fs-5">
<pre style="white-space: pre-wrap; font-family: inherit; margin: 0;">алгоритмов и их особенности.</pre>
        <div class="mt-3">
            <textarea class="form-control" rows="4" placeholder="Ваш ответ…"></textarea>
        </div>
    </div>
</div>

<!-- 5. Составьте план рассказа о принципах программирования разветв -->
<div class="card mb-5 border-success">
    <div class="card-header bg-success text-white fw-bold">5. Составьте план рассказа о принципах программирования разветвляющихся</div>
    <div class="card-body">
<pre style="white-space: pre-wrap; font-family: inherit; margin: 0;">алгоритмов на Паскале. Расскажите текст по плану.</pre>
        <div class="mt-3">
            <textarea class="form-control" rows="6" placeholder="Запишите ваш ответ для тренировки…"></textarea>
        </div>
    </div>
</div>

<!-- 6. Составьте программы решения задач задания 8 из занятия 11. И -->
<div class="card mb-5">
    <div class="card-header bg-light fw-bold">6. Составьте программы решения задач задания 8 из занятия 11. Используйте</div>
    <div class="card-body fs-5">
<pre style="white-space: pre-wrap; font-family: inherit; margin: 0;">блок-схемы.</pre>
        <div class="mt-3">
            <textarea class="form-control" rows="4" placeholder="Ваш ответ…"></textarea>
        </div>
    </div>
</div>

</div>

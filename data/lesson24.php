<!--lesson24.php-->
<div class="lesson">

    <h2 class="text-primary mb-4">
        Занятие 24. Язык программирования Паскаль. Массивы 

    </h2>

    <!-- ==================================================
     Задание 1 (по 148.pdf). Таблица с озвучкой (2 колонки)
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

<!-- 2. Прочитайте текст. -->
<div class="card mb-5 border-primary">
    <div class="card-header bg-primary text-white fw-bold">2. Прочитайте текст.</div>
    <div class="card-body fs-5 lh-lg">
<pre style="white-space: pre-wrap; font-family: inherit; margin: 0;">В жизни часто приходится использовать информацию, которая представлена в
виде таблицы.
       В программировании для хранения табличной информации используют
специальный тип данных - массив.
       Массив — это структура однотипных элементов, которые занимают
непрерывную область памяти и рассматриваются как одно целое. Основные свойства
массива - имя, тип, размерность, размер.
       Имя — это идентификатор, который задаёт программист для обращения к
массиву.
       Тип — это тип элементов массива.
       Размерность — это число индексов (порядковых номеров элементов массива),
которые нужны для обращения к отдельному элементу. Например, для одномерного
(линейного) массива нужен один индекс, для двумерного - два индекса и так далее.
       Формат описания массива:
       var
              имя: array[нижняя_граница .. верхняя_граница] of тип_элементов;
       Константное выражение определяет размер массива. Например, описание
       var
         A: array[1..10] of integer; задаёт одномерный массив с именем А, который
содержит 10 элементов целого типа: А [ 1 ] , А [ 2 ] , А [ 3 ] , А [ 4 ] , А [ 5 ] , А [ 6 ] ,
А [ 7 ] , А [ 8 ] , А [ 9 ] , А [ 10 ] .
Каждый элемент массива имеет свой номер - значение индекса. Нумерация элементов
массива начинается с ижней границы диапазона индексов.
       Размер массива можно не указывать, если при его описании задаются значения
всех его элементов. Например,
       var
         B: array[5] of integer = (2, 4, 6, 8, 10);. В этом случае создаётся массив из
пяти элементов со следующими значениями: b [1] =2, b [ 2 ] = 4 , b [ 3 ] = 6 , b [ 4 ] = 8 ,
b [ 5 ] = 10.
       Рассмотрим некоторые задачи обработки массивов.
       Задача 1. Ввести с клавиатуры и вывести на экран одномерный массив из
десяти элементов.
Листинг 1.
program ArrayInputOutput;
var
       A: array[10] of integer; // описание переменных величин целого типа
       i: integer;
begin
       // ввод элементов массива
       for i := 1 to 10 do
               ReadLn(A[i]);          / / в в о д числа с клавиатуры
       for i := 1 to 10 do            // вывод элементов массива через пробел
               Write(A[i], &#x27; &#x27;);
end.

      Задача 2. Ввести с клавиатуры, вывести на экран одномерный массив из
десяти элементов и найти сумму всех элементов массива.
Листинг 2.
program SumArray;
var
        A: array[10] of integer; // описание переменных величин целого типа
        i, S: integer;
begin
        // ввод элементов массива
        for i := 1 to 10 do
        ReadLn(A[i]);                 // ввод числа с клавиатуры
        // вывод элементов массива
        for i := 1 to 10 do
        Write(A[i], &#x27; &#x27;);            // вывод значения элемента на экран через пробел
        WriteLn;
        // вычисление суммы элементов
        S := 0;                      //начальное значение величины S
        for i := 1 to 10 do
        S := S + A[i];               //прибавление очередного элемента к сумме
        // вывод результата
        WriteLn(&#x27;S = &#x27;, S);           //вывод значения суммы на экран
end.
      Задача 3. Заполнить двумерный массив случайными числами от 0
до 99 и вывести его на экран.
Листинг 3.
program MatrixOutput;
const
      n = 5;                  // размерность матрицы – определение константы
var
        A: array[n, n] of integer; //описание переменных величин целого типа
        i, j: integer;
begin
        Randomize;                        // установка датчика случайных чисел
        // заполнение матрицы и вывод на экран
        for i := 1 to n do
        begin
                for j := 1 to n do
                begin
                        A[i, j] := Random(100); // генерация случайного числа от 0 до 99
                        Write(A[i, j]);         // вывод значения элемента через пробел
                end;
                WriteLn;                        // переход на новую строку
        end;
end.
     Задача 4. Заполнить двумерный массив случайными числами от 0
до 99, вывести его на экран и найти наибольшее значение.
Листинг 4.
program MaxElementMatrix;
const
      n = 5; // размерность матрицы
var
      A: array[1..n, 1..n] of integer;
        i, j: integer;
        Imax, Jmax: integer;
begin
        Randomize;              // инициализация генератора случайных чисел
        // --- заполнение матрицы случайными числами и вывод ---
        WriteLn(&#x27;Матрица A:&#x27;);
        for i := 1 to n do
        begin
        for j := 1 to n do
        begin
                A[i, j] := Random(100);            // число от 0 до 99
                Write(A[i, j]:4);                  // красивое форматирование вывода
        end;
        WriteLn;
        end;
        // --- поиск максимального элемента ---
        Imax := 1;
        Jmax := 1;
        for i := 1 to n do
                for j := 1 to n do
                if A[i, j] &gt; A[Imax, Jmax] then
                 begin
                      Imax := i;
                      Jmax := j;
                 end;
        // --- вывод результата ---
        WriteLn;
        WriteLn(&#x27;Наибольший элемент матрицы = &#x27;, A[Imax, Jmax]);
        WriteLn(&#x27;Его позиция: строка &#x27;, Imax, &#x27;, столбец &#x27;, Jmax);
end.</pre>
    </div>
</div>

<!-- 3. Ответьте на вопросы. -->
<div class="card mb-5">
    <div class="card-header bg-primary text-white fw-bold">3. Ответьте на вопросы.</div>
    <div class="card-body">
        <ol class="list-unstyled mb-0">
                <li class="list-group-item p-3 mb-2 bg-light border rounded">
                    <p class="mb-2 fw-500">1. Что такое массив?</p>
                    <textarea class="form-control" rows="2" placeholder="Ваш ответ…"></textarea>
                </li>
                <li class="list-group-item p-3 mb-2 bg-light border rounded">
                    <p class="mb-2 fw-500">2. Назовите основные свойства массива.</p>
                    <textarea class="form-control" rows="2" placeholder="Ваш ответ…"></textarea>
                </li>
                <li class="list-group-item p-3 mb-2 bg-light border rounded">
                    <p class="mb-2 fw-500">3. Что такое имя массива?</p>
                    <textarea class="form-control" rows="2" placeholder="Ваш ответ…"></textarea>
                </li>
                <li class="list-group-item p-3 mb-2 bg-light border rounded">
                    <p class="mb-2 fw-500">4. Что такое тип массива?</p>
                    <textarea class="form-control" rows="2" placeholder="Ваш ответ…"></textarea>
                </li>
                <li class="list-group-item p-3 mb-2 bg-light border rounded">
                    <p class="mb-2 fw-500">5. Что такое размерность массива?</p>
                    <textarea class="form-control" rows="2" placeholder="Ваш ответ…"></textarea>
                </li>
                <li class="list-group-item p-3 mb-2 bg-light border rounded">
                    <p class="mb-2 fw-500">6. Что такое размер массива?</p>
                    <textarea class="form-control" rows="2" placeholder="Ваш ответ…"></textarea>
                </li>
                <li class="list-group-item p-3 mb-2 bg-light border rounded">
                    <p class="mb-2 fw-500">7. Какой формат описания массива</p>
                    <textarea class="form-control" rows="2" placeholder="Ваш ответ…"></textarea>
                </li>
        </ol>
    </div>
</div>

<!-- 4. Заполните схему. Напишите названия основных свойств массива  -->
<div class="card mb-5">
    <div class="card-header bg-light fw-bold">4. Заполните схему. Напишите названия основных свойств массива и дайте им</div>
    <div class="card-body fs-5">
<pre style="white-space: pre-wrap; font-family: inherit; margin: 0;">определение.</pre>
        <div class="mt-3">
            <textarea class="form-control" rows="4" placeholder="Ваш ответ…"></textarea>
        </div>
    </div>
</div>

<!-- 5. Составьте план рассказа о массивах. Расскажите текст по план -->
<div class="card mb-5 border-success">
    <div class="card-header bg-success text-white fw-bold">5. Составьте план рассказа о массивах. Расскажите текст по плану</div>
    <div class="card-body">
<pre style="white-space: pre-wrap; font-family: inherit; margin: 0;"></pre>
        <div class="mt-3">
            <textarea class="form-control" rows="6" placeholder="Запишите ваш ответ для тренировки…"></textarea>
        </div>
    </div>
</div>

<!-- 6. Составьте программы решения задач. -->
<div class="card mb-5">
    <div class="card-header bg-light fw-bold">6. Составьте программы решения задач.</div>
    <div class="card-body fs-5">
<pre style="white-space: pre-wrap; font-family: inherit; margin: 0;">1.Дан массив натуральных чисел А[n]. Подсчитать, сколько в нём чётных
     чисел и сколько нечётных чисел.
     2.Дан массив натуральных чисел А[n]. Подсчитать, сколько в нём чисел,
     которые делятся нацело на 3.
     3.Дан массив целых чисел А[n]. Подсчитать, сколько в нём положительных
     чисел и сколько отрицательных чисел.
     4.Дан массив целых чисел А[n]. Найти минимальный и максимальный
     элементы массива.
     5.Дан массив целых чисел А[n] и числа а и b. Подсчитать, сколько в массиве
     чисел, которые удовлетворяют неравенству a &lt;A[i] &lt;b, где А[i] - элемент
     массива.
     6.Дан массив целых чисел А[n] и числа а и b. Подсчитать, сколько в массиве
     чисел, которые не удовлетворяют неравенству a &lt;A[i] &lt;b, где A[i] - элемент
     массива.
     7.*Дан массив целых чисел А[n]. Переставить все элементы массива по
     возрастанию (отсортировать).
     8.*Дан массив целых чисел А[n]. Переставить все элементы массива по
     убыванию (отсортировать).
                              ЗАКЛЮЧЕНИЕ

      Настоящее пособие, предназначенное для работы с иностранными гражданами
на подготовительном факультете, включает в себя такие базовые понятия
информатики, как основной и элементарный состав компьютера, назначение его
устройств, архитектура и принцип работы компьютера, программа и данные,
информация, кодирование, количество и единицы измерения информации, ин-
формационные процессы, информационные технологии, файловая структура данных,
программное обеспечение, алгоритм, алгоритмизация, программирование.
      Вдумчивая постоянная работа с материалами учебного пособия позволит
читателю научиться понимать и грамотно использовать научную терминологию по
информатике и компьютерной технике на всём протяжении его обучения в
университете независимо от будущей специальности.
      Авторы выражают надежду, что данное пособие станет достойным
помощником будущим специалистам в их начальном пути освоения русского языка
и научного стиля речи.</pre>
        <div class="mt-3">
            <textarea class="form-control" rows="4" placeholder="Ваш ответ…"></textarea>
        </div>
    </div>
</div>

</div>

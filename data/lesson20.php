<!--lesson20.php-->
<div class="lesson">

    <h2 class="text-primary mb-4">
        Занятие 20. Язык программирования Паскаль. Линейные программы 

    </h2>

    <!-- ==================================================
     Задание 1. Слова и словосочетания (2 колонки + озвучка)
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

<!-- 2. Прочитайте текст -->
<div class="card mb-5 border-primary">
    <div class="card-header bg-primary text-white fw-bold">2. Прочитайте текст</div>
    <div class="card-body fs-5 lh-lg">
<pre style="white-space: pre-wrap; font-family: inherit; margin: 0;">Язык     программирования    Pascal    —   это язык   структурного
программирования, который также поддерживает средства процедурного и (в
современных версиях — Object Pascal, PascalABC.NET, Delphi) объектно-
ориентированного программирования. Рассмотрим некоторые базовые вопросы
построения простейших программ на языке Pascal.

      Общая структура программы на Pascal имеет вид:

      program имя_программы; { необязательно в PascalABC.NET }

      раздел_подключения_модулей
      раздел_описаний_типов
      раздел_описаний_переменных
      раздел_процедур_и_функций

      begin
                  исполняемые_операторы
      end.

      В каждой программе обязательно присутствует основной блок, заключённый
между словами begin и end. — в нём размещаются операторы, которые выполняются
при запуске программы. Простейшая программа может содержать только
исполняемый блок и иметь следующую структуру:
      begin
        операторы;
      end.

     Подключение модулей.
     Раздел подключения модулей начинается словом uses. Если программе
необходимы дополнительные процедуры, функции или классы, то в начале
программы подключают модули, где содержится их описание.

Пример:
uses System, Math;    список модулей задается поименно, через запятую.

     Определение объектов (описание переменных).
     Перед началом выполнения программы необходимо описать имена величин, с
которыми будет работать программа, и указать их типы.

Пример:

var
       a, b, c: integer;
       x: real;
      Операторы языка Паскаль.
      Оператор в Паскаль — это команда, после которой ставится знак ; (точка с
запятой). Каждый оператор обозначает отдельное действие, выполняемое на
очередном шаге работы программы.

Например:

      a := 5;
      Writeln(a);

     Линейные вычислительные программы.
     Рассмотрим средства языка Паскаль, которые применяются при создании
линейных (последовательных) вычислительных программ на примере решения
конкретной задачи.


                                      (      )
Задача 1. Найдите значение                       выражения для любых значений

величин x и у.
      Блок-схема алгоритма решения этой задачи рассматривалась в тексте занятия
10 (рис. 11).
      Для того чтобы найти значение выражения S . нужно знать значения величин x
и у. Для ввода исходной информации в Паскале выполняется с помощью стандартных
процедур Read и ReadLn, а вывод — с помощью Write и WriteLn.
     Ввод данных в Паскаль рассматривается как чтение значений с клавиатуры и
присваивание их соответствующим переменным:
      ReadLn(x);
      ReadLn(y);

Вывод данных:

      WriteLn(S);

      Вычисление значения выражения S можно организовать разными способами.
Например, использовать дополнительные величины р, q для вычисления значения
числителя и знаменателя дроби. Тогда S = p/q. Или сначала найти только значение
числителя, присвоив его в величине S. А затем разделить это значение на значение
знаменателя. В этом случае не надо использовать дополнительные величины.
      При вычислении значения числителя дроби необходимо выражение возводить
в четвёртую степень. Это действие также можно выполнить разными способами:

   1. Использовать дополнительные переменные p и q для хранения значений
      числителя и знаменателя дроби, тогда S = p / q.
   2. Либо сначала вычислить только числитель и сохранить его в переменной S, а
      затем сразу разделить это значение на знаменатель:

      S := числитель;
      S := S / знаменатель;

Этот вариант короче, потому что не требует дополнительных переменных.

   При вычислении числителя необходимо возвести выражение в четвёртую
степень. В Паскале это также можно выполнить двумя способами:

   1. С помощью обычных умножений:
   2. (x + 2*y) * (x + 2*y) * (x + 2*y) * (x + 2*y)
   3. Или используя функцию Power(a, b), которая определена в модуле Math:

uses Math;
p := x * y - Power(x + 2*y, 4);
Листинг 1.
uses Math;                            // подключение математического модуля
var
        x, y, p, q, s: real;          // описание чисел с плавающей точкой
begin
        ReadLn(x);                    // ввод значения величины x
        ReadLn(y);                    // ввод значения величины y
        p := x * y - Power(x + 2*y, 4);           // числитель дроби
        q := x*x + y*y + 1;                       // знаменатель дроби
        s := p / q;                   // вычисление значения S
        WriteLn(s);                   // вывод результата
end.


Листинг 2. (более компактный вариант)
uses Math;
var
      x, y, s: real;
begin
      ReadLn(x);               // ввод значения x
      ReadLn(y);               // ввод значения y

        s := x * y - Power(x + 2*y, 4); // числитель
        s := s / (x*x + y*y + 1);       // деление на знаменатель

        WriteLn(s);                   // вывод результата
end.
3.Ответьте на вопросы.
     1. Какой язык программирования Паскаль?
     2. Какой вид имеет общая структура программы на Паскале?
     3. Каких типов бывают переменные? Приведите пример.
     4. Что такое оператор в Паскаль? Приведите пример.
     5. Какие стандартные процедуры ввода-вывода вы знаете?
     6. Что такое ввод данных?
     7. Что такое вывод данных?</pre>
    </div>
</div>

<!-- 4. Соедините стрелками элементы структуры линейной программы с  -->
<div class="card mb-5">
    <div class="card-header bg-light fw-bold">4. Соедините стрелками элементы структуры линейной программы с их</div>
    <div class="card-body">
        <div class="alert alert-warning small mb-3">
            <strong>TODO:</strong> для интерактивного подбора (drag&drop / select) разметить вручную. Сейчас — текст из тетради + поле для ответа.
        </div>
<pre style="white-space: pre-wrap; font-family: inherit; margin: 0;">названиями и дайте их определения.</pre>
        <div class="mt-3">
            <textarea class="form-control" rows="4" placeholder="Ваш ответ…"></textarea>
        </div>
    </div>
</div>

<!-- 5. Составьте план рассказа о структуре построения программы на  -->
<div class="card mb-5 border-success">
    <div class="card-header bg-success text-white fw-bold">5. Составьте план рассказа о структуре построения программы на Паскале.</div>
    <div class="card-body">
<pre style="white-space: pre-wrap; font-family: inherit; margin: 0;">Расскажите текст по плану.</pre>
        <div class="mt-3">
            <textarea class="form-control" rows="6" placeholder="Запишите ваш ответ для тренировки…"></textarea>
        </div>
    </div>
</div>

<!-- 6. Составьте программы решения задач задания 10 из занятия 10.  -->
<div class="card mb-5">
    <div class="card-header bg-light fw-bold">6. Составьте программы решения задач задания 10 из занятия 10. Используйте</div>
    <div class="card-body fs-5">
<pre style="white-space: pre-wrap; font-family: inherit; margin: 0;">блок-схемы.</pre>
        <div class="mt-3">
            <textarea class="form-control" rows="4" placeholder="Ваш ответ…"></textarea>
        </div>
    </div>
</div>

</div>

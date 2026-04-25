<!--lesson20.php-->
<div class="lesson">

    <h2 class="text-primary mb-4">
        Занятие 20. Язык программирования Паскаль. Линейные программы 

    </h2>

    <div class="alert alert-info mb-4">
        <strong>Внимание!</strong> Это занятие ещё в разработке. Можно уже тренировать интерактив, но текст и задания нужно дописать по PDF.
    </div>

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



    <!-- Пример задания "да / нет" -->
    <div class="card mb-4">
        <div class="card-header bg-light fw-bold">
            2. Ответьте на вопросы утвердительно или отрицательно («да» или «нет»).
        </div>
        <div class="card-body">

            <div class="yesno-question mb-3 p-3 border rounded bg-light" data-answer="да">
                <p class="fw-500 mb-3">1. [Вопрос по тексту занятия 3]</p>
                <div class="btn-group btn-group-lg mb-2">
                    <input type="radio" class="btn-check" name="l3a1" value="да" id="l3a1da">
                    <label class="btn btn-outline-success px-4" for="l3a1da">да</label>
                    <input type="radio" class="btn-check" name="l3a1" value="нет" id="l3a1net">
                    <label class="btn btn-outline-danger px-4" for="l3a1net">нет</label>
                </div>
                <div class="feedback mt-2 fw-bold d-none"></div>
            </div>

            <!-- копируешь этот блок ещё 3–5 раз, меняешь name/id/data-answer и текст вопроса -->

            <div class="text-center mt-3">
                <button class="btn btn-primary btn-lg px-4" onclick="checkAllYesNo()">Проверить ответы</button>
            </div>
        </div>
    </div>

    <!-- Пример теста с четырьмя вариантами -->
    <div class="card mb-4">
        <div class="card-header bg-primary text-white fw-bold">
            3. Выберите правильный вариант ответа.
        </div>
        <div class="card-body fs-5">

            <div class="question-block mb-4 p-4 border rounded bg-light" data-correct="c">
                <p class="fw-bold mb-3">1. [Вопрос теста по занятию 3]</p>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l3q1" id="l3q1a" value="a">
                    <label class="form-check-label ms-2" for="l3q1a">а) Вариант A</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l3q1" id="l3q1b" value="b">
                    <label class="form-check-label ms-2" for="l3q1b">б) Вариант B</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l3q1" id="l3q1c" value="c">
                    <label class="form-check-label ms-2" for="l3q1c">в) Вариант C (правильный)</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l3q1" id="l3q1d" value="d">
                    <label class="form-check-label ms-2" for="l3q1d">г) Вариант D</label>
                </div>

                <div class="feedback mt-2 fw-bold d-none"></div>
            </div>

            <!-- ещё вопросы — копипаст question-block, меняешь name и data-correct -->

            <div class="text-center">
                <button class="btn btn-primary btn-lg px-4" onclick="checkTask7()">Проверить тест</button>
            </div>
        </div>
    </div>

    <!-- Заглушка под текст -->
    <div class="card mb-4 border-primary">
        <div class="card-header bg-primary text-white fw-bold">
            Текст занятия 3
        </div>
        <div class="card-body">
            <p class="text-muted mb-0">
                Здесь будет текст из тетради (задание «Прочитайте текст»). Сейчас можно оставить пустым или вставить черновик.
            </p>
        </div>
    </div>

    <!-- Итоговое задание «Расскажите…» -->
    <div class="card mb-4 border-success">
        <div class="card-header bg-success text-white fw-bold">
            Итоговое задание
        </div>
        <div class="card-body">
            <p>[Инструкция из тетради: «Расскажите о …»]</p>
            <textarea class="form-control" rows="5" placeholder="Здесь студент может написать свой ответ…"></textarea>
        </div>
    </div>

</div>

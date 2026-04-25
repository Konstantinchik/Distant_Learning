<!--lesson17.php-->
<div class="lesson">

    <h2 class="text-primary mb-4">
        Занятие 17. Средства представления и обработки мультимедийной информации. Microsoft PowerPoint
    </h2>

    <div class="alert alert-info mb-4">
        <strong>Внимание!</strong> Это занятие ещё в разработке. Можно уже тренировать интерактив, но текст и задания нужно дописать по PDF.
    </div>

<!-- ==================================================
     1. Прочитайте слова и словосочетания (2 колонки + озвучка)
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
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Презентация">▶</button>
              Презента́ция
            </td>
            <td class="text-start"></td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Слайд">▶</button>
              Сла́йд
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Слайд фильм">▶</button>
              Слайд-фи́льм
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Мультимедиа">▶</button>
              Мультиме́диа
            </td>
            <td class="text-start"></td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Демонстрация">▶</button>
              Демонстра́ция
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Демонстрация презентации">▶</button>
              Демонстра́ция презента́ции
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Смена">▶</button>
              Сме́на
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Смена слайдов">▶</button>
              Сме́на сла́йдов
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Анимация">▶</button>
              Анима́ция
            </td>
            <td class="text-start"></td>
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

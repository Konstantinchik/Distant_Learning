<!-- lesson17.php -->
<div class="lesson">

    <h2 class="text-primary mb-4">Занятие 17. Мультимедиа. Microsoft PowerPoint</h2>

<!-- intro -->
<div class="alert alert-primary border-start border-primary border-4 fs-5 mb-4">
    <strong>Презентация</strong> — набор цветных <strong>слайдов</strong> с мультимедийной информацией на определённую тему. Один из самых популярных способов подачи информации.
</div>


    <!-- Task1: dictionary -->
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
<!-- End task 1 -->

<!-- LANG SECTION INTRO -->
<div class="alert alert-warning border-start border-warning border-4 mb-4">
    <h5 class="mb-1">📝 Русский язык</h5>
    <p class="mb-0">Прежде чем перейти к информатике, потренируем <strong>русскую лексику</strong> по теме урока — это поможет лучше понимать терминологию.</p>
</div>

<!-- lang-word-formation -->
<div class="card mb-4 border-warning">
    <div class="card-header bg-warning-subtle fw-bold">
        <span class="badge bg-warning text-dark me-2">📝 Лексика</span> Образуй существительное от глагола
    </div>
    <div class="card-body">
        <p class="mb-2"><strong>Образец:</strong> <code>удалить → удаление</code></p>
        <p class="text-muted mb-3">Образуй существительное от каждого глагола по образцу.</p>
        <table class="table align-middle" style="max-width:500px">
            <tbody>
                <tr>
                    <td class="text-end pe-2 fw-500">представить</td>
                    <td class="text-center px-2">→</td>
                    <td>
                        <input type="text" class="form-control" data-correct="представление" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td class="text-end pe-2 fw-500">демонстрировать</td>
                    <td class="text-center px-2">→</td>
                    <td>
                        <input type="text" class="form-control" data-correct="демонстрация" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td class="text-end pe-2 fw-500">создать</td>
                    <td class="text-center px-2">→</td>
                    <td>
                        <input type="text" class="form-control" data-correct="создание" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td class="text-end pe-2 fw-500">показать</td>
                    <td class="text-center px-2">→</td>
                    <td>
                        <input type="text" class="form-control" data-correct="показ" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td class="text-end pe-2 fw-500">оформить</td>
                    <td class="text-center px-2">→</td>
                    <td>
                        <input type="text" class="form-control" data-correct="оформление" autocomplete="off">
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="text-center mt-3">
            <button type="button" class="btn btn-primary px-4" onclick="checkInputs(this)">Проверить</button>
        </div>
    </div>
</div>

<!-- lang-roots -->
<div class="card mb-4 border-warning">
    <div class="card-header bg-warning-subtle fw-bold">
        <span class="badge bg-warning text-dark me-2">📝 Лексика</span> К какому корню относится слово?
    </div>
    <div class="card-body">
        <p class="text-muted mb-3">Выбери корень для каждого слова.</p>
        <table class="table align-middle" style="max-width:500px">
            <tbody>
                <tr>
                    <td class="text-end pe-3 fw-500">презентация</td>
                    <td>
                        <select class="form-select" data-no-instant data-correct="представить">
                            <option value="">— корень —</option>
                            <option value="представить">представить</option><option value="программа">программа</option><option value="процесс">процесс</option><option value="причина">причина</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="text-end pe-3 fw-500">слайдовый</td>
                    <td>
                        <select class="form-select" data-no-instant data-correct="слайд">
                            <option value="">— корень —</option>
                            <option value="слайд">слайд</option><option value="слово">слово</option><option value="сила">сила</option><option value="связь">связь</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="text-end pe-3 fw-500">демонстрация</td>
                    <td>
                        <select class="form-select" data-no-instant data-correct="демонстрировать">
                            <option value="">— корень —</option>
                            <option value="демон">демон</option><option value="демократ">демократ</option><option value="демонстрировать">демонстрировать</option><option value="декабрь">декабрь</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="text-end pe-3 fw-500">мультимедийный</td>
                    <td>
                        <select class="form-select" data-no-instant data-correct="мульти">
                            <option value="">— корень —</option>
                            <option value="мульти">мульти</option><option value="музыка">музыка</option><option value="машина">машина</option><option value="масса">масса</option>
                        </select>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="text-center mt-3">
            <button type="button" class="btn btn-primary px-4" onclick="checkFillIn(this)">Проверить</button>
        </div>
    </div>
</div>


<!-- theory -->
<div class="card mb-4 border-info">
    <div class="card-header bg-info text-white fw-bold fs-5">
        <span class="badge bg-light text-info me-2">📖 Теория</span> Краткое содержание занятия
    </div>
    <div class="card-body fs-5 lh-lg">
<h6 class="text-primary mt-3 mb-2">Что такое презентация и слайд</h6>
<p class="mb-3"><strong>Презентация</strong> — набор картинок-слайдов с мультимедиа на тему, хранящийся в файле специального формата. Каждый <strong>слайд</strong> может содержать текст, числа, графику, видео и звук.</p>
<h6 class="text-primary mt-3 mb-2">Демонстрация и смена слайдов</h6>
<p class="mb-3"><strong>Демонстрация</strong> — показ слайдов зрителям. Смена слайдов бывает <em>автоматической</em> (по таймеру) или <em>ручной</em> (по щелчку). Автоматический режим требует заранее задать промежуток времени между слайдами.</p>
<h6 class="text-primary mt-3 mb-2">Программы для создания презентаций</h6>
<p class="mb-3">Самая известная — <strong>Microsoft PowerPoint</strong>. Также: Piktochart, Prezi, Adobe Slate, Google Slides. Презентации применяются в докладах, рекламе, образовании, рассказах о коллекциях и путешествиях.</p>

    </div>
</div>


<!-- yesno-test -->
<div class="card mb-4">
    <div class="card-header bg-warning-subtle fw-bold fs-5">
        <span class="badge bg-warning text-dark me-2">Понимание</span> Тест: верно ли утверждение?
    </div>
    <div class="card-body">
        <p class="text-muted mb-3">Прочитай каждое утверждение и нажми «да», если оно верно, «нет» — если неверно.</p>
        
            <div class="yesno-question mb-3 p-3 border rounded bg-light" data-answer="да" data-explanation="слайды — главный элемент презентации.">
                <p class="fw-500 mb-2">1. Презентация состоит из набора слайдов.</p>
                <div class="btn-group btn-group-lg mb-2">
                    <input type="radio" class="btn-check" name="l17_yn1" value="да" id="l17_yn1_y">
                    <label class="btn btn-outline-success px-4" for="l17_yn1_y">да</label>
                    <input type="radio" class="btn-check" name="l17_yn1" value="нет" id="l17_yn1_n">
                    <label class="btn btn-outline-danger px-4" for="l17_yn1_n">нет</label>
                </div>
                <div class="feedback mt-2 fw-bold d-none"></div>
            </div>
            <div class="yesno-question mb-3 p-3 border rounded bg-light" data-answer="нет" data-explanation="слайд может содержать текст, числа, графику, видео, звук.">
                <p class="fw-500 mb-2">2. Слайд может содержать только текст.</p>
                <div class="btn-group btn-group-lg mb-2">
                    <input type="radio" class="btn-check" name="l17_yn2" value="да" id="l17_yn2_y">
                    <label class="btn btn-outline-success px-4" for="l17_yn2_y">да</label>
                    <input type="radio" class="btn-check" name="l17_yn2" value="нет" id="l17_yn2_n">
                    <label class="btn btn-outline-danger px-4" for="l17_yn2_n">нет</label>
                </div>
                <div class="feedback mt-2 fw-bold d-none"></div>
            </div>
            <div class="yesno-question mb-3 p-3 border rounded bg-light" data-answer="нет" data-explanation="также бывает ручная — по щелчку пользователя.">
                <p class="fw-500 mb-2">3. Смена слайдов может быть только автоматической.</p>
                <div class="btn-group btn-group-lg mb-2">
                    <input type="radio" class="btn-check" name="l17_yn3" value="да" id="l17_yn3_y">
                    <label class="btn btn-outline-success px-4" for="l17_yn3_y">да</label>
                    <input type="radio" class="btn-check" name="l17_yn3" value="нет" id="l17_yn3_n">
                    <label class="btn btn-outline-danger px-4" for="l17_yn3_n">нет</label>
                </div>
                <div class="feedback mt-2 fw-bold d-none"></div>
            </div>
            <div class="yesno-question mb-3 p-3 border rounded bg-light" data-answer="да" data-explanation="PowerPoint — самая известная программа этого класса.">
                <p class="fw-500 mb-2">4. Microsoft PowerPoint — это программа для презентаций.</p>
                <div class="btn-group btn-group-lg mb-2">
                    <input type="radio" class="btn-check" name="l17_yn4" value="да" id="l17_yn4_y">
                    <label class="btn btn-outline-success px-4" for="l17_yn4_y">да</label>
                    <input type="radio" class="btn-check" name="l17_yn4" value="нет" id="l17_yn4_n">
                    <label class="btn btn-outline-danger px-4" for="l17_yn4_n">нет</label>
                </div>
                <div class="feedback mt-2 fw-bold d-none"></div>
            </div>
            <div class="yesno-question mb-3 p-3 border rounded bg-light" data-answer="нет" data-explanation="презентация хранится в файле специального формата (.pptx и др.).">
                <p class="fw-500 mb-2">5. Презентация хранится в обычном текстовом файле.</p>
                <div class="btn-group btn-group-lg mb-2">
                    <input type="radio" class="btn-check" name="l17_yn5" value="да" id="l17_yn5_y">
                    <label class="btn btn-outline-success px-4" for="l17_yn5_y">да</label>
                    <input type="radio" class="btn-check" name="l17_yn5" value="нет" id="l17_yn5_n">
                    <label class="btn btn-outline-danger px-4" for="l17_yn5_n">нет</label>
                </div>
                <div class="feedback mt-2 fw-bold d-none"></div>
            </div>
        <div class="text-center mt-3">
            <button type="button" class="btn btn-primary btn-lg px-4" onclick="checkAllYesNo()">Проверить все ответы</button>
        </div>
    </div>
</div>


<!-- mcq-test -->
<div class="card mb-4">
    <div class="card-header bg-primary text-white fw-bold fs-5">
        <span class="badge bg-light text-primary me-2">Выбор ответа</span> Тест: выбери правильный вариант
    </div>
    <div class="card-body mcq-set">
        <p class="text-muted mb-3">В каждом вопросе только один правильный ответ.</p>
        
            <div class="question-block mb-4 p-3 border rounded bg-light" data-correct="b" data-explanation="презентация — это слайды с мультимедиа.">
                <p class="fw-bold mb-2">1. Что такое презентация?</p>
                
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l17_mcq1" id="l17_mcq1_a" value="a">
                    <label class="form-check-label ms-2" for="l17_mcq1_a">а) программа</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l17_mcq1" id="l17_mcq1_b" value="b">
                    <label class="form-check-label ms-2" for="l17_mcq1_b">б) набор слайдов с мультимедийной информацией</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l17_mcq1" id="l17_mcq1_c" value="c">
                    <label class="form-check-label ms-2" for="l17_mcq1_c">в) текстовый документ</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l17_mcq1" id="l17_mcq1_d" value="d">
                    <label class="form-check-label ms-2" for="l17_mcq1_d">г) электронная таблица</label>
                </div>
                <div class="feedback mt-2 fw-bold d-none"></div>
            </div>
            <div class="question-block mb-4 p-3 border rounded bg-light" data-correct="c" data-explanation="слайд может содержать любую мультимедийную информацию.">
                <p class="fw-bold mb-2">2. Что может содержать слайд?</p>
                
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l17_mcq2" id="l17_mcq2_a" value="a">
                    <label class="form-check-label ms-2" for="l17_mcq2_a">а) только текст</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l17_mcq2" id="l17_mcq2_b" value="b">
                    <label class="form-check-label ms-2" for="l17_mcq2_b">б) только графику</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l17_mcq2" id="l17_mcq2_c" value="c">
                    <label class="form-check-label ms-2" for="l17_mcq2_c">в) текст, числа, графику, видео, звук</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l17_mcq2" id="l17_mcq2_d" value="d">
                    <label class="form-check-label ms-2" for="l17_mcq2_d">г) только формулы</label>
                </div>
                <div class="feedback mt-2 fw-bold d-none"></div>
            </div>
            <div class="question-block mb-4 p-3 border rounded bg-light" data-correct="c" data-explanation="автоматический (таймер) и ручной (по щелчку).">
                <p class="fw-bold mb-2">3. Какие бывают режимы смены слайдов?</p>
                
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l17_mcq3" id="l17_mcq3_a" value="a">
                    <label class="form-check-label ms-2" for="l17_mcq3_a">а) только автоматический</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l17_mcq3" id="l17_mcq3_b" value="b">
                    <label class="form-check-label ms-2" for="l17_mcq3_b">б) только ручной</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l17_mcq3" id="l17_mcq3_c" value="c">
                    <label class="form-check-label ms-2" for="l17_mcq3_c">в) автоматический и ручной</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l17_mcq3" id="l17_mcq3_d" value="d">
                    <label class="form-check-label ms-2" for="l17_mcq3_d">г) только смешанный</label>
                </div>
                <div class="feedback mt-2 fw-bold d-none"></div>
            </div>
            <div class="question-block mb-4 p-3 border rounded bg-light" data-correct="b" data-explanation="PowerPoint — самая популярная программа для презентаций.">
                <p class="fw-bold mb-2">4. Какая самая известная программа для создания презентаций?</p>
                
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l17_mcq4" id="l17_mcq4_a" value="a">
                    <label class="form-check-label ms-2" for="l17_mcq4_a">а) Microsoft Word</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l17_mcq4" id="l17_mcq4_b" value="b">
                    <label class="form-check-label ms-2" for="l17_mcq4_b">б) Microsoft PowerPoint</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l17_mcq4" id="l17_mcq4_c" value="c">
                    <label class="form-check-label ms-2" for="l17_mcq4_c">в) Microsoft Excel</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l17_mcq4" id="l17_mcq4_d" value="d">
                    <label class="form-check-label ms-2" for="l17_mcq4_d">г) Microsoft Outlook</label>
                </div>
                <div class="feedback mt-2 fw-bold d-none"></div>
            </div>
        <div class="text-center mt-3">
            <button type="button" class="btn btn-primary btn-lg px-4" onclick="checkMCQ(this)">Проверить ответы</button>
        </div>
    </div>
</div>


<!-- fill-in -->
<div class="card mb-4">
    <div class="card-header bg-success-subtle fw-bold fs-5">
        <span class="badge bg-success me-2">Заполни пропуск</span> Тест: закончи предложение
    </div>
    <div class="card-body">
        <p class="text-muted mb-3">Выбери из выпадающего списка слово, которое лучше всего подходит.</p>
        <ol class="list-unstyled mb-0">
            
                <li class="list-group-item p-3 mb-2 bg-light border rounded">
                    <span class="fs-5">1. Один элемент презентации — это <select class="form-select d-inline-block w-auto mx-1" data-no-instant data-correct="слайд"><option value="">— выбери —</option><option value="страница">страница</option><option value="слайд">слайд</option><option value="ячейка">ячейка</option><option value="параграф">параграф</option></select>.</span>
                    <div class="feedback mt-2 fw-bold d-none"></div>
                </li>
                <li class="list-group-item p-3 mb-2 bg-light border rounded">
                    <span class="fs-5">2. Показ слайдов зрителям называется <select class="form-select d-inline-block w-auto mx-1" data-no-instant data-correct="демонстрацией"><option value="">— выбери —</option><option value="трансляцией">трансляцией</option><option value="демонстрацией">демонстрацией</option><option value="печатью">печатью</option><option value="переводом">переводом</option></select>.</span>
                    <div class="feedback mt-2 fw-bold d-none"></div>
                </li>
                <li class="list-group-item p-3 mb-2 bg-light border rounded">
                    <span class="fs-5">3. Программа Microsoft <select class="form-select d-inline-block w-auto mx-1" data-no-instant data-correct="PowerPoint"><option value="">— выбери —</option><option value="Word">Word</option><option value="Excel">Excel</option><option value="PowerPoint">PowerPoint</option><option value="Access">Access</option></select> предназначена для создания презентаций.</span>
                    <div class="feedback mt-2 fw-bold d-none"></div>
                </li>
        </ol>
        <div class="text-center mt-3">
            <button type="button" class="btn btn-primary btn-lg px-4" onclick="checkFillIn(this)">Проверить</button>
        </div>
    </div>
</div>


<!-- open-questions -->
<div class="card mb-4">
    <div class="card-header bg-secondary text-white fw-bold fs-5">
        <span class="badge bg-light text-secondary me-2">Развёрнутый ответ</span> Сформулируй своими словами
    </div>
    <div class="card-body">
        <p class="text-muted mb-3">
            Сначала постарайся ответить сам, написав в поле или вслух. Потом нажми «Показать эталон» и сравни.
        </p>
        <ol class="list-unstyled mb-0">
            
                <li class="list-group-item p-3 mb-3 bg-light border rounded">
                    <p class="fw-500 mb-2 fs-5">1. Что такое презентация?</p>
                    <textarea class="form-control mb-2" rows="3" placeholder="Сформулируй свой ответ…"></textarea>
                    <button type="button" class="btn btn-sm btn-outline-secondary" onclick="toggleAnswer(this)">Показать эталон</button>
                    <div class="answer-sample d-none mt-2 p-2 bg-white border-start border-success border-3 rounded">
                        <strong class="text-success">Эталон:</strong> Набор цветных картинок-слайдов с мультимедийной информацией на определённую тему.
                    </div>
                </li>
                <li class="list-group-item p-3 mb-3 bg-light border rounded">
                    <p class="fw-500 mb-2 fs-5">2. Какую информацию может содержать слайд?</p>
                    <textarea class="form-control mb-2" rows="3" placeholder="Сформулируй свой ответ…"></textarea>
                    <button type="button" class="btn btn-sm btn-outline-secondary" onclick="toggleAnswer(this)">Показать эталон</button>
                    <div class="answer-sample d-none mt-2 p-2 bg-white border-start border-success border-3 rounded">
                        <strong class="text-success">Эталон:</strong> Текстовую, числовую, графическую, видео и звуковую (мультимедийную).
                    </div>
                </li>
                <li class="list-group-item p-3 mb-3 bg-light border rounded">
                    <p class="fw-500 mb-2 fs-5">3. Какие бывают способы смены слайдов?</p>
                    <textarea class="form-control mb-2" rows="3" placeholder="Сформулируй свой ответ…"></textarea>
                    <button type="button" class="btn btn-sm btn-outline-secondary" onclick="toggleAnswer(this)">Показать эталон</button>
                    <div class="answer-sample d-none mt-2 p-2 bg-white border-start border-success border-3 rounded">
                        <strong class="text-success">Эталон:</strong> Автоматический (через заданный промежуток времени) и ручной (по щелчку пользователя).
                    </div>
                </li>
                <li class="list-group-item p-3 mb-3 bg-light border rounded">
                    <p class="fw-500 mb-2 fs-5">4. Назовите программы для создания презентаций.</p>
                    <textarea class="form-control mb-2" rows="3" placeholder="Сформулируй свой ответ…"></textarea>
                    <button type="button" class="btn btn-sm btn-outline-secondary" onclick="toggleAnswer(this)">Показать эталон</button>
                    <div class="answer-sample d-none mt-2 p-2 bg-white border-start border-success border-3 rounded">
                        <strong class="text-success">Эталон:</strong> Microsoft PowerPoint, Piktochart, Prezi, Adobe Slate, Google Slides.
                    </div>
                </li>
        </ol>
    </div>
</div>


<!-- final -->
<div class="card mb-4 border-success">
    <div class="card-header bg-success text-white fw-bold fs-5">
        <span class="badge bg-light text-success me-2">Финал</span> Расскажи тему целиком
    </div>
    <div class="card-body">
        <p>Когда ответил на все тесты — попробуй <strong>устно или письменно</strong> рассказать о теме урока, опираясь на блок «Краткая теория».</p>
        <textarea class="form-control mb-3" rows="6" placeholder="Можешь написать здесь свой развёрнутый рассказ для тренировки…"></textarea>
        <div class="text-center">
            <button type="button" class="btn btn-success btn-lg px-5" onclick="markLessonCompleted(17); this.outerHTML='<div class=\'alert alert-success mb-0\'><h5 class=\'mb-0\'>✓ Занятие отмечено как пройденное!</h5></div>';">
                Я разобрал тему
            </button>
        </div>
    </div>
</div>


<script>
// Общая проверка fill-in select'ов в текущей карточке
window.checkFillIn = function(btn) {
    const card = btn.closest('.card-body');
    if (!card) return;
    let correct = 0, total = 0;
    card.querySelectorAll('select[data-correct]').forEach(sel => {
        total++;
        const fb = sel.parentElement.querySelector('.feedback');
        sel.classList.remove('is-valid', 'is-invalid');
        if (fb) fb.classList.remove('d-none', 'text-success', 'text-danger', 'text-warning');
        if (!sel.value) {
            if (fb) { fb.textContent = 'Не выбрано'; fb.classList.add('text-warning'); }
        } else if (sel.value === sel.dataset.correct) {
            sel.classList.add('is-valid');
            if (fb) { fb.textContent = '✓ Правильно'; fb.classList.add('text-success'); }
            correct++;
        } else {
            sel.classList.add('is-invalid');
            if (fb) { fb.innerHTML = 'Неверно. Правильный: <strong>' + sel.dataset.correct + '</strong>'; fb.classList.add('text-danger'); }
        }
    });
    let result = card.querySelector('.fill-in-result');
    if (!result) {
        result = document.createElement('div');
        result.className = 'fill-in-result mt-3 fw-bold text-center';
        card.appendChild(result);
    }
    result.className = 'fill-in-result mt-3 fw-bold text-center ' + (correct === total ? 'text-success' : 'text-danger');
    result.textContent = correct === total
        ? '✓ Все ' + total + ' ответов правильно!'
        : 'Правильных: ' + correct + ' из ' + total;
};

// Показать/скрыть эталон ответа
window.toggleAnswer = function(btn) {
    const sample = btn.nextElementSibling;
    if (sample.classList.contains('d-none')) {
        sample.classList.remove('d-none');
        btn.textContent = 'Скрыть эталон';
    } else {
        sample.classList.add('d-none');
        btn.textContent = 'Показать эталон';
    }
};
</script>


</div>
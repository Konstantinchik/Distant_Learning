<!-- lesson16.php -->
<div class="lesson">

    <h2 class="text-primary mb-4">Занятие 16. Электронные таблицы. Microsoft Excel</h2>

<!-- intro -->
<div class="alert alert-primary border-start border-primary border-4 fs-5 mb-4">
    <strong>Электронные таблицы</strong> — комплексные средства для хранения и обработки числовой информации. Основной объект — <strong>ячейка</strong> с уникальным адресом из буквы (столбец) и цифры (строка).
</div>


    <!-- Task1: dictionary -->
<div class="card mb-5">
  <div class="card-header bg-light fw-bold fs-5">
    1. Прочитайте слова и словосочетания, запомните их значения.
  </div>

  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered align-middle">
        <tbody>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Таблица">▶</button>
              Табли́ца
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Электронная таблица">▶</button>
              Электро́нная табли́ца
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Табличный">▶</button>
              Табли́чный, -ая, -ое, -ые
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Табличный процессор">▶</button>
              Табли́чный проце́ссор
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Ячейка">▶</button>
              Яче́йка
            </td>
            <td class="text-start"></td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Адрес">▶</button>
              А́дрес
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Уникальный адрес">▶</button>
              Уника́льный а́дрес
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Адрес ячейки">▶</button>
              А́дрес яче́йки
            </td>
            <td class="text-start"></td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Информация">▶</button>
              Информа́ция
            </td>
            <td class="text-start">
              <div class="mb-2">
                <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Исходная информация">▶</button>
                Исхо́дная информа́ция
              </div>
              <div>
                <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Производная информация">▶</button>
                Произво́дная информа́ция
              </div>
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Повтор">▶</button>
              Повто́р
            </td>
            <td class="text-start"></td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Повторять, повторить">▶</button>
              Повторя́ть I, повтори́ть II (что?)
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Повторить вычисления">▶</button>
              Повтори́ть вычисле́ния
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Повторяющийся">▶</button>
              Повторя́ющийся
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Повторяющиеся вычисления">▶</button>
              Повторя́ющиеся вычисле́ния
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Работа">▶</button>
              Рабо́та
            </td>
            <td class="text-start"></td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Рабочий">▶</button>
              Рабо́чий, -ая, -ее, -ие
            </td>
            <td class="text-start">
              <div class="mb-2">
                <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Рабочая книга">▶</button>
                Рабо́чая кни́га
              </div>
              <div>
                <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Рабочий лист">▶</button>
                Рабо́чий ли́ст
              </div>
            </td>
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
                    <td class="text-end pe-2 fw-500">вычислить</td>
                    <td class="text-center px-2">→</td>
                    <td>
                        <input type="text" class="form-control" data-correct="вычисление" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td class="text-end pe-2 fw-500">обработать</td>
                    <td class="text-center px-2">→</td>
                    <td>
                        <input type="text" class="form-control" data-correct="обработка" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td class="text-end pe-2 fw-500">изменить</td>
                    <td class="text-center px-2">→</td>
                    <td>
                        <input type="text" class="form-control" data-correct="изменение" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td class="text-end pe-2 fw-500">автоматизировать</td>
                    <td class="text-center px-2">→</td>
                    <td>
                        <input type="text" class="form-control" data-correct="автоматизация" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td class="text-end pe-2 fw-500">сохранить</td>
                    <td class="text-center px-2">→</td>
                    <td>
                        <input type="text" class="form-control" data-correct="сохранение" autocomplete="off">
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="text-center mt-3">
            <button class="btn btn-primary px-4" onclick="checkInputs(this)">Проверить</button>
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
                    <td class="text-end pe-3 fw-500">вычисление</td>
                    <td>
                        <select class="form-select" data-correct="вычислить">
                            <option value="">— корень —</option>
                            <option value="число">число</option><option value="выбор">выбор</option><option value="вычислить">вычислить</option><option value="выражение">выражение</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="text-end pe-3 fw-500">электронный</td>
                    <td>
                        <select class="form-select" data-correct="электрон">
                            <option value="">— корень —</option>
                            <option value="электрон">электрон</option><option value="эффективный">эффективный</option><option value="эпизод">эпизод</option><option value="экран">экран</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="text-end pe-3 fw-500">числовой</td>
                    <td>
                        <select class="form-select" data-correct="число">
                            <option value="">— корень —</option>
                            <option value="число">число</option><option value="часть">часть</option><option value="часы">часы</option><option value="чтение">чтение</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="text-end pe-3 fw-500">табличный</td>
                    <td>
                        <select class="form-select" data-correct="таблица">
                            <option value="">— корень —</option>
                            <option value="таблица">таблица</option><option value="техника">техника</option><option value="тема">тема</option><option value="точка">точка</option>
                        </select>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="text-center mt-3">
            <button class="btn btn-primary px-4" onclick="checkFillIn(this)">Проверить</button>
        </div>
    </div>
</div>


<!-- theory -->
<div class="card mb-4 border-info">
    <div class="card-header bg-info text-white fw-bold fs-5">
        <span class="badge bg-light text-info me-2">📖 Теория</span> Краткое содержание занятия
    </div>
    <div class="card-body fs-5 lh-lg">
<h6 class="text-primary mt-3 mb-2">Что такое ячейка и адрес</h6>
<p class="mb-3"><strong>Ячейка</strong> — минимальный элемент электронной таблицы для хранения данных. Каждая ячейка имеет уникальный <strong>адрес</strong>: буква столбца + номер строки. Например: A1, B5, D12.</p>
<h6 class="text-primary mt-3 mb-2">Исходная и производная информация</h6>
<p class="mb-3">В ячейке может быть <strong>исходная информация</strong> (начальные данные) или <strong>производная</strong> (результат вычислений над другими ячейками). При изменении исходных данных значения производных пересчитываются автоматически.</p>
<h6 class="text-primary mt-3 mb-2">Microsoft Excel</h6>
<p class="mb-3"><strong>Excel</strong> — самая известная программа для работы с электронными таблицами. Применяется в бухучёте, анализе финансов, обработке результатов измерений, статистике, и везде, где нужно автоматизировать вычисления.</p>

    </div>
</div>


<!-- yesno-test -->
<div class="card mb-4">
    <div class="card-header bg-warning-subtle fw-bold fs-5">
        <span class="badge bg-warning text-dark me-2">Понимание</span> Тест: верно ли утверждение?
    </div>
    <div class="card-body">
        <p class="text-muted mb-3">Прочитай каждое утверждение и нажми «да», если оно верно, «нет» — если неверно.</p>
        
            <div class="yesno-question mb-3 p-3 border rounded bg-light" data-answer="да" data-explanation="ячейка — наименьшая единица хранения данных.">
                <p class="fw-500 mb-2">1. Ячейка — это минимальный элемент электронной таблицы.</p>
                <div class="btn-group btn-group-lg mb-2">
                    <input type="radio" class="btn-check" name="l16_yn1" value="да" id="l16_yn1_y">
                    <label class="btn btn-outline-success px-4" for="l16_yn1_y">да</label>
                    <input type="radio" class="btn-check" name="l16_yn1" value="нет" id="l16_yn1_n">
                    <label class="btn btn-outline-danger px-4" for="l16_yn1_n">нет</label>
                </div>
                <div class="feedback mt-2 fw-bold d-none"></div>
            </div>
            <div class="yesno-question mb-3 p-3 border rounded bg-light" data-answer="да" data-explanation="буква — столбец, цифра — строка.">
                <p class="fw-500 mb-2">2. Адрес ячейки A1 означает столбец A и строку 1.</p>
                <div class="btn-group btn-group-lg mb-2">
                    <input type="radio" class="btn-check" name="l16_yn2" value="да" id="l16_yn2_y">
                    <label class="btn btn-outline-success px-4" for="l16_yn2_y">да</label>
                    <input type="radio" class="btn-check" name="l16_yn2" value="нет" id="l16_yn2_n">
                    <label class="btn btn-outline-danger px-4" for="l16_yn2_n">нет</label>
                </div>
                <div class="feedback mt-2 fw-bold d-none"></div>
            </div>
            <div class="yesno-question mb-3 p-3 border rounded bg-light" data-answer="нет" data-explanation="Excel работает с числами, текстом, датами и формулами.">
                <p class="fw-500 mb-2">3. Электронные таблицы работают только с числами.</p>
                <div class="btn-group btn-group-lg mb-2">
                    <input type="radio" class="btn-check" name="l16_yn3" value="да" id="l16_yn3_y">
                    <label class="btn btn-outline-success px-4" for="l16_yn3_y">да</label>
                    <input type="radio" class="btn-check" name="l16_yn3" value="нет" id="l16_yn3_n">
                    <label class="btn btn-outline-danger px-4" for="l16_yn3_n">нет</label>
                </div>
                <div class="feedback mt-2 fw-bold d-none"></div>
            </div>
            <div class="yesno-question mb-3 p-3 border rounded bg-light" data-answer="нет" data-explanation="пересчёт происходит автоматически — это главное свойство электронных таблиц.">
                <p class="fw-500 mb-2">4. При изменении исходных данных производные значения не пересчитываются.</p>
                <div class="btn-group btn-group-lg mb-2">
                    <input type="radio" class="btn-check" name="l16_yn4" value="да" id="l16_yn4_y">
                    <label class="btn btn-outline-success px-4" for="l16_yn4_y">да</label>
                    <input type="radio" class="btn-check" name="l16_yn4" value="нет" id="l16_yn4_n">
                    <label class="btn btn-outline-danger px-4" for="l16_yn4_n">нет</label>
                </div>
                <div class="feedback mt-2 fw-bold d-none"></div>
            </div>
            <div class="yesno-question mb-3 p-3 border rounded bg-light" data-answer="да" data-explanation="Excel — самая популярная программа для электронных таблиц.">
                <p class="fw-500 mb-2">5. Microsoft Excel — это пример электронной таблицы.</p>
                <div class="btn-group btn-group-lg mb-2">
                    <input type="radio" class="btn-check" name="l16_yn5" value="да" id="l16_yn5_y">
                    <label class="btn btn-outline-success px-4" for="l16_yn5_y">да</label>
                    <input type="radio" class="btn-check" name="l16_yn5" value="нет" id="l16_yn5_n">
                    <label class="btn btn-outline-danger px-4" for="l16_yn5_n">нет</label>
                </div>
                <div class="feedback mt-2 fw-bold d-none"></div>
            </div>
        <div class="text-center mt-3">
            <button class="btn btn-primary btn-lg px-4" onclick="checkAllYesNo()">Проверить все ответы</button>
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
        
            <div class="question-block mb-4 p-3 border rounded bg-light" data-correct="c" data-explanation="ячейка — самый маленький элемент таблицы.">
                <p class="fw-bold mb-2">1. Что такое ячейка в электронной таблице?</p>
                
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l16_mcq1" id="l16_mcq1_a" value="a">
                    <label class="form-check-label ms-2" for="l16_mcq1_a">а) программа</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l16_mcq1" id="l16_mcq1_b" value="b">
                    <label class="form-check-label ms-2" for="l16_mcq1_b">б) файл с данными</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l16_mcq1" id="l16_mcq1_c" value="c">
                    <label class="form-check-label ms-2" for="l16_mcq1_c">в) минимальный элемент для хранения данных</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l16_mcq1" id="l16_mcq1_d" value="d">
                    <label class="form-check-label ms-2" for="l16_mcq1_d">г) строка данных</label>
                </div>
                <div class="feedback mt-2 fw-bold d-none"></div>
            </div>
            <div class="question-block mb-4 p-3 border rounded bg-light" data-correct="b" data-explanation="например, A1 — столбец A, строка 1.">
                <p class="fw-bold mb-2">2. Из чего состоит адрес ячейки?</p>
                
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l16_mcq2" id="l16_mcq2_a" value="a">
                    <label class="form-check-label ms-2" for="l16_mcq2_a">а) только из цифры</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l16_mcq2" id="l16_mcq2_b" value="b">
                    <label class="form-check-label ms-2" for="l16_mcq2_b">б) из буквы столбца и номера строки</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l16_mcq2" id="l16_mcq2_c" value="c">
                    <label class="form-check-label ms-2" for="l16_mcq2_c">в) из имени файла</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l16_mcq2" id="l16_mcq2_d" value="d">
                    <label class="form-check-label ms-2" for="l16_mcq2_d">г) из формулы</label>
                </div>
                <div class="feedback mt-2 fw-bold d-none"></div>
            </div>
            <div class="question-block mb-4 p-3 border rounded bg-light" data-correct="b" data-explanation="автоматический пересчёт — основное свойство электронных таблиц.">
                <p class="fw-bold mb-2">3. Что произойдёт, если изменить исходные данные в ячейках?</p>
                
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l16_mcq3" id="l16_mcq3_a" value="a">
                    <label class="form-check-label ms-2" for="l16_mcq3_a">а) ничего не изменится</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l16_mcq3" id="l16_mcq3_b" value="b">
                    <label class="form-check-label ms-2" for="l16_mcq3_b">б) связанные производные значения пересчитаются автоматически</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l16_mcq3" id="l16_mcq3_c" value="c">
                    <label class="form-check-label ms-2" for="l16_mcq3_c">в) программа закроется</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l16_mcq3" id="l16_mcq3_d" value="d">
                    <label class="form-check-label ms-2" for="l16_mcq3_d">г) файл удалится</label>
                </div>
                <div class="feedback mt-2 fw-bold d-none"></div>
            </div>
            <div class="question-block mb-4 p-3 border rounded bg-light" data-correct="c" data-explanation="везде, где нужно автоматизировать повторяющиеся вычисления.">
                <p class="fw-bold mb-2">4. В каких областях применяется Excel?</p>
                
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l16_mcq4" id="l16_mcq4_a" value="a">
                    <label class="form-check-label ms-2" for="l16_mcq4_a">а) только в школе</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l16_mcq4" id="l16_mcq4_b" value="b">
                    <label class="form-check-label ms-2" for="l16_mcq4_b">б) только в науке</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l16_mcq4" id="l16_mcq4_c" value="c">
                    <label class="form-check-label ms-2" for="l16_mcq4_c">в) в бухучёте, финансах, статистике, обработке измерений и многих других</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l16_mcq4" id="l16_mcq4_d" value="d">
                    <label class="form-check-label ms-2" for="l16_mcq4_d">г) только для писем</label>
                </div>
                <div class="feedback mt-2 fw-bold d-none"></div>
            </div>
        <div class="text-center mt-3">
            <button class="btn btn-primary btn-lg px-4" onclick="checkMCQ(this)">Проверить ответы</button>
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
                    <span class="fs-5">1. Минимальный элемент электронной таблицы для хранения данных — это <select class="form-select d-inline-block w-auto mx-1" data-correct="ячейка"><option value="">— выбери —</option><option value="формула">формула</option><option value="ячейка">ячейка</option><option value="столбец">столбец</option><option value="строка">строка</option></select>.</span>
                    <div class="feedback mt-2 fw-bold d-none"></div>
                </li>
                <li class="list-group-item p-3 mb-2 bg-light border rounded">
                    <span class="fs-5">2. Адрес ячейки состоит из <select class="form-select d-inline-block w-auto mx-1" data-correct="буквы"><option value="">— выбери —</option><option value="цифры">цифры</option><option value="буквы">буквы</option><option value="знака">знака</option><option value="цвета">цвета</option></select> столбца и номера строки.</span>
                    <div class="feedback mt-2 fw-bold d-none"></div>
                </li>
                <li class="list-group-item p-3 mb-2 bg-light border rounded">
                    <span class="fs-5">3. Информация-результат, который вычисляется по другим ячейкам — это <select class="form-select d-inline-block w-auto mx-1" data-correct="производная"><option value="">— выбери —</option><option value="исходная">исходная</option><option value="производная">производная</option><option value="временная">временная</option><option value="конечная">конечная</option></select> информация.</span>
                    <div class="feedback mt-2 fw-bold d-none"></div>
                </li>
        </ol>
        <div class="text-center mt-3">
            <button class="btn btn-primary btn-lg px-4" onclick="checkFillIn(this)">Проверить</button>
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
                    <p class="fw-500 mb-2 fs-5">1. Что такое ячейка электронной таблицы?</p>
                    <textarea class="form-control mb-2" rows="3" placeholder="Сформулируй свой ответ…"></textarea>
                    <button class="btn btn-sm btn-outline-secondary" onclick="toggleAnswer(this)">Показать эталон</button>
                    <div class="answer-sample d-none mt-2 p-2 bg-white border-start border-success border-3 rounded">
                        <strong class="text-success">Эталон:</strong> Минимальный элемент для хранения данных. Каждая ячейка имеет уникальный адрес.
                    </div>
                </li>
                <li class="list-group-item p-3 mb-3 bg-light border rounded">
                    <p class="fw-500 mb-2 fs-5">2. Из чего состоит адрес ячейки?</p>
                    <textarea class="form-control mb-2" rows="3" placeholder="Сформулируй свой ответ…"></textarea>
                    <button class="btn btn-sm btn-outline-secondary" onclick="toggleAnswer(this)">Показать эталон</button>
                    <div class="answer-sample d-none mt-2 p-2 bg-white border-start border-success border-3 rounded">
                        <strong class="text-success">Эталон:</strong> Из буквы столбца (A, B, C...) и номера строки (1, 2, 3...). Например: A1, B5, D12.
                    </div>
                </li>
                <li class="list-group-item p-3 mb-3 bg-light border rounded">
                    <p class="fw-500 mb-2 fs-5">3. Что такое исходная и производная информация?</p>
                    <textarea class="form-control mb-2" rows="3" placeholder="Сформулируй свой ответ…"></textarea>
                    <button class="btn btn-sm btn-outline-secondary" onclick="toggleAnswer(this)">Показать эталон</button>
                    <div class="answer-sample d-none mt-2 p-2 bg-white border-start border-success border-3 rounded">
                        <strong class="text-success">Эталон:</strong> Исходная — начальные данные, введённые пользователем. Производная — результат вычислений над исходной информацией.
                    </div>
                </li>
                <li class="list-group-item p-3 mb-3 bg-light border rounded">
                    <p class="fw-500 mb-2 fs-5">4. Где применяются электронные таблицы?</p>
                    <textarea class="form-control mb-2" rows="3" placeholder="Сформулируй свой ответ…"></textarea>
                    <button class="btn btn-sm btn-outline-secondary" onclick="toggleAnswer(this)">Показать эталон</button>
                    <div class="answer-sample d-none mt-2 p-2 bg-white border-start border-success border-3 rounded">
                        <strong class="text-success">Эталон:</strong> В бухучёте, финансовом анализе, обработке результатов измерений, статистике, везде, где нужно автоматизировать повторяющиеся вычисления.
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
            <button class="btn btn-success btn-lg px-5" onclick="markLessonCompleted(16); this.outerHTML='<div class=\'alert alert-success mb-0\'><h5 class=\'mb-0\'>✓ Занятие отмечено как пройденное!</h5></div>';">
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
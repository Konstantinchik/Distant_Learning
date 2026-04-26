<!-- lesson12.php -->
<div class="lesson">

    <h2 class="text-primary mb-4">Занятие 12. Циклический алгоритм</h2>

<!-- intro -->
<div class="alert alert-primary border-start border-primary border-4 fs-5 mb-4">
    <strong>Циклический алгоритм</strong> — алгоритм, в котором набор команд выполняется <strong>несколько раз</strong>. Бывает три вида циклов: с параметром, с предусловием и с постусловием.
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
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Цикл">▶</button>
              Цикл
            </td>
            <td class="text-start"></td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Заголовок">▶</button>
              Заголо́вок
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Заголовок цикла">▶</button>
              Заголо́вок ци́кла
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Тело">▶</button>
              Те́ло
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Тело цикла">▶</button>
              Те́ло ци́кла
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Продолжение">▶</button>
              Продолже́ние
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Условие продолжения работы цикла">▶</button>
              Усло́вие продолже́ния рабо́ты ци́кла
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Окончание">▶</button>
              Оконча́ние
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Условие окончания работы цикла">▶</button>
              Усло́вие оконча́ния рабо́ты ци́кла
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Счетчик">▶</button>
              Счётчик
            </td>
            <td class="text-start"></td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Параметр">▶</button>
              Пара́метр
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Цикл с параметром">▶</button>
              Цикл с пара́метром
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Предусловие">▶</button>
              Предусло́вие
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Цикл с предусловием">▶</button>
              Цикл с предусло́вием
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Постусловие">▶</button>
              Постусло́вие
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Цикл с постусловием">▶</button>
              Ци́кл с постусло́вием
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Пошаговый. Пошаговая. Пошаговое. Пошаговые">▶</button>
              Поша́говый, -ая, -ое, -ые
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Пошаговое исполнение алгоритма">▶</button>
              Поша́говое исполне́ние алгори́тма
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
                    <td class="text-end pe-2 fw-500">повторить</td>
                    <td class="text-center px-2">→</td>
                    <td>
                        <input type="text" class="form-control" data-correct="повторение" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td class="text-end pe-2 fw-500">выполнить</td>
                    <td class="text-center px-2">→</td>
                    <td>
                        <input type="text" class="form-control" data-correct="выполнение" autocomplete="off">
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
                    <td class="text-end pe-2 fw-500">продолжить</td>
                    <td class="text-center px-2">→</td>
                    <td>
                        <input type="text" class="form-control" data-correct="продолжение" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td class="text-end pe-2 fw-500">окончить</td>
                    <td class="text-center px-2">→</td>
                    <td>
                        <input type="text" class="form-control" data-correct="окончание" autocomplete="off">
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
                    <td class="text-end pe-3 fw-500">циклический</td>
                    <td>
                        <select class="form-select" data-correct="цикл">
                            <option value="">— корень —</option>
                            <option value="цикл">цикл</option><option value="цифра">цифра</option><option value="цвет">цвет</option><option value="центр">центр</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="text-end pe-3 fw-500">счётчик</td>
                    <td>
                        <select class="form-select" data-correct="считать">
                            <option value="">— корень —</option>
                            <option value="считать">считать</option><option value="сначала">сначала</option><option value="совсем">совсем</option><option value="связь">связь</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="text-end pe-3 fw-500">повторение</td>
                    <td>
                        <select class="form-select" data-correct="повторить">
                            <option value="">— корень —</option>
                            <option value="второй">второй</option><option value="повторить">повторить</option><option value="праздник">праздник</option><option value="покой">покой</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="text-end pe-3 fw-500">параметрический</td>
                    <td>
                        <select class="form-select" data-correct="параметр">
                            <option value="">— корень —</option>
                            <option value="параметр">параметр</option><option value="параграф">параграф</option><option value="паук">паук</option><option value="пауза">пауза</option>
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
<h6 class="text-primary mt-3 mb-2">Структура цикла</h6>
<p class="mb-3">Цикл состоит из <strong>заголовка</strong> (описание условия продолжения или окончания) и <strong>тела</strong> (набор команд, повторяющихся во время работы цикла).</p>
<h6 class="text-primary mt-3 mb-2">Три вида циклов</h6>
<p class="mb-3"><ol class='mb-0 mt-2'><li><strong>Цикл с параметром</strong> — когда заранее известно, сколько раз выполнить тело цикла. Использует <em>счётчик</em> — переменную, значение которой меняется по правилу.</li><li><strong>Цикл с предусловием</strong> — условие проверяется в начале каждой итерации. Тело может не выполниться ни разу.</li><li><strong>Цикл с постусловием</strong> — условие проверяется в конце. Тело выполняется хотя бы один раз.</li></ol></p>
<h6 class="text-primary mt-3 mb-2">Счётчик цикла</h6>
<p class="mb-3"><strong>Счётчик</strong> — это переменная, которая получает начальное значение в начале цикла, изменяется по правилу и определяет, надо ли выполнять тело цикла ещё раз.</p>

    </div>
</div>


<!-- yesno-test -->
<div class="card mb-4">
    <div class="card-header bg-warning-subtle fw-bold fs-5">
        <span class="badge bg-warning text-dark me-2">Понимание</span> Тест: верно ли утверждение?
    </div>
    <div class="card-body">
        <p class="text-muted mb-3">Прочитай каждое утверждение и нажми «да», если оно верно, «нет» — если неверно.</p>
        
            <div class="yesno-question mb-3 p-3 border rounded bg-light" data-answer="да" data-explanation="это и есть смысл цикла.">
                <p class="fw-500 mb-2">1. Циклический алгоритм выполняет набор команд несколько раз.</p>
                <div class="btn-group btn-group-lg mb-2">
                    <input type="radio" class="btn-check" name="l12_yn1" value="да" id="l12_yn1_y">
                    <label class="btn btn-outline-success px-4" for="l12_yn1_y">да</label>
                    <input type="radio" class="btn-check" name="l12_yn1" value="нет" id="l12_yn1_n">
                    <label class="btn btn-outline-danger px-4" for="l12_yn1_n">нет</label>
                </div>
                <div class="feedback mt-2 fw-bold d-none"></div>
            </div>
            <div class="yesno-question mb-3 p-3 border rounded bg-light" data-answer="нет" data-explanation="у цикла есть и заголовок (условие), и тело.">
                <p class="fw-500 mb-2">2. Цикл состоит только из тела цикла.</p>
                <div class="btn-group btn-group-lg mb-2">
                    <input type="radio" class="btn-check" name="l12_yn2" value="да" id="l12_yn2_y">
                    <label class="btn btn-outline-success px-4" for="l12_yn2_y">да</label>
                    <input type="radio" class="btn-check" name="l12_yn2" value="нет" id="l12_yn2_n">
                    <label class="btn btn-outline-danger px-4" for="l12_yn2_n">нет</label>
                </div>
                <div class="feedback mt-2 fw-bold d-none"></div>
            </div>
            <div class="yesno-question mb-3 p-3 border rounded bg-light" data-answer="да" data-explanation="именно поэтому используется счётчик.">
                <p class="fw-500 mb-2">3. В цикле с параметром заранее известно число повторений.</p>
                <div class="btn-group btn-group-lg mb-2">
                    <input type="radio" class="btn-check" name="l12_yn3" value="да" id="l12_yn3_y">
                    <label class="btn btn-outline-success px-4" for="l12_yn3_y">да</label>
                    <input type="radio" class="btn-check" name="l12_yn3" value="нет" id="l12_yn3_n">
                    <label class="btn btn-outline-danger px-4" for="l12_yn3_n">нет</label>
                </div>
                <div class="feedback mt-2 fw-bold d-none"></div>
            </div>
            <div class="yesno-question mb-3 p-3 border rounded bg-light" data-answer="нет" data-explanation="тело выполняется хотя бы один раз — условие проверяется после.">
                <p class="fw-500 mb-2">4. Цикл с постусловием может не выполнить тело ни разу.</p>
                <div class="btn-group btn-group-lg mb-2">
                    <input type="radio" class="btn-check" name="l12_yn4" value="да" id="l12_yn4_y">
                    <label class="btn btn-outline-success px-4" for="l12_yn4_y">да</label>
                    <input type="radio" class="btn-check" name="l12_yn4" value="нет" id="l12_yn4_n">
                    <label class="btn btn-outline-danger px-4" for="l12_yn4_n">нет</label>
                </div>
                <div class="feedback mt-2 fw-bold d-none"></div>
            </div>
            <div class="yesno-question mb-3 p-3 border rounded bg-light" data-answer="нет" data-explanation="три вида: с параметром, с предусловием, с постусловием.">
                <p class="fw-500 mb-2">5. Существует только два вида циклов.</p>
                <div class="btn-group btn-group-lg mb-2">
                    <input type="radio" class="btn-check" name="l12_yn5" value="да" id="l12_yn5_y">
                    <label class="btn btn-outline-success px-4" for="l12_yn5_y">да</label>
                    <input type="radio" class="btn-check" name="l12_yn5" value="нет" id="l12_yn5_n">
                    <label class="btn btn-outline-danger px-4" for="l12_yn5_n">нет</label>
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
        
            <div class="question-block mb-4 p-3 border rounded bg-light" data-correct="b" data-explanation="цикл — это повторение набора команд.">
                <p class="fw-bold mb-2">1. Что такое циклический алгоритм?</p>
                
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l12_mcq1" id="l12_mcq1_a" value="a">
                    <label class="form-check-label ms-2" for="l12_mcq1_a">а) алгоритм с одним действием</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l12_mcq1" id="l12_mcq1_b" value="b">
                    <label class="form-check-label ms-2" for="l12_mcq1_b">б) алгоритм, в котором команды повторяются несколько раз</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l12_mcq1" id="l12_mcq1_c" value="c">
                    <label class="form-check-label ms-2" for="l12_mcq1_c">в) алгоритм с условием</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l12_mcq1" id="l12_mcq1_d" value="d">
                    <label class="form-check-label ms-2" for="l12_mcq1_d">г) алгоритм с процедурами</label>
                </div>
                <div class="feedback mt-2 fw-bold d-none"></div>
            </div>
            <div class="question-block mb-4 p-3 border rounded bg-light" data-correct="b" data-explanation="три: с параметром, с предусловием, с постусловием.">
                <p class="fw-bold mb-2">2. Сколько видов циклов?</p>
                
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l12_mcq2" id="l12_mcq2_a" value="a">
                    <label class="form-check-label ms-2" for="l12_mcq2_a">а) 2</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l12_mcq2" id="l12_mcq2_b" value="b">
                    <label class="form-check-label ms-2" for="l12_mcq2_b">б) 3</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l12_mcq2" id="l12_mcq2_c" value="c">
                    <label class="form-check-label ms-2" for="l12_mcq2_c">в) 4</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l12_mcq2" id="l12_mcq2_d" value="d">
                    <label class="form-check-label ms-2" for="l12_mcq2_d">г) 5</label>
                </div>
                <div class="feedback mt-2 fw-bold d-none"></div>
            </div>
            <div class="question-block mb-4 p-3 border rounded bg-light" data-correct="b" data-explanation="цикл — это заголовок (условие) + тело (команды).">
                <p class="fw-bold mb-2">3. Из каких частей состоит цикл?</p>
                
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l12_mcq3" id="l12_mcq3_a" value="a">
                    <label class="form-check-label ms-2" for="l12_mcq3_a">а) только из тела</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l12_mcq3" id="l12_mcq3_b" value="b">
                    <label class="form-check-label ms-2" for="l12_mcq3_b">б) заголовка и тела</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l12_mcq3" id="l12_mcq3_c" value="c">
                    <label class="form-check-label ms-2" for="l12_mcq3_c">в) заголовка, тела и хвоста</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l12_mcq3" id="l12_mcq3_d" value="d">
                    <label class="form-check-label ms-2" for="l12_mcq3_d">г) начала и конца</label>
                </div>
                <div class="feedback mt-2 fw-bold d-none"></div>
            </div>
            <div class="question-block mb-4 p-3 border rounded bg-light" data-correct="c" data-explanation="в цикле с постусловием условие проверяется в конце, поэтому тело выполняется как минимум один раз.">
                <p class="fw-bold mb-2">4. В каком цикле тело выполняется хотя бы один раз?</p>
                
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l12_mcq4" id="l12_mcq4_a" value="a">
                    <label class="form-check-label ms-2" for="l12_mcq4_a">а) с параметром</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l12_mcq4" id="l12_mcq4_b" value="b">
                    <label class="form-check-label ms-2" for="l12_mcq4_b">б) с предусловием</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l12_mcq4" id="l12_mcq4_c" value="c">
                    <label class="form-check-label ms-2" for="l12_mcq4_c">в) с постусловием</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l12_mcq4" id="l12_mcq4_d" value="d">
                    <label class="form-check-label ms-2" for="l12_mcq4_d">г) во всех видах</label>
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
                    <span class="fs-5">1. Часть цикла, в которой описывается условие — это <select class="form-select d-inline-block w-auto mx-1" data-correct="заголовок"><option value="">— выбери —</option><option value="тело">тело</option><option value="заголовок">заголовок</option><option value="начало">начало</option><option value="конец">конец</option></select> цикла.</span>
                    <div class="feedback mt-2 fw-bold d-none"></div>
                </li>
                <li class="list-group-item p-3 mb-2 bg-light border rounded">
                    <span class="fs-5">2. Переменная, считающая итерации цикла — это <select class="form-select d-inline-block w-auto mx-1" data-correct="счётчик"><option value="">— выбери —</option><option value="параметр">параметр</option><option value="счётчик">счётчик</option><option value="условие">условие</option><option value="заголовок">заголовок</option></select>.</span>
                    <div class="feedback mt-2 fw-bold d-none"></div>
                </li>
                <li class="list-group-item p-3 mb-2 bg-light border rounded">
                    <span class="fs-5">3. Цикл, в котором заранее известно число повторений — это цикл <select class="form-select d-inline-block w-auto mx-1" data-correct="с параметром"><option value="">— выбери —</option><option value="с предусловием">с предусловием</option><option value="с постусловием">с постусловием</option><option value="с параметром">с параметром</option><option value="бесконечный">бесконечный</option></select>.</span>
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
                    <p class="fw-500 mb-2 fs-5">1. Что такое циклический алгоритм?</p>
                    <textarea class="form-control mb-2" rows="3" placeholder="Сформулируй свой ответ…"></textarea>
                    <button class="btn btn-sm btn-outline-secondary" onclick="toggleAnswer(this)">Показать эталон</button>
                    <div class="answer-sample d-none mt-2 p-2 bg-white border-start border-success border-3 rounded">
                        <strong class="text-success">Эталон:</strong> Алгоритм, в котором набор команд (тело цикла) выполняется несколько раз.
                    </div>
                </li>
                <li class="list-group-item p-3 mb-3 bg-light border rounded">
                    <p class="fw-500 mb-2 fs-5">2. Назовите три вида циклов.</p>
                    <textarea class="form-control mb-2" rows="3" placeholder="Сформулируй свой ответ…"></textarea>
                    <button class="btn btn-sm btn-outline-secondary" onclick="toggleAnswer(this)">Показать эталон</button>
                    <div class="answer-sample d-none mt-2 p-2 bg-white border-start border-success border-3 rounded">
                        <strong class="text-success">Эталон:</strong> Цикл с параметром, цикл с предусловием, цикл с постусловием.
                    </div>
                </li>
                <li class="list-group-item p-3 mb-3 bg-light border rounded">
                    <p class="fw-500 mb-2 fs-5">3. Что такое счётчик цикла?</p>
                    <textarea class="form-control mb-2" rows="3" placeholder="Сформулируй свой ответ…"></textarea>
                    <button class="btn btn-sm btn-outline-secondary" onclick="toggleAnswer(this)">Показать эталон</button>
                    <div class="answer-sample d-none mt-2 p-2 bg-white border-start border-success border-3 rounded">
                        <strong class="text-success">Эталон:</strong> Переменная, которая в начале цикла получает начальное значение, во время работы изменяется по заданному правилу и определяет, выполнять ли тело цикла ещё раз.
                    </div>
                </li>
                <li class="list-group-item p-3 mb-3 bg-light border rounded">
                    <p class="fw-500 mb-2 fs-5">4. Чем цикл с предусловием отличается от цикла с постусловием?</p>
                    <textarea class="form-control mb-2" rows="3" placeholder="Сформулируй свой ответ…"></textarea>
                    <button class="btn btn-sm btn-outline-secondary" onclick="toggleAnswer(this)">Показать эталон</button>
                    <div class="answer-sample d-none mt-2 p-2 bg-white border-start border-success border-3 rounded">
                        <strong class="text-success">Эталон:</strong> В цикле с предусловием условие проверяется в начале — тело может не выполниться ни разу. В цикле с постусловием условие в конце — тело выполняется минимум один раз.
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
            <button class="btn btn-success btn-lg px-5" onclick="markLessonCompleted(12); this.outerHTML='<div class=\'alert alert-success mb-0\'><h5 class=\'mb-0\'>✓ Занятие отмечено как пройденное!</h5></div>';">
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
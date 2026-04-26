<!-- lesson11.php -->
<div class="lesson">

    <h2 class="text-primary mb-4">Занятие 11. Условный алгоритм. Логические величины и операции</h2>

<!-- intro -->
<div class="alert alert-primary border-start border-primary border-4 fs-5 mb-4">
    <strong>Условный (разветвляющийся) алгоритм</strong> — алгоритм, в котором выбор действия зависит от <em>истинности</em> или <em>ложности</em> условия. Условие — это логическое выражение со значением <strong>истина</strong> (true) или <strong>ложь</strong> (false).
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
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Условие">▶</button>
              Усло́вие (сущ., ср.р.)
            </td>
            <td class="text-start"></td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Условный. Условная. Условное. Условные">▶</button>
              Усло́вный, -ая, -ое, -ые
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Условный алгоритм">▶</button>
              Усло́вный алгори́тм
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Содержать">▶</button>
              Содержа́ть II (что?)
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Содержать условие">▶</button>
              Содержа́ть усло́вие
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Истина">▶</button>
              И́стина
            </td>
            <td class="text-start"></td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Истинный. Истинная. Истинное. Истинные">▶</button>
              И́стинный, -ая, -ое, -ые
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Истинное выражение">▶</button>
              И́стинное выраже́ние
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Истинно">▶</button>
              И́стинно
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Выражение истинно">▶</button>
              Выраже́ние истинно́
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Ложь">▶</button>
              Ложь (ж.р.)
            </td>
            <td class="text-start"></td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Ложный. Ложная. Ложное. Ложные">▶</button>
              Ло́жный, -ая, -ое, -ые
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Ложное выражение">▶</button>
              Ло́жное выраже́ние
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Ложно">▶</button>
              Ло́жно
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Выражение ложно">▶</button>
              Выраже́ние ло́жно
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Логика">▶</button>
              Ло́гика
            </td>
            <td class="text-start"></td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Логический. Логическая. Логическое. Логические">▶</button>
              Логи́ческий, -ая, -ое, -ие
            </td>
            <td class="text-start">
              <div class="mb-2">
                <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Логическая величина">▶</button>
                Логи́ческая величина́
              </div>
              <div class="mb-2">
                <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Логическое выражение">▶</button>
                Логи́ческое выраже́ние
              </div>
              <div>
                <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Логическая операция">▶</button>
                Логи́ческая опера́ция
              </div>
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Отношение">▶</button>
              Отноше́ние (сущ., ср.р.)
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Операция отношения">▶</button>
              Опера́ция отноше́ния
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Отрицание">▶</button>
              Отрица́ние (сущ., ср.р.)
            </td>
            <td class="text-start"></td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Конъюнкция">▶</button>
              Конъю́нкция
            </td>
            <td class="text-start"></td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Дизъюнкция">▶</button>
              Дизъю́нкция
            </td>
            <td class="text-start"></td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Таблица истинности">▶</button>
              Табли́ца и́стинности
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Таблица истинности логического выражения">▶</button>
              Табли́ца и́стинности логи́ческого выраже́ния
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Форма">▶</button>
              Фо́рма
            </td>
            <td class="text-start">
              <div class="mb-2">
                <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Полная форма">▶</button>
                По́лная фо́рма
              </div>
              <div>
                <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Неполная форма">▶</button>
                Непо́лная фо́рма
              </div>
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Внутри">▶</button>
              Внутри́
            </td>
            <td class="text-start"></td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Вложить">▶</button>
              Вложи́ть II (что? куда?)
            </td>
            <td class="text-start"></td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Вложенный. Вложенная. Вложенное. Вложенные">▶</button>
              Вло́женный, -ая, -ое, -ые
            </td>
            <td class="text-start">
              <div class="mb-2">
                <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Вложенный алгоритм">▶</button>
                Вло́женный алгори́тм
              </div>
              <div>
                <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Вложенное условие">▶</button>
                Вло́женное усло́вие
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
                    <td class="text-end pe-2 fw-500">сравнить</td>
                    <td class="text-center px-2">→</td>
                    <td>
                        <input type="text" class="form-control" data-correct="сравнение" autocomplete="off">
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
                    <td class="text-end pe-2 fw-500">отрицать</td>
                    <td class="text-center px-2">→</td>
                    <td>
                        <input type="text" class="form-control" data-correct="отрицание" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td class="text-end pe-2 fw-500">выбрать</td>
                    <td class="text-center px-2">→</td>
                    <td>
                        <input type="text" class="form-control" data-correct="выбор" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td class="text-end pe-2 fw-500">определить</td>
                    <td class="text-center px-2">→</td>
                    <td>
                        <input type="text" class="form-control" data-correct="определение" autocomplete="off">
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
                    <td class="text-end pe-3 fw-500">истина</td>
                    <td>
                        <select class="form-select" data-correct="истина">
                            <option value="">— корень —</option>
                            <option value="истина">истина</option><option value="использовать">использовать</option><option value="изменить">изменить</option><option value="источник">источник</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="text-end pe-3 fw-500">ложный</td>
                    <td>
                        <select class="form-select" data-correct="ложь">
                            <option value="">— корень —</option>
                            <option value="ложь">ложь</option><option value="логика">логика</option><option value="лента">лента</option><option value="линия">линия</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="text-end pe-3 fw-500">ветвление</td>
                    <td>
                        <select class="form-select" data-correct="ветка">
                            <option value="">— корень —</option>
                            <option value="ветка">ветка</option><option value="ветер">ветер</option><option value="вечер">вечер</option><option value="вес">вес</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="text-end pe-3 fw-500">логический</td>
                    <td>
                        <select class="form-select" data-correct="логика">
                            <option value="">— корень —</option>
                            <option value="логика">логика</option><option value="лента">лента</option><option value="лимит">лимит</option><option value="линия">линия</option>
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
<h6 class="text-primary mt-3 mb-2">Условный алгоритм</h6>
<p class="mb-3"><strong>Условный алгоритм</strong> — это средство <em>ветвления</em> процесса решения задачи. Он всегда содержит условие и хотя бы одну команду. Для записи используется элемент блок-схемы «Ветвление». Структура: <em>если условие верно — выполнить одно, иначе — другое</em>.</p>
<h6 class="text-primary mt-3 mb-2">Логические величины и выражения</h6>
<p class="mb-3"><strong>Логическая величина</strong> имеет только два значения: <em>истина</em> (true, 1) или <em>ложь</em> (false, 0). <strong>Логическое выражение</strong> состоит из логических величин, операций отношения и логических операций. В отличие от математики (где a > b — это «неравенство»), в информатике это выражение со значением true/false.</p>
<h6 class="text-primary mt-3 mb-2">Операции отношения и логические операции</h6>
<p class="mb-3"><strong>Операции отношения</strong>: = (равно), &lt;&gt; (не равно), &lt; (меньше), &gt; (больше), &lt;= (меньше или равно), &gt;= (больше или равно). <strong>Логические операции</strong>: <em>and</em> (и — оба условия истинны), <em>or</em> (или — хотя бы одно), <em>not</em> (не — отрицание).</p>

    </div>
</div>


<!-- yesno-test -->
<div class="card mb-4">
    <div class="card-header bg-warning-subtle fw-bold fs-5">
        <span class="badge bg-warning text-dark me-2">Понимание</span> Тест: верно ли утверждение?
    </div>
    <div class="card-body">
        <p class="text-muted mb-3">Прочитай каждое утверждение и нажми «да», если оно верно, «нет» — если неверно.</p>
        
            <div class="yesno-question mb-3 p-3 border rounded bg-light" data-answer="да" data-explanation="именно так: всегда есть условие и хотя бы одна команда.">
                <p class="fw-500 mb-2">1. Условный алгоритм содержит хотя бы одно условие.</p>
                <div class="btn-group btn-group-lg mb-2">
                    <input type="radio" class="btn-check" name="l11_yn1" value="да" id="l11_yn1_y">
                    <label class="btn btn-outline-success px-4" for="l11_yn1_y">да</label>
                    <input type="radio" class="btn-check" name="l11_yn1" value="нет" id="l11_yn1_n">
                    <label class="btn btn-outline-danger px-4" for="l11_yn1_n">нет</label>
                </div>
                <div class="feedback mt-2 fw-bold d-none"></div>
            </div>
            <div class="yesno-question mb-3 p-3 border rounded bg-light" data-answer="нет" data-explanation="только два: истина (true) или ложь (false).">
                <p class="fw-500 mb-2">2. Логическая величина может иметь три значения.</p>
                <div class="btn-group btn-group-lg mb-2">
                    <input type="radio" class="btn-check" name="l11_yn2" value="да" id="l11_yn2_y">
                    <label class="btn btn-outline-success px-4" for="l11_yn2_y">да</label>
                    <input type="radio" class="btn-check" name="l11_yn2" value="нет" id="l11_yn2_n">
                    <label class="btn btn-outline-danger px-4" for="l11_yn2_n">нет</label>
                </div>
                <div class="feedback mt-2 fw-bold d-none"></div>
            </div>
            <div class="yesno-question mb-3 p-3 border rounded bg-light" data-answer="да" data-explanation="это операция отношения «не равно».">
                <p class="fw-500 mb-2">3. Знак «<>» в информатике означает «не равно».</p>
                <div class="btn-group btn-group-lg mb-2">
                    <input type="radio" class="btn-check" name="l11_yn3" value="да" id="l11_yn3_y">
                    <label class="btn btn-outline-success px-4" for="l11_yn3_y">да</label>
                    <input type="radio" class="btn-check" name="l11_yn3" value="нет" id="l11_yn3_n">
                    <label class="btn btn-outline-danger px-4" for="l11_yn3_n">нет</label>
                </div>
                <div class="feedback mt-2 fw-bold d-none"></div>
            </div>
            <div class="yesno-question mb-3 p-3 border rounded bg-light" data-answer="нет" data-explanation="and даёт истину, когда оба условия истинны.">
                <p class="fw-500 mb-2">4. Операция «and» (и) даёт истину, если оба условия ложны.</p>
                <div class="btn-group btn-group-lg mb-2">
                    <input type="radio" class="btn-check" name="l11_yn4" value="да" id="l11_yn4_y">
                    <label class="btn btn-outline-success px-4" for="l11_yn4_y">да</label>
                    <input type="radio" class="btn-check" name="l11_yn4" value="нет" id="l11_yn4_n">
                    <label class="btn btn-outline-danger px-4" for="l11_yn4_n">нет</label>
                </div>
                <div class="feedback mt-2 fw-bold d-none"></div>
            </div>
            <div class="yesno-question mb-3 p-3 border rounded bg-light" data-answer="да" data-explanation="ветвление — стандартный блок для условия.">
                <p class="fw-500 mb-2">5. В блок-схеме условный алгоритм изображается элементом «Ветвление».</p>
                <div class="btn-group btn-group-lg mb-2">
                    <input type="radio" class="btn-check" name="l11_yn5" value="да" id="l11_yn5_y">
                    <label class="btn btn-outline-success px-4" for="l11_yn5_y">да</label>
                    <input type="radio" class="btn-check" name="l11_yn5" value="нет" id="l11_yn5_n">
                    <label class="btn btn-outline-danger px-4" for="l11_yn5_n">нет</label>
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
        
            <div class="question-block mb-4 p-3 border rounded bg-light" data-correct="b" data-explanation="только два: истина (true) или ложь (false).">
                <p class="fw-bold mb-2">1. Сколько значений может иметь логическая величина?</p>
                
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l11_mcq1" id="l11_mcq1_a" value="a">
                    <label class="form-check-label ms-2" for="l11_mcq1_a">а) 1</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l11_mcq1" id="l11_mcq1_b" value="b">
                    <label class="form-check-label ms-2" for="l11_mcq1_b">б) 2</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l11_mcq1" id="l11_mcq1_c" value="c">
                    <label class="form-check-label ms-2" for="l11_mcq1_c">в) 3</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l11_mcq1" id="l11_mcq1_d" value="d">
                    <label class="form-check-label ms-2" for="l11_mcq1_d">г) много</label>
                </div>
                <div class="feedback mt-2 fw-bold d-none"></div>
            </div>
            <div class="question-block mb-4 p-3 border rounded bg-light" data-correct="b" data-explanation="<> в Pascal означает «не равно».">
                <p class="fw-bold mb-2">2. Какой знак отношения означает «не равно»?</p>
                
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l11_mcq2" id="l11_mcq2_a" value="a">
                    <label class="form-check-label ms-2" for="l11_mcq2_a">а) =</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l11_mcq2" id="l11_mcq2_b" value="b">
                    <label class="form-check-label ms-2" for="l11_mcq2_b">б) <></label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l11_mcq2" id="l11_mcq2_c" value="c">
                    <label class="form-check-label ms-2" for="l11_mcq2_c">в) <=</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l11_mcq2" id="l11_mcq2_d" value="d">
                    <label class="form-check-label ms-2" for="l11_mcq2_d">г) >=</label>
                </div>
                <div class="feedback mt-2 fw-bold d-none"></div>
            </div>
            <div class="question-block mb-4 p-3 border rounded bg-light" data-correct="b" data-explanation="and (и) — оба условия должны быть истинны.">
                <p class="fw-bold mb-2">3. Какую логическую операцию использовать, чтобы оба условия были истинны?</p>
                
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l11_mcq3" id="l11_mcq3_a" value="a">
                    <label class="form-check-label ms-2" for="l11_mcq3_a">а) or</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l11_mcq3" id="l11_mcq3_b" value="b">
                    <label class="form-check-label ms-2" for="l11_mcq3_b">б) and</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l11_mcq3" id="l11_mcq3_c" value="c">
                    <label class="form-check-label ms-2" for="l11_mcq3_c">в) not</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l11_mcq3" id="l11_mcq3_d" value="d">
                    <label class="form-check-label ms-2" for="l11_mcq3_d">г) xor</label>
                </div>
                <div class="feedback mt-2 fw-bold d-none"></div>
            </div>
            <div class="question-block mb-4 p-3 border rounded bg-light" data-correct="b" data-explanation="условный алгоритм — это ветвление: одно действие, если условие истинно, другое — если ложно.">
                <p class="fw-bold mb-2">4. Что делает условный алгоритм?</p>
                
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l11_mcq4" id="l11_mcq4_a" value="a">
                    <label class="form-check-label ms-2" for="l11_mcq4_a">а) повторяет действие много раз</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l11_mcq4" id="l11_mcq4_b" value="b">
                    <label class="form-check-label ms-2" for="l11_mcq4_b">б) выбирает действие в зависимости от истинности условия</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l11_mcq4" id="l11_mcq4_c" value="c">
                    <label class="form-check-label ms-2" for="l11_mcq4_c">в) выполняет команды по порядку</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l11_mcq4" id="l11_mcq4_d" value="d">
                    <label class="form-check-label ms-2" for="l11_mcq4_d">г) останавливает программу</label>
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
                    <span class="fs-5">1. Логическая величина имеет два значения: истина или <select class="form-select d-inline-block w-auto mx-1" data-correct="ложь"><option value="">— выбери —</option><option value="правда">правда</option><option value="ложь">ложь</option><option value="ноль">ноль</option><option value="пусто">пусто</option></select>.</span>
                    <div class="feedback mt-2 fw-bold d-none"></div>
                </li>
                <li class="list-group-item p-3 mb-2 bg-light border rounded">
                    <span class="fs-5">2. Операция отношения «&gt;=» означает <select class="form-select d-inline-block w-auto mx-1" data-correct="больше или равно"><option value="">— выбери —</option><option value="больше">больше</option><option value="больше или равно">больше или равно</option><option value="меньше">меньше</option><option value="не равно">не равно</option></select>.</span>
                    <div class="feedback mt-2 fw-bold d-none"></div>
                </li>
                <li class="list-group-item p-3 mb-2 bg-light border rounded">
                    <span class="fs-5">3. Логическая операция <select class="form-select d-inline-block w-auto mx-1" data-correct="or"><option value="">— выбери —</option><option value="and">and</option><option value="or">or</option><option value="not">not</option><option value="xor">xor</option></select> даёт истину, когда хотя бы одно условие истинно.</span>
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
                    <p class="fw-500 mb-2 fs-5">1. Что такое условный алгоритм?</p>
                    <textarea class="form-control mb-2" rows="3" placeholder="Сформулируй свой ответ…"></textarea>
                    <button class="btn btn-sm btn-outline-secondary" onclick="toggleAnswer(this)">Показать эталон</button>
                    <div class="answer-sample d-none mt-2 p-2 bg-white border-start border-success border-3 rounded">
                        <strong class="text-success">Эталон:</strong> Алгоритм, в котором выбор действия зависит от истинности или ложности условия.
                    </div>
                </li>
                <li class="list-group-item p-3 mb-3 bg-light border rounded">
                    <p class="fw-500 mb-2 fs-5">2. Какие два значения может иметь логическая величина?</p>
                    <textarea class="form-control mb-2" rows="3" placeholder="Сформулируй свой ответ…"></textarea>
                    <button class="btn btn-sm btn-outline-secondary" onclick="toggleAnswer(this)">Показать эталон</button>
                    <div class="answer-sample d-none mt-2 p-2 bg-white border-start border-success border-3 rounded">
                        <strong class="text-success">Эталон:</strong> Истина (true) или ложь (false).
                    </div>
                </li>
                <li class="list-group-item p-3 mb-3 bg-light border rounded">
                    <p class="fw-500 mb-2 fs-5">3. Назовите три основные логические операции.</p>
                    <textarea class="form-control mb-2" rows="3" placeholder="Сформулируй свой ответ…"></textarea>
                    <button class="btn btn-sm btn-outline-secondary" onclick="toggleAnswer(this)">Показать эталон</button>
                    <div class="answer-sample d-none mt-2 p-2 bg-white border-start border-success border-3 rounded">
                        <strong class="text-success">Эталон:</strong> and (и), or (или), not (не).
                    </div>
                </li>
                <li class="list-group-item p-3 mb-3 bg-light border rounded">
                    <p class="fw-500 mb-2 fs-5">4. Чем логическое выражение отличается от математического неравенства?</p>
                    <textarea class="form-control mb-2" rows="3" placeholder="Сформулируй свой ответ…"></textarea>
                    <button class="btn btn-sm btn-outline-secondary" onclick="toggleAnswer(this)">Показать эталон</button>
                    <div class="answer-sample d-none mt-2 p-2 bg-white border-start border-success border-3 rounded">
                        <strong class="text-success">Эталон:</strong> В информатике логическое выражение имеет значение «истина» или «ложь», а в математике неравенство просто «верно» или «неверно».
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
            <button class="btn btn-success btn-lg px-5" onclick="markLessonCompleted(11); this.outerHTML='<div class=\'alert alert-success mb-0\'><h5 class=\'mb-0\'>✓ Занятие отмечено как пройденное!</h5></div>';">
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
<!-- lesson7.php -->
<div class="lesson">

    <h2 class="text-primary mb-4">Занятие 7. Хранение информации. Файловая система. Программное обеспечение</h2>

<!-- intro -->
<div class="alert alert-primary border-start border-primary border-4 fs-5 mb-4">
    В этом занятии — три большие темы: <strong>файлы</strong> (как компьютер хранит данные), <strong>файловая система</strong> (как файлы организованы) и <strong>программное обеспечение</strong> (как делятся программы по назначению).
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
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Файл">▶</button>
              Фа́йл
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Имя файла">▶</button>
              И́мя фа́йла
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Исполняемый файл">▶</button>
              Исполня́емый фа́йл
            </td>
            <td class="text-start"></td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn"
                      data-text="Файловый, файловая, файловое, файловые">▶</button>
              Фа́йловый, -ая, -ое, -ые
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Файловая система">▶</button>
              Фа́йловая систе́ма
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Расширение">▶</button>
              Расшире́ние
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Расширение файла">▶</button>
              Расшире́ние фа́йла
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Операция">▶</button>
              Опера́ция
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Операции с файлами">▶</button>
              Опера́ции с фа́йлами
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Создавать, создать">▶</button>
              Создава́ть I, созда́ть I–II (что?)
            </td>
            <td class="text-start"></td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Создание">▶</button>
              Созда́ние
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Создание файла">▶</button>
              Созда́ние фа́йла
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Переименовывать, переименовать">▶</button>
              Переимено́вывать I, переименова́ть I (что?)
            </td>
            <td class="text-start"></td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Переименование">▶</button>
              Переименова́ние
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Переименование файла">▶</button>
              Переименова́ние фа́йла
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Копировать, скопировать">▶</button>
              Копи́ровать I, скопи́ровать I (что?)
            </td>
            <td class="text-start"></td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Копирование">▶</button>
              Копи́рование
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Копирование файла">▶</button>
              Копи́рование фа́йла
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Перемещать, переместить">▶</button>
              Перемеща́ть I, перемести́ть II (что?)
            </td>
            <td class="text-start"></td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Перемещение">▶</button>
              Перемеще́ние
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Перемещение файла">▶</button>
              Перемеще́ние фа́йла
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Удалять, удалить">▶</button>
              Удаля́ть I, удали́ть II (что?)
            </td>
            <td class="text-start"></td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Удаление">▶</button>
              Удале́ние
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Удаление файла">▶</button>
              Удале́ние фа́йла
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Каталог, папка, директорий">▶</button>
              Катало́г (папка, директорий)
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Корневой каталог">▶</button>
              Корнево́й катало́г
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Вложенные каталоги">▶</button>
              Вло́женные катало́ги
            </td>
            <td class="text-start"></td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Поиск">▶</button>
              По́иск
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Путь поиска файла">▶</button>
              Путь по́иска фа́йла
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Обеспечивать, обеспечить">▶</button>
              Обеспе́чивать I, обеспе́чить II (кого? что? чем?)
            </td>
            <td class="text-start"></td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Обеспечение">▶</button>
              Обеспече́ние
            </td>
            <td class="text-start"></td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Программа">▶</button>
              Програ́мма
            </td>
            <td class="text-start"></td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn"
                      data-text="Программный, программная, программное, программные">▶</button>
              Програ́ммный, -ая, -ое, -ые
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Программное обеспечение">▶</button>
              Програ́ммное обеспече́ние
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Уровень">▶</button>
              У́ровень (м.р.)
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Базовый уровень">▶</button>
              Ба́зовый у́ровень
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Системный уровень">▶</button>
              Систе́мный у́ровень
            </td>
            <td class="text-start"></td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Служебный уровень">▶</button>
              Служе́бный у́ровень
            </td>
            <td class="text-start"></td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Прикладной уровень">▶</button>
              Прикладно́й у́ровень
            </td>
            <td class="text-start"></td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Взаимодействовать">▶</button>
              Взаимоде́йствовать I (с чем?)
            </td>
            <td class="text-start"></td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Взаимодействие">▶</button>
              Взаимоде́йствие
            </td>
            <td class="text-start"></td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn"
                      data-text="Предшествующий, предшествующая, предшествующее, предшествующие">▶</button>
              Предше́ствующий, -ая, -ее, -ие
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Предшествующий уровень">▶</button>
              Предше́ствующий у́ровень
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Драйвер">▶</button>
              Дра́йвер
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Драйвер устройства">▶</button>
              Дра́йвер устро́йства
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Операционная система">▶</button>
              Опера́ционная систе́ма
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Ядро операционной системы">▶</button>
              Ядро́ операцио́нной систе́мы
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Утилита, утилиты">▶</button>
              Утили́та (утили́ты — мн.ч.)
            </td>
            <td class="text-start"></td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Редактор">▶</button>
              Реда́ктор
            </td>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Графический редактор">▶</button>
              Графи́ческий реда́ктор
            </td>
          </tr>

          <tr>
            <td class="text-start">
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Текстовый редактор">▶</button>
              Те́кстовый реда́ктор
            </td>
            <td class="text-start"></td>
          </tr>

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
              <button type="button" class="btn btn-sm btn-outline-primary me-2 speak-btn" data-text="Браузер">▶</button>
              Бра́узер
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
        <p class="mb-2"><strong>Образец:</strong> <code>представить → представление</code></p>
        <p class="text-muted mb-3">Образуй существительное от каждого глагола по образцу.</p>
        <table class="table align-middle" style="max-width:500px">
            <tbody>
                <tr>
                    <td class="text-end pe-2 fw-500">хранить</td>
                    <td class="text-center px-2">→</td>
                    <td>
                        <input type="text" class="form-control" data-correct="хранение" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td class="text-end pe-2 fw-500">расширить</td>
                    <td class="text-center px-2">→</td>
                    <td>
                        <input type="text" class="form-control" data-correct="расширение" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td class="text-end pe-2 fw-500">переместить</td>
                    <td class="text-center px-2">→</td>
                    <td>
                        <input type="text" class="form-control" data-correct="перемещение" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td class="text-end pe-2 fw-500">обеспечить</td>
                    <td class="text-center px-2">→</td>
                    <td>
                        <input type="text" class="form-control" data-correct="обеспечение" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td class="text-end pe-2 fw-500">удалить</td>
                    <td class="text-center px-2">→</td>
                    <td>
                        <input type="text" class="form-control" data-correct="удаление" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td class="text-end pe-2 fw-500">управлять</td>
                    <td class="text-center px-2">→</td>
                    <td>
                        <input type="text" class="form-control" data-correct="управление" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td class="text-end pe-2 fw-500">улучшить</td>
                    <td class="text-center px-2">→</td>
                    <td>
                        <input type="text" class="form-control" data-correct="улучшение" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td class="text-end pe-2 fw-500">выполнить</td>
                    <td class="text-center px-2">→</td>
                    <td>
                        <input type="text" class="form-control" data-correct="выполнение" autocomplete="off">
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="text-center mt-3">
            <button type="button" class="btn btn-primary px-4" onclick="checkInputs(this)">Проверить</button>
        </div>
    </div>
</div>

<!-- lang-word-formation -->
<div class="card mb-4 border-warning">
    <div class="card-header bg-warning-subtle fw-bold">
        <span class="badge bg-warning text-dark me-2">📝 Лексика</span> Образуй существительное от глагола
    </div>
    <div class="card-body">
        <p class="mb-2"><strong>Образец:</strong> <code>понимать → понимание</code></p>
        <p class="text-muted mb-3">Образуй существительное от каждого глагола по образцу.</p>
        <table class="table align-middle" style="max-width:500px">
            <tbody>
                <tr>
                    <td class="text-end pe-2 fw-500">создать</td>
                    <td class="text-center px-2">→</td>
                    <td>
                        <input type="text" class="form-control" data-correct="создание" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td class="text-end pe-2 fw-500">переименовать</td>
                    <td class="text-center px-2">→</td>
                    <td>
                        <input type="text" class="form-control" data-correct="переименование" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td class="text-end pe-2 fw-500">копировать</td>
                    <td class="text-center px-2">→</td>
                    <td>
                        <input type="text" class="form-control" data-correct="копирование" autocomplete="off">
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="text-center mt-3">
            <button type="button" class="btn btn-primary px-4" onclick="checkInputs(this)">Проверить</button>
        </div>
    </div>
</div>

<!-- lang-word-formation -->
<div class="card mb-4 border-warning">
    <div class="card-header bg-warning-subtle fw-bold">
        <span class="badge bg-warning text-dark me-2">📝 Лексика</span> Образуй существительное от глагола
    </div>
    <div class="card-body">
        <p class="mb-2"><strong>Образец:</strong> <code>преподавать → преподаватель</code></p>
        <p class="text-muted mb-3">Образуй существительное от каждого глагола по образцу.</p>
        <table class="table align-middle" style="max-width:500px">
            <tbody>
                <tr>
                    <td class="text-end pe-2 fw-500">пользоваться</td>
                    <td class="text-center px-2">→</td>
                    <td>
                        <input type="text" class="form-control" data-correct="пользователь" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td class="text-end pe-2 fw-500">носить</td>
                    <td class="text-center px-2">→</td>
                    <td>
                        <input type="text" class="form-control" data-correct="носитель" autocomplete="off">
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="text-center mt-3">
            <button type="button" class="btn btn-primary px-4" onclick="checkInputs(this)">Проверить</button>
        </div>
    </div>
</div>

<!-- lang-word-formation -->
<div class="card mb-4 border-warning">
    <div class="card-header bg-warning-subtle fw-bold">
        <span class="badge bg-warning text-dark me-2">📝 Лексика</span> Образуй существительное от глагола
    </div>
    <div class="card-body">
        <p class="mb-2"><strong>Образец:</strong> <code>проверить → проверка</code></p>
        <p class="text-muted mb-3">Образуй существительное от каждого глагола по образцу.</p>
        <table class="table align-middle" style="max-width:500px">
            <tbody>
                <tr>
                    <td class="text-end pe-2 fw-500">загрузить</td>
                    <td class="text-center px-2">→</td>
                    <td>
                        <input type="text" class="form-control" data-correct="загрузка" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td class="text-end pe-2 fw-500">отладить</td>
                    <td class="text-center px-2">→</td>
                    <td>
                        <input type="text" class="form-control" data-correct="отладка" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td class="text-end pe-2 fw-500">поддержать</td>
                    <td class="text-center px-2">→</td>
                    <td>
                        <input type="text" class="form-control" data-correct="поддержка" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td class="text-end pe-2 fw-500">настроить</td>
                    <td class="text-center px-2">→</td>
                    <td>
                        <input type="text" class="form-control" data-correct="настройка" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td class="text-end pe-2 fw-500">наладить</td>
                    <td class="text-center px-2">→</td>
                    <td>
                        <input type="text" class="form-control" data-correct="наладка" autocomplete="off">
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
                    <td class="text-end pe-3 fw-500">создание</td>
                    <td>
                        <select class="form-select" data-no-instant data-correct="создать">
                            <option value="">— корень —</option>
                            <option value="создать">создать</option><option value="копировать">копировать</option><option value="хранить">хранить</option><option value="расширить">расширить</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="text-end pe-3 fw-500">копирование</td>
                    <td>
                        <select class="form-select" data-no-instant data-correct="копировать">
                            <option value="">— корень —</option>
                            <option value="удалить">удалить</option><option value="копировать">копировать</option><option value="переименовать">переименовать</option><option value="загрузить">загрузить</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="text-end pe-3 fw-500">переименованный</td>
                    <td>
                        <select class="form-select" data-no-instant data-correct="переименовать">
                            <option value="">— корень —</option>
                            <option value="переименовать">переименовать</option><option value="сохранить">сохранить</option><option value="удалить">удалить</option><option value="обеспечить">обеспечить</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="text-end pe-3 fw-500">удаление</td>
                    <td>
                        <select class="form-select" data-no-instant data-correct="удалить">
                            <option value="">— корень —</option>
                            <option value="удалить">удалить</option><option value="обеспечить">обеспечить</option><option value="автоматизировать">автоматизировать</option><option value="хранить">хранить</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="text-end pe-3 fw-500">обеспечение</td>
                    <td>
                        <select class="form-select" data-no-instant data-correct="обеспечить">
                            <option value="">— корень —</option>
                            <option value="обеспечить">обеспечить</option><option value="хранить">хранить</option><option value="удалить">удалить</option><option value="пользоваться">пользоваться</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="text-end pe-3 fw-500">пользователь</td>
                    <td>
                        <select class="form-select" data-no-instant data-correct="пользоваться">
                            <option value="">— корень —</option>
                            <option value="хранить">хранить</option><option value="пользоваться">пользоваться</option><option value="обеспечить">обеспечить</option><option value="загрузить">загрузить</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="text-end pe-3 fw-500">загрузка</td>
                    <td>
                        <select class="form-select" data-no-instant data-correct="загрузить">
                            <option value="">— корень —</option>
                            <option value="сохранить">сохранить</option><option value="удалить">удалить</option><option value="загрузить">загрузить</option><option value="копировать">копировать</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="text-end pe-3 fw-500">файловый</td>
                    <td>
                        <select class="form-select" data-no-instant data-correct="файл">
                            <option value="">— корень —</option>
                            <option value="хранить">хранить</option><option value="файл">файл</option><option value="пользоваться">пользоваться</option><option value="удалить">удалить</option>
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

<!-- lang-constructions -->
<div class="card mb-4 border-warning">
    <div class="card-header bg-warning-subtle fw-bold">
        <span class="badge bg-warning text-dark me-2">📝 Лексика</span> Учим конструкции
    </div>
    <div class="card-body">
        <p class="text-muted mb-3">Изучи каждую конструкцию, посмотри образец и попробуй составить свои предложения.</p>
        
        <div class="p-3 mb-3 bg-light rounded border">
            <p class="fw-bold mb-2"><span class="text-primary fs-5">что (1) входит в состав чего (2)</span></p>
            <p class="mb-2"><strong>Образец:</strong> <em>Внешняя память входит в элементарный состав компьютера.</em></p>
            <p class="mb-2 text-muted small">Составь предложения по образцу:</p>
            <p class="mb-1">— Драйверы — программное обеспечение системного уровня.</p><p class="mb-1">— Средства для создания приложений — программное обеспечение прикладного уровня.</p><p class="mb-1">— Пакеты прикладных программ — программное обеспечение прикладного уровня.</p>
            <textarea class="form-control mt-2" rows="3" placeholder="Запиши свои предложения здесь…"></textarea>
            <button type="button" class="btn btn-sm btn-outline-secondary mt-2" onclick="toggleAnswer(this)">Показать варианты ответов</button>
            <div class="answer-sample d-none mt-2 p-2 bg-white border-start border-success border-3 rounded">
                <strong class="text-success">Возможные предложения:</strong>
                <p class="mb-1">• Драйверы входят в состав программного обеспечения системного уровня.</p><p class="mb-1">• Средства для создания приложений входят в состав программного обеспечения прикладного уровня.</p><p class="mb-1">• Пакеты прикладных программ входят в состав программного обеспечения прикладного уровня.</p>
            </div>
        </div>
        <div class="p-3 mb-3 bg-light rounded border">
            <p class="fw-bold mb-2"><span class="text-primary fs-5">что (1) взаимодействует с чем (5)</span></p>
            <p class="mb-2"><strong>Образец:</strong> <em>Программное обеспечение служебного уровня взаимодействует с программами базового уровня.</em></p>
            <p class="mb-2 text-muted small">Составь предложения по образцу:</p>
            <p class="mb-1">— Программы системного уровня — программы базового уровня.</p><p class="mb-1">— Программы служебного уровня — программы системного уровня.</p><p class="mb-1">— Каждый уровень программного обеспечения — программы предшествующих уровней.</p>
            <textarea class="form-control mt-2" rows="3" placeholder="Запиши свои предложения здесь…"></textarea>
            <button type="button" class="btn btn-sm btn-outline-secondary mt-2" onclick="toggleAnswer(this)">Показать варианты ответов</button>
            <div class="answer-sample d-none mt-2 p-2 bg-white border-start border-success border-3 rounded">
                <strong class="text-success">Возможные предложения:</strong>
                <p class="mb-1">• Программы системного уровня взаимодействуют с программами базового уровня.</p><p class="mb-1">• Программы служебного уровня взаимодействуют с программами системного уровня.</p><p class="mb-1">• Каждый уровень программного обеспечения взаимодействует с программами предшествующих уровней.</p>
            </div>
        </div>
        <div class="p-3 mb-3 bg-light rounded border">
            <p class="fw-bold mb-2"><span class="text-primary fs-5">взаимодействие (кого, чего (2)) с чем, с кем (5)</span></p>
            <p class="mb-2"><strong>Образец:</strong> <em>Задача драйверов — взаимодействие с устройствами компьютера.</em></p>
            <p class="mb-2 text-muted small">Составь предложения по образцу:</p>
            <p class="mb-1">— Задача программ системного уровня — пользователь.</p><p class="mb-1">— Задача программ системного уровня — устройства компьютера.</p><p class="mb-1">— Задача ядра операционной системы — человек, компьютер.</p>
            <textarea class="form-control mt-2" rows="3" placeholder="Запиши свои предложения здесь…"></textarea>
            <button type="button" class="btn btn-sm btn-outline-secondary mt-2" onclick="toggleAnswer(this)">Показать варианты ответов</button>
            <div class="answer-sample d-none mt-2 p-2 bg-white border-start border-success border-3 rounded">
                <strong class="text-success">Возможные предложения:</strong>
                <p class="mb-1">• Задача программ системного уровня — взаимодействие с пользователем.</p><p class="mb-1">• Задача программ системного уровня — взаимодействие с устройствами компьютера.</p><p class="mb-1">• Задача ядра операционной системы — взаимодействие человека с компьютером.</p>
            </div>
        </div>
    </div>
</div>


<!-- theory -->
<div class="card mb-4 border-info">
    <div class="card-header bg-info text-white fw-bold fs-5">
        <span class="badge bg-light text-info me-2">📖 Теория</span> Краткое содержание занятия
    </div>
    <div class="card-body fs-5 lh-lg">
<h6 class="text-primary mt-3 mb-2">Файл и имя файла</h6>
<p class="mb-3"><strong>Файл</strong> — это именованная область внешней памяти. У файла есть имя, которое даёт пользователь или программа. Полное имя файла состоит из <strong>двух частей</strong>: <em>имя</em> (информация для пользователя — что в файле) и <em>расширение</em> (информация для компьютера — какой программой открывать).</p>
<h6 class="text-primary mt-3 mb-2">Файловая система и операции</h6>
<p class="mb-3"><strong>Файловая система</strong> — это способ организации информации о файлах на носителях. Она определяет правила именования и обеспечивает основные операции: <em>создание, переименование, копирование, перемещение, удаление</em>.</p>
<h6 class="text-primary mt-3 mb-2">Каталоги</h6>
<p class="mb-3"><strong>Каталог</strong> (папка, директорий) — элемент файловой системы для группировки файлов. На внешнем носителе всегда есть только <strong>один</strong> корневой каталог (имя диска). Все остальные — вложенные. Запись из всех каталогов и имени файла называется <strong>путь поиска файла</strong>.</p>
<h6 class="text-primary mt-3 mb-2">Уровни программного обеспечения</h6>
<p class="mb-3">Программное обеспечение компьютера делится на <strong>четыре уровня</strong> (пирамида, каждый следующий взаимодействует с предыдущими):<ul class='mb-0 mt-2'><li><strong>Базовый</strong> — BIOS, начальная загрузка. Записан в ПЗУ.</li><li><strong>Системный</strong> — драйверы устройств и средства интерфейса. Образует ядро операционной системы.</li><li><strong>Служебный</strong> — утилиты для проверки и настройки.</li><li><strong>Прикладной</strong> — программы для решения задач пользователя.</li></ul></p>
<h6 class="text-primary mt-3 mb-2">Прикладные программы</h6>
<p class="mb-3">Прикладные программы делятся по виду информации: <em>текстовые редакторы</em> (Word, Notepad — .txt, .docx), <em>графические редакторы</em> (Paint, Photoshop — .jpg, .png), <em>СУБД</em> (Access, Oracle — .accdb, .db), <em>электронные таблицы</em> (Excel — .xls, .xlsx), <em>CAD-системы</em> (AutoCAD, КОМПАС — .dwg, .cdw), <em>системы видеомонтажа</em> (.avi, .mp4), <em>браузеры</em> (.html, .htm).</p>

    </div>
</div>


<!-- yesno-test -->
<div class="card mb-4">
    <div class="card-header bg-warning-subtle fw-bold fs-5">
        <span class="badge bg-warning text-dark me-2">Понимание</span> Тест: верно ли утверждение?
    </div>
    <div class="card-body">
        <p class="text-muted mb-3">Прочитай каждое утверждение и нажми «да», если оно верно, «нет» — если неверно.</p>
        
            <div class="yesno-question mb-3 p-3 border rounded bg-light" data-answer="да" data-explanation="именно так звучит определение в учебнике.">
                <p class="fw-500 mb-2">1. Файл — это именованная область внешней памяти.</p>
                <div class="btn-group btn-group-lg mb-2">
                    <input type="radio" class="btn-check" name="l7_yn1" value="да" id="l7_yn1_y">
                    <label class="btn btn-outline-success px-4" for="l7_yn1_y">да</label>
                    <input type="radio" class="btn-check" name="l7_yn1" value="нет" id="l7_yn1_n">
                    <label class="btn btn-outline-danger px-4" for="l7_yn1_n">нет</label>
                </div>
                <div class="feedback mt-2 fw-bold d-none"></div>
            </div>
            <div class="yesno-question mb-3 p-3 border rounded bg-light" data-answer="нет" data-explanation="полное имя файла состоит из двух частей: имени и расширения.">
                <p class="fw-500 mb-2">2. Полное имя файла состоит только из имени, без расширения.</p>
                <div class="btn-group btn-group-lg mb-2">
                    <input type="radio" class="btn-check" name="l7_yn2" value="да" id="l7_yn2_y">
                    <label class="btn btn-outline-success px-4" for="l7_yn2_y">да</label>
                    <input type="radio" class="btn-check" name="l7_yn2" value="нет" id="l7_yn2_n">
                    <label class="btn btn-outline-danger px-4" for="l7_yn2_n">нет</label>
                </div>
                <div class="feedback mt-2 fw-bold d-none"></div>
            </div>
            <div class="yesno-question mb-3 p-3 border rounded bg-light" data-answer="нет" data-explanation="корневой каталог только один — это имя диска. Остальные каталоги — вложенные.">
                <p class="fw-500 mb-2">3. На внешнем носителе может быть несколько корневых каталогов.</p>
                <div class="btn-group btn-group-lg mb-2">
                    <input type="radio" class="btn-check" name="l7_yn3" value="да" id="l7_yn3_y">
                    <label class="btn btn-outline-success px-4" for="l7_yn3_y">да</label>
                    <input type="radio" class="btn-check" name="l7_yn3" value="нет" id="l7_yn3_n">
                    <label class="btn btn-outline-danger px-4" for="l7_yn3_n">нет</label>
                </div>
                <div class="feedback mt-2 fw-bold d-none"></div>
            </div>
            <div class="yesno-question mb-3 p-3 border rounded bg-light" data-answer="нет" data-explanation="драйверы относятся к системному уровню. На базовом уровне — BIOS.">
                <p class="fw-500 mb-2">4. Драйверы относятся к программному обеспечению базового уровня.</p>
                <div class="btn-group btn-group-lg mb-2">
                    <input type="radio" class="btn-check" name="l7_yn4" value="да" id="l7_yn4_y">
                    <label class="btn btn-outline-success px-4" for="l7_yn4_y">да</label>
                    <input type="radio" class="btn-check" name="l7_yn4" value="нет" id="l7_yn4_n">
                    <label class="btn btn-outline-danger px-4" for="l7_yn4_n">нет</label>
                </div>
                <div class="feedback mt-2 fw-bold d-none"></div>
            </div>
            <div class="yesno-question mb-3 p-3 border rounded bg-light" data-answer="нет" data-explanation="утилиты — это служебный уровень. Они проверяют и настраивают компьютер.">
                <p class="fw-500 mb-2">5. Утилиты — это программы прикладного уровня.</p>
                <div class="btn-group btn-group-lg mb-2">
                    <input type="radio" class="btn-check" name="l7_yn5" value="да" id="l7_yn5_y">
                    <label class="btn btn-outline-success px-4" for="l7_yn5_y">да</label>
                    <input type="radio" class="btn-check" name="l7_yn5" value="нет" id="l7_yn5_n">
                    <label class="btn btn-outline-danger px-4" for="l7_yn5_n">нет</label>
                </div>
                <div class="feedback mt-2 fw-bold d-none"></div>
            </div>
            <div class="yesno-question mb-3 p-3 border rounded bg-light" data-answer="да" data-explanation="BIOS — это базовая система ввода-вывода, она записана в ПЗУ и отвечает за начальную загрузку компьютера.">
                <p class="fw-500 mb-2">6. BIOS относится к базовому уровню программного обеспечения.</p>
                <div class="btn-group btn-group-lg mb-2">
                    <input type="radio" class="btn-check" name="l7_yn6" value="да" id="l7_yn6_y">
                    <label class="btn btn-outline-success px-4" for="l7_yn6_y">да</label>
                    <input type="radio" class="btn-check" name="l7_yn6" value="нет" id="l7_yn6_n">
                    <label class="btn btn-outline-danger px-4" for="l7_yn6_n">нет</label>
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
        
            <div class="question-block mb-4 p-3 border rounded bg-light" data-correct="b" data-explanation="файл — это именно именованная область внешней памяти, где компьютер хранит данные.">
                <p class="fw-bold mb-2">1. Что такое файл?</p>
                
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l7_mcq1" id="l7_mcq1_a" value="a">
                    <label class="form-check-label ms-2" for="l7_mcq1_a">а) программа для запуска</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l7_mcq1" id="l7_mcq1_b" value="b">
                    <label class="form-check-label ms-2" for="l7_mcq1_b">б) именованная область внешней памяти</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l7_mcq1" id="l7_mcq1_c" value="c">
                    <label class="form-check-label ms-2" for="l7_mcq1_c">в) каталог</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l7_mcq1" id="l7_mcq1_d" value="d">
                    <label class="form-check-label ms-2" for="l7_mcq1_d">г) операционная система</label>
                </div>
                <div class="feedback mt-2 fw-bold d-none"></div>
            </div>
            <div class="question-block mb-4 p-3 border rounded bg-light" data-correct="b" data-explanation="имя — это информация для пользователя, а расширение — для компьютера: оно подсказывает, какой программой открыть файл.">
                <p class="fw-bold mb-2">2. Какая часть имени файла нужна компьютеру (для выбора программы)?</p>
                
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l7_mcq2" id="l7_mcq2_a" value="a">
                    <label class="form-check-label ms-2" for="l7_mcq2_a">а) только имя</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l7_mcq2" id="l7_mcq2_b" value="b">
                    <label class="form-check-label ms-2" for="l7_mcq2_b">б) расширение</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l7_mcq2" id="l7_mcq2_c" value="c">
                    <label class="form-check-label ms-2" for="l7_mcq2_c">в) полный путь к файлу</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l7_mcq2" id="l7_mcq2_d" value="d">
                    <label class="form-check-label ms-2" for="l7_mcq2_d">г) размер файла</label>
                </div>
                <div class="feedback mt-2 fw-bold d-none"></div>
            </div>
            <div class="question-block mb-4 p-3 border rounded bg-light" data-correct="c" data-explanation="четыре уровня: базовый, системный, служебный, прикладной.">
                <p class="fw-bold mb-2">3. На сколько уровней делится программное обеспечение компьютера?</p>
                
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l7_mcq3" id="l7_mcq3_a" value="a">
                    <label class="form-check-label ms-2" for="l7_mcq3_a">а) 2</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l7_mcq3" id="l7_mcq3_b" value="b">
                    <label class="form-check-label ms-2" for="l7_mcq3_b">б) 3</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l7_mcq3" id="l7_mcq3_c" value="c">
                    <label class="form-check-label ms-2" for="l7_mcq3_c">в) 4</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l7_mcq3" id="l7_mcq3_d" value="d">
                    <label class="form-check-label ms-2" for="l7_mcq3_d">г) 5</label>
                </div>
                <div class="feedback mt-2 fw-bold d-none"></div>
            </div>
            <div class="question-block mb-4 p-3 border rounded bg-light" data-correct="d" data-explanation="пирамида ПО снизу вверх: базовый → системный → служебный → прикладной. Базовый — это BIOS.">
                <p class="fw-bold mb-2">4. Какой уровень программного обеспечения самый низкий?</p>
                
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l7_mcq4" id="l7_mcq4_a" value="a">
                    <label class="form-check-label ms-2" for="l7_mcq4_a">а) системный</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l7_mcq4" id="l7_mcq4_b" value="b">
                    <label class="form-check-label ms-2" for="l7_mcq4_b">б) служебный</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l7_mcq4" id="l7_mcq4_c" value="c">
                    <label class="form-check-label ms-2" for="l7_mcq4_c">в) прикладной</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l7_mcq4" id="l7_mcq4_d" value="d">
                    <label class="form-check-label ms-2" for="l7_mcq4_d">г) базовый</label>
                </div>
                <div class="feedback mt-2 fw-bold d-none"></div>
            </div>
            <div class="question-block mb-4 p-3 border rounded bg-light" data-correct="b" data-explanation="драйверы — это системные программы, обеспечивающие взаимодействие с устройствами.">
                <p class="fw-bold mb-2">5. К какому уровню программного обеспечения относятся драйверы устройств?</p>
                
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l7_mcq5" id="l7_mcq5_a" value="a">
                    <label class="form-check-label ms-2" for="l7_mcq5_a">а) базовому</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l7_mcq5" id="l7_mcq5_b" value="b">
                    <label class="form-check-label ms-2" for="l7_mcq5_b">б) системному</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l7_mcq5" id="l7_mcq5_c" value="c">
                    <label class="form-check-label ms-2" for="l7_mcq5_c">в) служебному</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="l7_mcq5" id="l7_mcq5_d" value="d">
                    <label class="form-check-label ms-2" for="l7_mcq5_d">г) прикладному</label>
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
                    <span class="fs-5">1. Полное имя файла имеет две части — имя и <select class="form-select d-inline-block w-auto mx-1" data-no-instant data-correct="расширение"><option value="">— выбери —</option><option value="размер">размер</option><option value="расширение">расширение</option><option value="путь">путь</option><option value="тип">тип</option></select>.</span>
                    <div class="feedback mt-2 fw-bold d-none"></div>
                </li>
                <li class="list-group-item p-3 mb-2 bg-light border rounded">
                    <span class="fs-5">2. На внешнем носителе всегда есть только один <select class="form-select d-inline-block w-auto mx-1" data-no-instant data-correct="корневой"><option value="">— выбери —</option><option value="вложенный">вложенный</option><option value="системный">системный</option><option value="корневой">корневой</option><option value="временный">временный</option></select> каталог.</span>
                    <div class="feedback mt-2 fw-bold d-none"></div>
                </li>
                <li class="list-group-item p-3 mb-2 bg-light border rounded">
                    <span class="fs-5">3. Программы для проверки и настройки компьютера называются <select class="form-select d-inline-block w-auto mx-1" data-no-instant data-correct="утилиты"><option value="">— выбери —</option><option value="драйверы">драйверы</option><option value="утилиты">утилиты</option><option value="браузеры">браузеры</option><option value="редакторы">редакторы</option></select>.</span>
                    <div class="feedback mt-2 fw-bold d-none"></div>
                </li>
                <li class="list-group-item p-3 mb-2 bg-light border rounded">
                    <span class="fs-5">4. Базовое программное обеспечение записано в микросхеме <select class="form-select d-inline-block w-auto mx-1" data-no-instant data-correct="ПЗУ"><option value="">— выбери —</option><option value="оперативной памяти">оперативной памяти</option><option value="процессора">процессора</option><option value="ПЗУ">ПЗУ</option><option value="видеокарты">видеокарты</option></select>.</span>
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
                    <p class="fw-500 mb-2 fs-5">1. Что такое файл?</p>
                    <textarea class="form-control mb-2" rows="3" placeholder="Сформулируй свой ответ…"></textarea>
                    <button type="button" class="btn btn-sm btn-outline-secondary" onclick="toggleAnswer(this)">Показать эталон</button>
                    <div class="answer-sample d-none mt-2 p-2 bg-white border-start border-success border-3 rounded">
                        <strong class="text-success">Эталон:</strong> Файл — это именованная область внешней памяти.
                    </div>
                </li>
                <li class="list-group-item p-3 mb-3 bg-light border rounded">
                    <p class="fw-500 mb-2 fs-5">2. Какие основные операции с файлами?</p>
                    <textarea class="form-control mb-2" rows="3" placeholder="Сформулируй свой ответ…"></textarea>
                    <button type="button" class="btn btn-sm btn-outline-secondary" onclick="toggleAnswer(this)">Показать эталон</button>
                    <div class="answer-sample d-none mt-2 p-2 bg-white border-start border-success border-3 rounded">
                        <strong class="text-success">Эталон:</strong> Создание, переименование, копирование, перемещение, удаление файлов.
                    </div>
                </li>
                <li class="list-group-item p-3 mb-3 bg-light border rounded">
                    <p class="fw-500 mb-2 fs-5">3. На какие уровни делится программное обеспечение компьютера?</p>
                    <textarea class="form-control mb-2" rows="3" placeholder="Сформулируй свой ответ…"></textarea>
                    <button type="button" class="btn btn-sm btn-outline-secondary" onclick="toggleAnswer(this)">Показать эталон</button>
                    <div class="answer-sample d-none mt-2 p-2 bg-white border-start border-success border-3 rounded">
                        <strong class="text-success">Эталон:</strong> Базовый, системный, служебный, прикладной.
                    </div>
                </li>
                <li class="list-group-item p-3 mb-3 bg-light border rounded">
                    <p class="fw-500 mb-2 fs-5">4. Что такое утилиты и какая их задача?</p>
                    <textarea class="form-control mb-2" rows="3" placeholder="Сформулируй свой ответ…"></textarea>
                    <button type="button" class="btn btn-sm btn-outline-secondary" onclick="toggleAnswer(this)">Показать эталон</button>
                    <div class="answer-sample d-none mt-2 p-2 bg-white border-start border-success border-3 rounded">
                        <strong class="text-success">Эталон:</strong> Утилиты — это программы служебного уровня. Их задача — автоматизация работ по проверке и настройке компьютерной системы, расширение и улучшение функций системных программ.
                    </div>
                </li>
                <li class="list-group-item p-3 mb-3 bg-light border rounded">
                    <p class="fw-500 mb-2 fs-5">5. Что такое пакет прикладных программ?</p>
                    <textarea class="form-control mb-2" rows="3" placeholder="Сформулируй свой ответ…"></textarea>
                    <button type="button" class="btn btn-sm btn-outline-secondary" onclick="toggleAnswer(this)">Показать эталон</button>
                    <div class="answer-sample d-none mt-2 p-2 bg-white border-start border-success border-3 rounded">
                        <strong class="text-success">Эталон:</strong> Пакет прикладных программ — это комплекс программ для решения задач пользователя.
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
            <button type="button" class="btn btn-success btn-lg px-5" onclick="markLessonCompleted(7); this.outerHTML='<div class=\'alert alert-success mb-0\'><h5 class=\'mb-0\'>✓ Занятие отмечено как пройденное!</h5></div>';">
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
<?php
// lessons.php — все 24 занятия, контент динамически грузится из data/lessonN.php
// Использует общий header.php / footer.php (без дублирования разметки).

$lesson = isset($_GET['n']) ? (int)$_GET['n'] : 1;
if ($lesson < 1)  $lesson = 1;
if ($lesson > 24) $lesson = 24;

$file = __DIR__ . "/data/lesson{$lesson}.php";

// Заголовок страницы — для <title> и Open Graph
$pageTitle = "Занятие {$lesson} — ПГУ • Информатика";

// Сигнал header.php подгрузить CSS Pascal-тренажёра для уроков 19–24
$loadPascalAssets = ($lesson >= 19 && $lesson <= 24);

require __DIR__ . '/header.php';
?>

<!-- Инфо о занятии + прогресс-бар -->
<div class="bg-white border-top border-bottom">
    <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 py-3">
        <div class="fw-semibold">
            Занятие <?= $lesson ?> из 24
        </div>
        <div class="small text-muted">
            Прогресс сохраняется в этом браузере
        </div>
    </div>

    <div class="progress mb-3" style="height: 10px;" role="progressbar"
         aria-label="Общий прогресс по курсу" aria-valuemin="0" aria-valuemax="100">
        <div id="globalProgress" class="progress-bar bg-success" style="width: 0%;">0%</div>
    </div>
</div>

<div class="my-4">

    <!-- Навигация по 24 занятиям. Не btn-group (он конфликтует с flex-wrap),
         а адаптивная сетка из квадратных кнопок. -->
    <nav class="lesson-grid mb-4" aria-label="Навигация по занятиям">
        <?php for ($i = 1; $i <= 24; $i++): ?>
            <a href="/lessons.php?n=<?= $i ?>"
               class="lesson-grid__btn btn <?= $i == $lesson ? 'btn-primary active' : 'btn-outline-primary' ?>"
               <?= $i == $lesson ? 'aria-current="page"' : '' ?>
               aria-label="Занятие <?= $i ?>">
                <?= $i ?>
            </a>
        <?php endfor; ?>
    </nav>

    <!-- Контент занятия -->
    <div id="lesson-content" class="mb-5">
        <?php
        if (file_exists($file)) {
            include $file;
        } else {
            echo '<div class="alert alert-warning">Материал для занятия ' . $lesson . ' пока не добавлен.</div>';
        }
        ?>
    </div>

    <!-- Кнопки вперёд / назад -->
    <div class="d-flex justify-content-between align-items-center mt-4 mb-5 gap-2 flex-wrap">
        <?php if ($lesson > 1): ?>
            <a href="/lessons.php?n=<?= $lesson - 1 ?>" class="btn btn-outline-primary">
                ← Предыдущее занятие
            </a>
        <?php else: ?>
            <span></span>
        <?php endif; ?>

        <?php if ($lesson < 24): ?>
            <a href="/lessons.php?n=<?= $lesson + 1 ?>" class="btn btn-primary">
                Следующее занятие →
            </a>
        <?php else: ?>
            <a href="/index.php" class="btn btn-success">
                Вернуться на главную
            </a>
        <?php endif; ?>
    </div>

</div>

<?php if ($loadPascalAssets): ?>
<!-- Pascal-тренажёры: подключаем перед footer, чтобы инициализация
     произошла после загрузки контента урока. -->
<script src="/assets/js/pascal-trainer.js" defer></script>
<?php endif; ?>

<script>
    // Сохраняем последнее открытое занятие (используется на главной для
    // кнопки «Продолжить с занятия N»).
    try {
        localStorage.setItem('lastLesson', <?= $lesson ?>);
    } catch (e) { /* private mode — игнорируем */ }
</script>

<?php require __DIR__ . '/footer.php'; ?>

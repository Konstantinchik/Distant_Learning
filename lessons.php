<?php
// lessons.php — все 24 занятия + интерактив (локальные ресурсы, единый header/footer)

$lesson = isset($_GET['n']) ? (int)$_GET['n'] : 1;
if ($lesson < 1) $lesson = 1;
if ($lesson > 24) $lesson = 24;

// если у тебя контент хранится тут:
$file = __DIR__ . "/data/lesson{$lesson}.php";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Занятие <?= $lesson ?> — ПГУ • Информатика</title>

    <!-- Favicons (ВАЖНО: абсолютные пути, чтобы работало на всех страницах) -->
    <link rel="icon" type="image/png" href="/assets/images/icons/favicon.png">
    <link rel="shortcut icon" type="image/png" href="/assets/images/icons/favicon.png">
    <link rel="icon" sizes="128x128" type="image/png" href="/assets/images/icons/favicon128.png">
    <link rel="apple-touch-icon" href="/assets/images/icons/favicon128.png">

    <!-- Bootstrap local -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles -->
    <link href="/assets/css/style.css" rel="stylesheet">
</head>

<body class="bg-light d-flex flex-column min-vh-100">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/index.php">ПГУ • Информатика</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/lessons.php">Курс</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/extra-lessons.php">Дополнительные занятия</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main class="flex-grow-1">

    <!-- Инфо о занятии + прогресс-бар -->
    <div class="bg-white border-top border-bottom">
        <div class="container py-3">
            <div class="d-flex flex-wrap justify-content-between align-items-center gap-2">
                <div class="fw-semibold">
                    Занятие <?= $lesson ?> из 24
                </div>
                <div class="small text-muted">
                    Навигация и прогресс сохраняются в браузере
                </div>
            </div>

            <div class="progress mt-2" style="height: 10px;">
                <div id="globalProgress" class="progress-bar" role="progressbar" style="width: 0%;">0%</div>
            </div>
        </div>
    </div>

    <div class="container my-4">

        <!-- Навигация по занятиям -->
        <div class="btn-group d-flex flex-wrap mb-4" role="group" aria-label="Навигация по занятиям">
            <?php for ($i = 1; $i <= 24; $i++): ?>
                <a href="/lessons.php?n=<?= $i ?>"
                   class="btn <?= $i == $lesson ? 'btn-primary' : 'btn-outline-primary' ?> btn-sm m-1">
                    <?= $i ?>
                </a>
            <?php endfor; ?>
        </div>

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

        <!-- Кнопки вперёд/назад -->
        <div class="d-flex justify-content-between mt-4 mb-5">
            <?php if ($lesson > 1): ?>
                <a href="/lessons.php?n=<?= $lesson - 1 ?>" class="btn btn-outline-primary">← Предыдущее занятие</a>
            <?php else: ?>
                <div></div>
            <?php endif; ?>

            <?php if ($lesson < 24): ?>
                <a href="/lessons.php?n=<?= $lesson + 1 ?>" class="btn btn-primary">Следующее занятие →</a>
            <?php else: ?>
                <a href="/index.php" class="btn btn-success">Вернуться на главную</a>
            <?php endif; ?>
        </div>

    </div>
</main>

<?php include __DIR__ . '/footer.php'; ?>

<script>
    // Сохраняем последнее просмотренное занятие
    localStorage.setItem('lastLesson', <?= $lesson ?>);
</script>

<?php
// header.php — общая шапка сайта.
// $pageTitle — необязательная переменная: можно задать перед include
// для подстановки кастомного <title>. Если не задана, используется дефолт.

if (!isset($pageTitle) || $pageTitle === '') {
    $pageTitle = 'ПГУ • Информатика';
}

// Определяем текущую страницу для подсветки активной вкладки в меню.
// SCRIPT_NAME даёт например "/lessons.php" или "/index.php".
$__currentScript = basename($_SERVER['SCRIPT_NAME'] ?? '');

// Хелпер: возвращает 'active' если страница совпадает.
if (!function_exists('navActive')) {
    function navActive(string $page, string $current): string {
        return $page === $current ? 'active' : '';
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($pageTitle) ?></title>

    <!-- SEO + соцсети -->
    <meta name="description" content="Подготовительный курс по информатике для иностранных студентов ПГУ: 24 занятия, словари, интерактивные задания, тренажёры по Pascal.">
    <meta name="theme-color" content="#0d6efd">

    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= htmlspecialchars($pageTitle) ?>">
    <meta property="og:description" content="Подготовительный курс по информатике для иностранных студентов. 24 занятия с интерактивными заданиями.">
    <meta property="og:image" content="/assets/images/icons/favicon128.png">
    <meta property="og:locale" content="ru_RU">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="<?= htmlspecialchars($pageTitle) ?>">
    <meta name="twitter:description" content="Подготовительный курс по информатике для иностранных студентов.">

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="/assets/images/icons/favicon.png">
    <link rel="icon" type="image/png" sizes="128x128" href="/assets/images/icons/favicon128.png">
    <link rel="apple-touch-icon" href="/assets/images/icons/favicon128.png">
    <link rel="shortcut icon" type="image/png" href="/assets/images/icons/favicon.png">

    <!-- Bootstrap (local) -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles -->
    <link href="/assets/css/style.css" rel="stylesheet">

    <?php
    // Если страница урока 19–24 — подключаем стили Pascal-тренажёра.
    // Это делается через переменную $loadPascalAssets, которую урочная страница
    // может выставить ДО include 'header.php'.
    if (!empty($loadPascalAssets)):
    ?>
    <link href="/assets/css/pascal-trainer.css" rel="stylesheet">
    <?php endif; ?>
</head>

<body class="bg-light d-flex flex-column min-vh-100">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/index.php">ПГУ • Информатика</a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navMenu"
                aria-controls="navMenu"
                aria-expanded="false"
                aria-label="Навигация">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link <?= navActive('lessons.php', $__currentScript) ?>"
                       href="/lessons.php"
                       <?= $__currentScript === 'lessons.php' ? 'aria-current="page"' : '' ?>>
                        Курс
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= navActive('extra-lessons.php', $__currentScript) ?>"
                       href="/extra-lessons.php"
                       <?= $__currentScript === 'extra-lessons.php' ? 'aria-current="page"' : '' ?>>
                        Дополнительные занятия
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main class="flex-grow-1">
    <div class="container">

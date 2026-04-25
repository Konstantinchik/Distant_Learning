<?php
// header.php
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ПГУ • Информатика</title>

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="/assets/images/icons/favicon.png">
    <link rel="icon" type="image/png" sizes="128x128" href="/assets/images/icons/favicon128.png">
    <link rel="apple-touch-icon" href="/assets/images/icons/favicon128.png">
    <link rel="shortcut icon" type="image/png" href="/assets/images/icons/favicon.png">

    <!-- Bootstrap (local) -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles -->
    <link href="/assets/css/style.css" rel="stylesheet">
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
    <div class="container">

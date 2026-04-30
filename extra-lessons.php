<?php
// extra-lessons.php

// Описание всех доп. занятий
$extraLessons = [
    'autocad' => [
        'title'       => 'Основы работы в AutoCAD',
        'subtitle'    => 'Построение и редактирование простых чертежей, знакомство с интерфейсом и базовыми командами.',
        'duration'    => '90 минут',
        'format'      => 'дистанционный урок',
        'file'        => __DIR__ . '/data/extra-lessons/lesson-autocad.php',
        'badge'       => 'Новый',
    ],
    // сюда потом спокойно добавляешь ещё уроки
    // 'python' => [ ... ],
        // НОВЫЙ тест по Word/Excel
    'office-test' => [
        'title'       => 'Тест «Текстовый редактор и табличный процессор»',
        'subtitle'    => 'Контроль знаний по работе в Word и Excel: текст, таблицы, формулы, форматирование.',
        'duration'    => '20–30 минут',
        'format'      => 'онлайн-тест',
        'file'        => __DIR__ . '/data/extra-lessons/lesson-office-test.php',
        'badge'       => '',
    ],
];

$id = $_GET['id'] ?? null;

// Заголовок страницы – либо список, либо конкретный урок
if ($id && isset($extraLessons[$id])) {
    $pageTitle = $extraLessons[$id]['title'] . ' — дополнительное занятие';
} else {
    $pageTitle = 'Дополнительные занятия';
}

require __DIR__ . '/header.php';
?>

<div class="py-4">

    <?php if (!$id): ?>
        <!-- Режим СПИСОК всех доп. занятий -->
        <h1 class="mb-4 text-center text-primary">Дополнительные занятия</h1>

        <div class="row g-4 justify-content-center">
            <?php foreach ($extraLessons as $slug => $lesson): ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm border-0">
                        <?php if (!empty($lesson['badge'])): ?>
                            <div class="position-absolute top-0 start-0 m-3 badge bg-success">
                                <?= htmlspecialchars($lesson['badge']) ?>
                            </div>
                        <?php endif; ?>

                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">
                                <?= htmlspecialchars($lesson['title']) ?>
                            </h5>

                            <?php if (!empty($lesson['subtitle'])): ?>
                                <p class="card-text text-muted mb-3">
                                    <?= htmlspecialchars($lesson['subtitle']) ?>
                                </p>
                            <?php endif; ?>

                            <ul class="list-unstyled small text-muted mb-3">
                                <?php if (!empty($lesson['duration'])): ?>
                                    <li>⏱ Продолжительность: <?= htmlspecialchars($lesson['duration']) ?></li>
                                <?php endif; ?>
                                <?php if (!empty($lesson['format'])): ?>
                                    <li>💻 Формат: <?= htmlspecialchars($lesson['format']) ?></li>
                                <?php endif; ?>
                            </ul>

                            <div class="mt-auto">
                                <a href="/extra-lessons.php?id=<?= urlencode($slug) ?>"
                                   class="btn btn-primary w-100">
                                    Перейти к уроку
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    <?php else: ?>
        <!-- Режим КОНКРЕТНОГО урока -->
        <?php if (!isset($extraLessons[$id])): ?>
            <div class="alert alert-danger text-center">
                Урок не найден.
            </div>
        <?php else: 
            $lesson = $extraLessons[$id];
            if (!file_exists($lesson['file'])): ?>
                <div class="alert alert-danger text-center">
                    Файл урока (<code><?= htmlspecialchars(basename($lesson['file'])) ?></code>) не найден.
                </div>
            <?php else: ?>

                <nav aria-label="breadcrumb" class="mb-4">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Главная</a></li>
                        <li class="breadcrumb-item"><a href="/extra-lessons.php">Дополнительные занятия</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <?= htmlspecialchars($lesson['title']) ?>
                        </li>
                    </ol>
                </nav>

                <h1 class="mb-3">
                    <?= htmlspecialchars($lesson['title']) ?>
                </h1>

                <?php if (!empty($lesson['subtitle'])): ?>
                    <p class="lead text-muted">
                        <?= htmlspecialchars($lesson['subtitle']) ?>
                    </p>
                <?php endif; ?>

                <div class="mb-4 small text-muted">
                    <?php if (!empty($lesson['duration'])): ?>
                        ⏱ Продолжительность: <?= htmlspecialchars($lesson['duration']) ?><br>
                    <?php endif; ?>
                    <?php if (!empty($lesson['format'])): ?>
                        💻 Формат: <?= htmlspecialchars($lesson['format']) ?>
                    <?php endif; ?>
                </div>

                <hr class="mb-4">

                <?php
                // Здесь уже твой полный урок
                include $lesson['file'];
                ?>

                <div class="mt-4">
                    <a href="/extra-lessons.php" class="btn btn-outline-secondary">
                        ← Назад к дополнительным занятиям
                    </a>
                </div>

            <?php endif; ?>
        <?php endif; ?>
    <?php endif; ?>

</div>

<?php require __DIR__ . '/footer.php'; ?>

<?php
$pageTitle = 'ПГУ • Информатика — подготовительный курс';
require __DIR__ . '/header.php';
?>

<div class="text-center py-4">

    <h1 class="display-5 fw-bold mb-3 text-primary">ИНФОРМАТИКА</h1>

    <p class="lead mb-3">Подготовительный курс для иностранных студентов</p>

    <p class="text-muted small mb-1">
        На основе рабочей тетради:
        Е.&nbsp;В.&nbsp;Степаненко, И.&nbsp;Т.&nbsp;Степаненко, Е.&nbsp;А.&nbsp;Нивина
    </p>
    <p class="text-muted small">
        Тамбов. Издательство ФГБОУ ВО «ТГТУ», 2018
    </p>

    <hr class="my-4 my-md-5">

    <!-- Главная CTA-кнопка: одна, заметная. -->
    <div class="mb-3">
        <a href="/lessons.php" class="btn btn-primary btn-lg px-5">
            Начать курс — 24 занятия
        </a>
    </div>

    <!-- Кнопка «Продолжить с занятия N» — появится, если есть сохранённое занятие. -->
    <div id="continueBlock" class="mb-4 d-none">
        <a id="continueLink" href="/lessons.php" class="btn btn-success btn-lg px-5">
            Продолжить с занятия <span id="continueNum"></span>
        </a>
    </div>

    <!-- Вторичные действия: меньше, нейтральнее. -->
    <div class="d-flex flex-column flex-sm-row justify-content-center gap-2 gap-sm-3 mt-3">
        <a href="/extra-lessons.php" class="btn btn-outline-primary">
            Дополнительные занятия
        </a>
        <a href="/assets/books/workbook.pdf" target="_blank" rel="noopener"
           class="btn btn-outline-secondary">
            Открыть учебник (PDF)
        </a>
    </div>

</div>

<script>
// Если у пользователя уже есть сохранённое занятие — показать кнопку «Продолжить».
(function() {
    try {
        const last = parseInt(localStorage.getItem('lastLesson'), 10);
        if (last >= 1 && last <= 24) {
            const block = document.getElementById('continueBlock');
            const link  = document.getElementById('continueLink');
            const num   = document.getElementById('continueNum');
            if (block && link && num) {
                link.href = '/lessons.php?n=' + last;
                num.textContent = last;
                block.classList.remove('d-none');
            }
        }
    } catch (e) { /* private mode — просто не показываем */ }
})();
</script>

<?php require __DIR__ . '/footer.php'; ?>

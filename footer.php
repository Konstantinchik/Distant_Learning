<?php
// footer.php
?>
        </main>

        <footer class="mt-auto border-top bg-white">
            <div class="container py-3 text-center small text-muted">
                <div>Подготовительные курсы по информатике • ПГУ</div>
                <div>&copy; <span id="year"></span> Все права защищены.</div>
            </div>
        </footer>

        <!-- Локальный Bootstrap JS -->
        <script src="/assets/js/bootstrap.bundle.min.js"></script>

        <!-- Главный JS сайта (в нём уже есть озвучка .speak-btn и прочая интерактивность) -->
        <script src="/assets/js/main.js"></script>

        <!-- Только год (без дублирования озвучки) -->
        <script>
        document.addEventListener('DOMContentLoaded', function () {
            const y = document.getElementById('year');
            if (y) y.textContent = new Date().getFullYear();
        });
        </script>

    </body>
</html>

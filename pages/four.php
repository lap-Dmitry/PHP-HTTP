<?php
session_start();

echo "<h2>Страница \"three.php\" была открыта {$_SESSION['count']} раз</h2>";
echo "<p><a href='../index.php'>Вернуться на главную страницу</a></p>";
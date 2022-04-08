<?php
session_start();

$count = $_SESSION['count'] = isset($_SESSION['count']) ? ++$_SESSION['count'] : 1;

echo "<h2>Данная страница была открыта {$_SESSION['count']} раз</h2>";
echo "<p><a href='../index.php'>Вернуться на главную страницу</a></p>";
if ($count % 3 === 0) {
    header('Location: four.php');
}
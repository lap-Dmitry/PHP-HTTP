<?php
header('Content-Type: text/txt');
header('Content-Disposition: attachment; filename="text.txt"');

$fileName = '../files/Open.text';
$file = fopen($fileName, 'wb+');
$text = $_GET['text'];
fwrite($file, $text);
readfile($fileName);
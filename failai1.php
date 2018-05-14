<?php

$file = 'failai.php';

$content = file_get_contents($file);

print_r($content);
$string = 'Labas as krabas';
file_put_contents('save.txt', $string);
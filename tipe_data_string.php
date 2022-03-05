<?php

echo "Name: ";
echo "Omi Gusty\n";

echo 'Name: ';
echo 'Omi Gusty' . PHP_EOL;


// Heredoc
echo <<<TEXT
ini adalah heredeco kita bisa
membuat sebuah pargraph, secara
otomatis enter akan ditambahkan

TEXT;

// Nowdoc
echo <<<'TEXT'
ini adalah heredeco kita bisa
membuat sebuah pargraph, secara
otomatis enter akan ditambahkan

TEXT;

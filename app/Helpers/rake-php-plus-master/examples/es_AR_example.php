<?php

// Para ejecutar este ejemplo desde la línea de comando.:
// php ./examples/es_AR_example.php "Algun texto de ejemplo"

require 'vendor/autoload.php';

use DonatelloZa\RakePlus\RakePlus;

if ($argc < 2) {
    echo "Especifique el texto que desea analizar, por ejemplo:\n";
    echo "php ./examples/es_AR_example.php \"Algún texto de ejemplo del que me gustaría extraer palabras clave.\"\n";
    exit(1);
}

$keywords = RakePlus::create($argv[1], 'es_AR')->keywords();
echo "Resultados de palabras clave: {$argv[1]}\n";
print_r($keywords);

$phrases = RakePlus::create($argv[1], 'es_AR')->get();
echo "Resultados de la frase: {$argv[1]}\n";
print_r($phrases);

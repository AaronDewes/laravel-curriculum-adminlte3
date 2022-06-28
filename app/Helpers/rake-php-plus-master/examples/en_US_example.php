<?php

// To run this example from the command line:
// php ./examples/en_US_example.php "Some example text"

require 'vendor/autoload.php';

use DonatelloZa\RakePlus\RakePlus;

if ($argc < 2) {
    echo "Please specify the text you would like to be parsed, e.g.:\n";
    echo "php ./examples/en_US_example.php \"Some example text from which I would like to extract keywords\"\n";
    exit(1);
}

$keywords = RakePlus::create($argv[1])->keywords();
echo "The keywords for {$argv[1]} is:\n";
print_r($keywords);

$phrases = RakePlus::create($argv[1])->get();
echo "The phrases for {$argv[1]} is:\n";
print_r($phrases);

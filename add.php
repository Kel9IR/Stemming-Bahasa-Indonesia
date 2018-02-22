<?php

// include composer autoloader
require_once __DIR__ . '/vendor/autoload.php';

// create stemmer
// cukup dijalankan sekali saja, biasanya didaftarkan di service container

$stemmerFactory = new \Sastrawi\Stemmer\StemmerFactory();

$dictionary = $stemmerFactory->createDefaultDictionary();
//$dictionary->add('');

$stemmer = new \Sastrawi\Stemmer\Stemmer($dictionary);

var_dump($stemmer->stem('mencetak')); //internet

?>
<?php

// Create simple string
$hello = 'Hello';
$name = 'Juan';

// String concatenation
echo $hello . ' ' . $name;

// String functions
$string = "    Hello World      ";

strlen($string); // Cantidad de caracteres = 21 
trim($string); // Remueve los espacios en blanco a la izq y der
ltrim($string); // Remueve los espacios en blanco a la izq
rtrim($string); // Remueve los espacios en blanco a la der
str_word_count($string); // Cuenta la cantidad de palabras que tiene el string = 2
strrev($string); // Reversa el string = dlroW olleH
strtoupper($string); // Uppercase el string = HELLO WORLD
strtolower($string); // Lowercase el string = hello world
ucfirst('hello'); // Pone mayuscula la primer letra = Hello
lcfirst('HELLO'); // Pone en minuscula la primer letra = hELLO
ucwords('hello world'); // Pone mayuscula la primer letra de cada palabra = Hello World
strpos($string, 'world');  //  (Sensible a mayusculas)  devuelve la posicion donde empieza la palabraworld = no devuelve nada
stripos($string, 'world'); // Devuelve la posicion donde empieza la palabra world = 10
substr($string, 8); // Imprime el string desde la posicion dada = o World
str_replace('World', 'PHP', $string); // (Sensible a mayusculas) Reemplaza la palabra
str_ireplace('world', 'PHP', $string); // Reemplaza la palabra
str_repeat('World', 3); // Repite la palabra la cantidad de veces indicada

$number1 = 100; // 00000100
str_pad($number1, 8, '0', STR_PAD_LEFT);
$number2 = 123456; // 00123456
str_pad($number2, 8, '0', STR_PAD_LEFT);


// Multiline text and line breaks
$longText = '
Hello, my name is Juan
I am 27,
Im learning php
';

echo nl2br($longText);

// Multiline text and reserve html tags
$longText = '
  Hello, my name is <b>Juan</b>
  I am <b>27</b>,
  Im learning php
';
echo "1 - " . $longText . '<br>';
echo "2 - " . nl2br($longText) . '<br>';
echo "3 - " . htmlentities($longText) . '<br>' . PHP_EOL;
echo "4 - " . nl2br(htmlentities($longText)) . '<br>' . PHP_EOL;
echo "5 - " . html_entity_decode(htmlentities($longText)) . '<br>' . PHP_EOL;
echo "6 - " . htmlspecialchars($longText) . '<br>' . PHP_EOL;

// https://www.php.net/manual/en/ref.strings.php

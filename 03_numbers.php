<?php

// Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;

// Arithmetic operations
$a + $b;
$a - $b;
$a * $b;
$a / $b;
$a % $b;

// Assignment with math operators
$a += $b; // $a = 9
$a -= $b; // $a = 1
$a *= $b; // $a = 20
$a /= $b; // $a = 1.25
$a %= $b; // $a = 1

// Increment operator
$a++; // a = 6
++$a; // a = 7

// Decrement operator
$a--; // a = 4
--$a; // a = 3

// Number checking functions
is_float(4); // false
is_integer(4); // true
is_numeric(4); // true

// Conversion
$strNumber = '12.34';
$number = (float)$strNumber;

// Number functions
abs(-15); // |-15| = 15
pow(2,3); // 2^3 = 8
sqrt(16); // raiz 16 = 4
max(2,3); // maximo nro entre 2 y 3 = 3
min(2,3); // minimo nro entre 2 y 3 = 2
round(2.4); // redondea = 2
round(2.6); // redondea = 3
floor(2.6); // redondea siempre para abajo = 2
ceil(2.4); // redondea siempre para arriba = 3

// Formatting numbers
$number = 123456789.12345;
number_format($number, 2, ',', '.'); // ($number, decimals: 2, dec_point: '.', thousands_sep ',') = 123.456.789,12

// https://www.php.net/manual/en/ref.math.php

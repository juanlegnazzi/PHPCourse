<?php

// What is a variable

// Variable types
/*
    String
    Integer
    Float
    Boolean
    Null
    Array
    Object
    Resource
 */

// Declare variables
$name = 'Juan';
$age = 27;
$isMale = true;
$height = 1.71;
$salary = null;

// Print the variables. Explain what is concatenation
echo $name . '<br>';
echo $age . '<br>';
echo $isMale . '<br>';
echo $height . '<br>';
echo $salary . '<br>';

// Print types of the variables
echo gettype($name). '<br>';
echo gettype($age). '<br>';
echo gettype($isMale). '<br>';
echo gettype($height). '<br>';
echo gettype($salary). '<br>';

// Print the whole variable
var_dump($name, $age, $isMale, $height, $salary);

// Change the value of the variable
$name = 28;
gettype($name); // integer

// Variable checking functions
is_string($name); // false
is_int($age); // true
is_bool($isMale); // true
is_double($height); // true

// Check if variable is defined
isset($address); // false
isset($name); // true
isset($age); // true
isset($salary); // false

// Constants
define('PI', 3.14);
defined('PI'); // defined(PI)

// Using PHP built-in constants
echo SORT_ASC;
echo PHP_INT_MAX;


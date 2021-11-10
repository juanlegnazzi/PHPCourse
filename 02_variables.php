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
echo 'Print the variables <br>';
echo $name . '<br>';
echo $age . '<br>';
echo $isMale . '<br>';
echo $height . '<br>';
echo $salary . '<br>';

// Print types of the variables
echo 'Print types of the variables  <br>';
echo gettype($name). '<br>';
echo gettype($age). '<br>';
echo gettype($isMale). '<br>';
echo gettype($height). '<br>';
echo gettype($salary). '<br>';

// Print the whole variable
echo '<br> Print the whole variable <br>';
var_dump($name, $age, $isMale, $height, $salary);

// Change the value of the variable
$name = 28;
echo '<br><br> Change the value of the variable name to integer <br>';
echo gettype($name); // integer

// Variable checking functions
is_string($name); // false
is_int($age); // true
is_bool($isMale); // true
is_double($height); // true

// Check if variable is defined
echo '<br><br> Check if variable is defined <br>';
var_dump(isset($address));
echo '<br>';
var_dump(isset($name));
echo '<br>';
var_dump(isset($age));
echo '<br>';
var_dump(isset($salary));
echo '<br>';

// Constants
echo '<br> Constants <br>';
define('PI', 3.14);
echo PI.'<br>';
var_dump(defined('PI')); // defined(PI)
echo '<br>';

// Using PHP built-in constants
echo '<br> Using PHP built-in constants <br>';
echo SORT_ASC.'<br>';
echo PHP_INT_MAX;


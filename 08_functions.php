<?php

// Function which prints "Hello I am Juan"
function hello() {
    echo 'Hello I am Juan <br>';
}

hello();
hello();
hello();

// Function with argument
function helloTwo($name) {
   echo "Hello I am $name";
}
helloTwo('Juan');

// Create sum of two functions
function sum($a, $b) {
    return $a + $b;
}

echo sum(4,5);
echo sum(9,10);

// Create function to sum all numbers using ...$numbers
function sumTwo(...$numbers) {
   $sum = 0;
   foreach ($numbers as $num) $sum += $num;
   return $sum;
}
echo sumTwo(1, 2, 3, 4, 6);

// Arrow functions
function sumThree(...$numbers) {
   return array_reduce($numbers, fn($carry, $n) => $carry + $n);
}
echo sumThree(1, 2, 3, 4, 6);
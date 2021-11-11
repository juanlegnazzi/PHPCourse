<?php

// 1. while
while (true) { // Infinite loop: DON'T run this
    // Do something constantly
}

// Loop with $counter
// Add $runLoop variable to above loop
$counter = 0; // When counter is 10??
while ($counter < 10) {
    echo "Printing counter: $counter <br>";
    // if ($counter > 5) break; // 2.1. BREAK
    // 2.3. Set $runLoop into false when $counter > 10
    /*if ($counter > 10) {
        $runLoop = false;
    }*/
    $counter++;
}

// do - while
$counter = 0; // When counter is 10?
do {
    // Do some code right here
    $counter++;
} while ($counter < 10);

// for
for ($i = 0; $i < 10; $i++) {
    echo "Printing counter: $i<br>";
}

// foreach
$fruits = ["Banana", "Apple", "Orange"];
foreach ($fruits as $i => $fruit) {
    echo $i . ' ' . $fruit . '<br>';
}

// Iterate Over associative array.
$person = [
    'name' => 'Brad',
    'surname' => 'Traversy',
    'age' => 30,
    'hobbies' => ['Tennis', 'Video Games'],
];
foreach ($person as $key => $value) {
    if ($key === 'hobbies') { // 8. Break when $key = 'hobbies'
        break;
    }
    echo $key . ' ' . $value . '<br>';
}

foreach ($person as $key => $value) {
    if (is_array($value)) { // 8. Break when $key = 'hobbies'
        echo $key . ' ' . implode(', ', $value) . '<br>';
    } else {
        echo $key . ' ' . $value . '<br>';
    }
}


<?php

// Create array
$fruits = ['Banana', 'Apple', 'Orange'];

// Print the whole array
echo '<pre>';
var_dump($fruits);
echo '</pre>';
print_r($fruits);

// Get element by index
$fruits[0]; // Banana

// Set element by index
$fruits[0] = 'Peach';

// Check if array has element at index 2
isset($fruits[2]); // true

// Append element
$fruits[] = 'Peach';

// Print the length of the array
count($fruits);

// Add element at the end of the array
array_push($fruits, 'Peach');

// Remove element from the end of the array
array_pop($fruits);

// Add element at the beginning of the array
array_unshift($fruits, 'Apple');

// Remove element from the beginning of the array
array_shift($fruits);

// Split the string into an array
$string = 'Banana,Apple,Peach';
explode(',',$string);

// Combine array elements into string
implode('&', $fruits);

// Check if element exist in the array
in_array('Apple', $fruits); // true

// Search element index in the array
array_search('Apple', $fruits); // 1

// Merge two arrays
$vegetables = ['Potato' , 'Cucumber'];
array_merge($fruits,$vegetables);

// Sorting of array (Reverse order also)
sort($fruits);
rsort($fruits);

// Filter, map, reduce of array
$numbers = [1, 2, 3, 4, 5, 6, 7, 8];
$evens = array_filter($numbers, function($n){ // fn($n) => $n % 2 === 0
    return $n % 2 === 0;
});

$squares = array_map(fn($n) => $n * $n, $numbers);

array_reduce($numbers, fn($carry, $item) => $carry + $item);

// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
$person = [
    'name' => 'Brad',
    'surname' => 'Traversy',
    'age' => 30,
    'hobbies' => ['Tennis', 'Video Games'],
];

// Get element by key
echo $person['name'].'<br>';

// Set element by key
$person['country'] = 'USA';

// Check if array has specific key
isset($person['age']); // true
isset($person['address']); // false

// Print the keys of the array
echo '<pre>';
var_dump(array_keys($person));
echo '</pre>';

// Print the values of the array
echo '<pre>';
var_dump(array_values($person));
echo '</pre>';

// Sorting associative arrays by values, by keys
ksort($person); // sort by keys
asort($person); // sort by values

// Two dimensional arrays
$todoItems = [
    ['title' => 'Todo1', 'completed' => true],
    ['title' => 'Todo2', 'completed' => false],
];

echo '<pre>';
var_dump($todoItems);
echo '</pre>';
<?php

$age = 20;
$salary = 300000;

// Sample if
if ($age < 22) {
    echo 'You are young';
}

// Without circle braces
if ($age === 20) echo '1';

// Sample if-else
if ($age < 22) {
    echo 'You are young';
} else {
    echo 'You are old';
}

// Difference between == and ===
$age == 20; // true
$age == '20'; // true

$age === 20; // true
$age === '20'; // false


// if AND
if ($age < 22 && $salary > 500000) {
    echo 'You are young AND rich';
}


// if OR
if ($age < 22 || $salary > 500000) {
   echo 'You are young OR rich';
}

// if condition1 - elseif condition2 - else
if ($age < 22) {
   echo 'You are young';
} elseif ($age > 60) {
   echo 'You are old';
} else {
   echo "You are not young, but not old also";
}

// if condition1 AND condition2 - elseif condition1 AND condition2 - else
if ($age < 22 && $salary >= 500000) {
   echo 'You are young man AND rich';
} elseif ($age < 22 && $salary < 500000) {
   echo "You are young, and not so rich";
} elseif ($age > 60 && $salary >= 500000) {
   echo 'You are old, but rich';
} elseif ($age > 60 && $salary < 500000) {
   echo 'You are old and NOT rich also';
}

// Ternary if
$age < 22 ? 'Young' : 'Old';

// Nested ternary
$age < 22 ? ($age < 16 ? 'Too young' : 'Young') : 'Old';

// Short ternary
$myAge = $age ?: 18; // Equivalent of "$age ? $age : 18"

// Null coalescing operator
$myName = isset($name) ? $name : 'Jhon';
$myName = $name ?? 'Jhon';

// switch
$userRole = 'admin'; // admin, editor, user

switch ($userRole) {
    case 'admin':
        echo 'You can do anything';
        break;
    case 'editor';
        echo 'You can edit content';
        break;
    case 'user':
        echo 'You can view posts and comment';
        break;
    default:
        echo 'Unknown role';
}
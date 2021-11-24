<?php

// What is class and instance

// Create Person class in Person.php
require_once './Person.php';
require_once './Student.php';

// Create instance of Person
$p = new Person('juan', 28, null);
$p-> name = 'juan';
$p-> age = 27;
echo $p->name . '<br>';
echo $p->age . '<br>';

var_dump($p);

// Using setter and getter
$p->setSalary(100);
echo $p->getSalary() . '<br>';

$s = new Student('arnaldo', '18', 1234);

echo $s->name . '<br>';


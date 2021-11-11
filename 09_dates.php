<?php

// Print current date
date('d/m/Y H:i:s');

// Print yesterday
date('d/m/Y H:i:s', time() - 60 * 60 * 24);

// Different format: https://www.php.net/manual/en/function.date.php
date('F j Y, H:i:s');
    
// Parse date: https://www.php.net/manual/en/function.date-parse.php
$dateString = '2020-02-06 12:45:35'; // Declare date
$parsedDate = date_parse($dateString); // Parse date

echo '<pre>';
var_dump($parsedDate);
echo '</pre>';

// Parse date from format: https://www.php.net/manual/en/function.date-parse-from-format.php
$dateString = 'February 4 2020 12:45:35'; // With non-default format
$parsedDate = date_parse_from_format('F j Y H:i:s', $dateString);

echo '<pre>';
var_dump($parsedDate);
echo '</pre>';
    
// Print current timestamp
time();
    
// String to timestamp
strtotime('now');
strtotime('+1 day');
strtotime('+1 week');
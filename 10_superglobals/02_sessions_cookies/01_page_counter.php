<?php

// https://www.w3schools.com/php/php_sessions.asp
// Using sessions count how many times the user opens the page in a single session
// https://www.guru99.com/cookies-and-sessions.html

// Using cookies and session together, count how many times user accesses the page totally

session_start();
echo session_id() . '<br>';

$_SESSION['counter'] ??=0;
$_SESSION['counter']++;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Visitaste esta pagina <?php echo $_SESSION['counter'] ?> veces</h1>
</body>
</html>

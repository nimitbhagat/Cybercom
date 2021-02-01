<?php

$time = 60 * 60 * 24 * 7;

setcookie('age', 23, time() + 60);
setcookie('name', "Nimit", time() + 60);
echo ($_COOKIE['name']);
echo ($_COOKIE['age']);

setcookie('name', "Nimit", time() - 60);

echo ("<br>Total Cookies : ".count($_COOKIE));

//header('location:print.php');

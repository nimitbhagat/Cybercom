<?php
session_start();

$_SESSION['name'] = "Nimit";

echo ($_SESSION['name']);

//unset($_SESSION['name']);  ////Unset Perticular Values Of The Session
session_unset(); //Unset All The Values Of The Session
session_destroy();
echo ($_SESSION['name']);

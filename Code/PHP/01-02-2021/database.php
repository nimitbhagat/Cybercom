<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "cybercom";
$con = "";

if (@!$con = mysqli_connect($host, $username, $password, $database)) {
    die("Error");
}


<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "cybercom";

@$conn = new mysqli($hostname, $username, $password, $dbname) or die('Error While Connecting..');

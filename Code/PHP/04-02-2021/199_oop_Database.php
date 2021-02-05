<?php

class DatabaseConnection
{
    public function __construct($dbHost, $dbUsername, $dbPassword)
    {
        if (@$this->connect($dbHost, $dbUsername, $dbPassword)) {
            echo "Connected to " . $dbHost;
        } else {
            echo "Connection Fail";
        }
    }

    public function connect($dbHost, $dbUsername, $dbPassword)
    {
        if (mysqli_connect($dbHost, $dbUsername, $dbPassword)) {
            return true;
        } else {
            return false;
        }
    }
}


$connection = new DatabaseConnection('localhost', 'root', '');

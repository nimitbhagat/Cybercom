<?php

$fileName = "demo.txt";

$handle = fopen($fileName, 'r');

$datain = fread($handle, filesize($fileName));

//echo filesize('demo.txt');

$rows = explode("\n", $datain);

//print_r($rows);

foreach ($rows as $row) {
    echo $row . "<br>";
}

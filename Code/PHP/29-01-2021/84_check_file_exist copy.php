<?php

$filename_or = "demo1.txt";

if (!file_exists($filename_or)) {
    $handle = fopen($filename_or, 'w');
    fwrite($handle, "Nothing");
    fclose($handle);
}

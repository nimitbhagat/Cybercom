<?php

//Deleting File
if (@unlink("demo.txt")) {
    echo ("File Deleted");
} else {
    echo ("File Cannot Be Deleted");
}

echo ("<br>");
//Renaming File

$filename = "demo1.txt";
$rand = rand(1000, 9999);

if (@rename($filename, $rand . ".txt")) {
    echo ("File Renamed from <b>$filename</b> to <b>$rand.txt</b>");
} else {
    echo ("<b>$filename</b> File Not Found");
}

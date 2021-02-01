<?php
$xml = simplexml_load_file('data.xml');

foreach ($xml->producer as $a) {
    echo ($a->name . $a->age) . "<br>";

    foreach ($a->show as $s) {
        echo ("&emsp;" . $s->showname . ":" . $s->showdate . "<BR>");
    }
    echo ("<br><br>");
}
//echo $xml->producer[1]->name . ' ' . $xml->producer[1]->age;

<?php $handle = file('demo.txt');

foreach ($handle as $row) {
    echo $row . "<br>";
}

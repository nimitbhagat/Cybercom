<?php

$time = time();

$actual_time = date('d/m/Y H:i:s', $time);
$modify_time = date('d/m/Y H:i:s', (strtotime('0 years')));


echo ('Current Time is ' . $actual_time);
echo ('<br>Modified Time is ' . $modify_time);

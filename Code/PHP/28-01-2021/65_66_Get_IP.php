<?php
/*
$remote_ip = $_SERVER['REMOTE_ADDR'];

$ip_block = ['127.0.0.1', '100.100.100.100'];

foreach ($ip_block as $ip) {
    if ($remote_ip == $ip) {
        die();
    }
}

echo $remote_ip;
*/


if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
} else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip_address = $_SERVER['REMOTE_ADDR'];
}

echo ($ip_address);

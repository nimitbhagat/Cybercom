<?php
function Unique_hit_Count()
{
    $ip_address = $_SERVER['REMOTE_ADDR'];
    $COUNTfileName = "count.txt";
    $IPfileName = "ip.txt";
    $IP = file($IPfileName);

    foreach ($IP as $ip) {
        $ip_single = trim($ip);
        if ($ip_address == $ip_single) {
            $found = true;
            break;
        } else {
            $found = false;
        }
    }

    if (!$found) {
        hit_Count();
        $handle = fopen($IPfileName, 'a');
        fwrite($handle, $ip_address . "\n");
        fclose($handle);
    }
}

function hit_Count()
{
    $fileName = "count.txt";

    $handle = fopen($fileName, 'r');
    $current = fread($handle, filesize($fileName));
    fclose($handle);
    $handle = fopen($fileName, 'r');
    $current += 1;


    $handle = fopen($fileName, 'w');
    fwrite($handle, $current);
    fclose($handle);
}

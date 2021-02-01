<?php $handle = fopen('demo.txt', 'w');

fwrite($handle, "Nimit");
echo fwrite($handle, " Bhagat");

fclose($handle);
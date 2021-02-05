<?php

$age = 16;

try {
    if ($age > 18) {
        echo "Old Enough";
    } else {
        throw new Exception('Not old Enougt');
    }
} catch (Exception $ex) {
    echo "ERROR : " . $ex->getMessage();
}

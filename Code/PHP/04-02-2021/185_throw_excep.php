<?php

function divide($n1, $n2)
{
    if ($n2 == 0) {
        throw new Exception('Cannot Divide By 0');
    } else {
        return $n1 / $n2;
    }
}

divide(5, 0);

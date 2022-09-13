<?php

function sum(float ...$numbers): float
{
    $total = 0;
    
    foreach ($numbers as $number) {
        $total += $number;
    }
    
    return $total;
}
<?php

/**
 * Create a PHP function named sumofXtoY($first, $second)
 * that uses a for loop to add all the integers between 0 and 30
 * and display the sum
 *
 * @param int $first
 * @param int $second
 * @return string
 */
function sumofXtoY($first, $second)
{
    if($first < $second) {
        $startNum = $first;
        $endNum   = $second;
    } else {
        $startNum = $second;
        $endNum   = $first; 
    }

    $sum = 0;
    for($i = $startNum; $i <= $endNum; $i++) {
        $sum += $i;
    }

    return "The sum of the numbers $first to $second is : $sum";
}

echo sumofXtoY(1, 10);

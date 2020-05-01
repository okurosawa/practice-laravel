<?php

/**
 * check whether three given lengths (integers) of three sides
 * form a right triangle.
 *
 * @param int $a
 * @param int $b
 * @param int $c
 * @return string Yes or No
 */
function isRightTriangle($a, $b, $c)
{
    $lengths = [$a, $b, $c];
    rsort($lengths);

    $hypotenuse = $lengths[0];
    $sideLine1  = $lengths[1];
    $sideLine2  = $lengths[2]; 

    if($hypotenuse**2 == ($sideLine1**2 + $sideLine2**2)) {
        return "Yes";
    } else {
        return "No";
    }
}

echo isRightTriangle(3, 5, 4);

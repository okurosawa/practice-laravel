<?php

/**
 * Write a function named factorial($n) to calculate
 * and print the factorial of a number($n) using a for loop.
 *
 * @param int $n
 * @return string
 */
function factorial($n)
{
    $equation = "";
    $result = 1;
    for($i = $n; $i > 0; $i--) {
        if($i > 1) {
            $equation .= "{$i}×";
        } else {
            $equation .= "$i";
        }
        $result *= $i;
    }

    return "The Factorial of $n is<br>$equation = $result";
}

echo factorial(6);

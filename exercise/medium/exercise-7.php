<?php

/**
 * Write a PHP function that accepts a number as a parameter
 * to test whether a number is greater than 30, 20 or 10 using ternary operator.
 *
 * @param int $number
 * @return string
 */
function isGreaterUsingTernaryOperator($number)
{
    $message = (
        $number > 30 ? "greater than 30" : (
            $number > 20 ? "greater than 20" : (
                $number > 10 ? "greater than 10" :
                "Input a number at least greater than 10!"
            )
        )
    );
    
    return "$number:" . $message;
}

echo isGreaterUsingTernaryOperator(4);

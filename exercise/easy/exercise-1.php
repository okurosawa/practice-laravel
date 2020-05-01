<?php

/**
 * Write a PHP function named isGreater($number) to test
 * whether a number is greater than 30, 20 or 10
 *
 * @param int $number
 * @return string
 */
function isGreater($number)
{
    if($number > 30) {
        return "$number: greater than 30";
    } elseif($number > 20) {
        return "$number:greater than 20";
    } elseif($number > 10) {
        return "$number:greater than 10";
    } else {
        return "$number:Input a number at least greater than 10!";
    }
}

echo isGreater(29);

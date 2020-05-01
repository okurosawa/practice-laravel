<?php

/**
 * Write a PHP program which iterates the integers from 1 to 100.
 * For multiples of three print "Fizz" instead of the number
 * and for the multiples of five print "Buzz".
 * For numbers which are multiples of both three and five print "FizzBuzz".
 *
 * @return string
 */
function displayFizzBuzz() {
    $html ="";

    for($i = 1; $i <= 100; $i++) {
        if($i % 15 == 0) {
            $html .= "FizzBuzz($i)";
        } elseif($i % 3 == 0) {
            $html .= "Fizz($i)";
        } elseif ($i % 5 == 0) {
            $html .= "Buzz($i)";
        } else {
            $html .= $i;
        }
        $html .= "<br>";
    }

    return $html;
}

echo displayFizzBuzz();

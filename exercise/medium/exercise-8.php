<?php

/**
 * Create a PHP function that accepts an integer as a parameter
 * to construct the following pattern, using nested for loops.
 * This is when N is equal to 5.
 * *
 * **
 * ***
 * ****
 * *****
 *
 * @param int $n
 * @return string
 */
function displayRightTriangle($n)
{
    $html = "";

    // outer loop means row line
    for($i = 1; $i <= $n; $i++) {

        // inner loop means column line
        for($j = 1; $j <= $i; $j++) {
            $html .= "*";
        }

        $html .= "<br>";
    }

    return $html;
}

echo displayRightTriangle(5);

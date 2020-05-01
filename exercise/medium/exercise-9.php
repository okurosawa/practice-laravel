<?php

/**
 * Create a PHP function to construct the following pattern,
 * using a nested for loop. This is when N is equal to 5.
 * 
 * *
 * **
 * ***
 * ****
 * *****
 * ****
 * ***
 * **
 * *
 *
 * @param int $n
 * @return string
 */
function displayIsoscelesTriangle($n)
{
    $html = "";

    for($i = 1; $i <= $n; $i++) {

        for($j = 1; $j <= $i; $j++) {
            $html .= "*";
        }

        $html .= "<br>";

        if($i == $n) {
            for($k = $i-1; $k > 0; $k--) {

                for($l = $k; $l > 0; $l--) {
                    $html .= "*";
                }

                $html .= "<br>";
            }
        }
    }

    return $html;
}

echo displayIsoscelesTriangle(5);

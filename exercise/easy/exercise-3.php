<?php

/**
 * Write a PHP program to display count,
 * from 5 to 15 using PHP loop as given beside.
 * 
 * @return string
 */
function display5to15()
{
    for($i = 5; $i <= 15; $i++) {
        return "$i<br>";
    }
}

echo display5to15();

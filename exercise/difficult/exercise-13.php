<?php

/**
 * Check if a number is an Armstrong number or not
 *
 * @param int $givenNumber
 * @return boolean
 */
function isArmstrongNumber($givenNumber)
{
    $numArray = str_split($givenNumber);
    $digits   = count($numArray);
    $sum = 0;

    foreach($numArray as $num) {
        $sum += $num**$digits;
    }

    if($sum == $givenNumber) {
        return true;
    } else {
        return false;
    }
}

for($i = 1; $i < 1000; $i++) {
    if(isArmstrongNumber($i)) {
        echo $i."<br>";
    }
}

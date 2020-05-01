<?php

/**
 * Write a PHP function that accepts an array as a parameter
 * to check a list for duplicate values.
 * Returns true if a duplicate values exists
 * and false if values are all unique.
 *
 * @param array $targetArray
 * @return boolean
 */
function isDuplicateArray($targetArray)
{
    $uniqueArray = array_unique($targetArray);
    if (count($uniqueArray) !== count($targetArray)) {
        return true;
    }
    else {
        return false;
    }
}

$fruitArray = [
    "apple",
    "peach",
    "apple"
];

 echo isDuplicateArray($fruitArray);

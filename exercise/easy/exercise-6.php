<?php

/**
 * Write a PHP program to sort the following associative array :
 * array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40") in
 */

$profileArray = [
    "Sophia"  => "31",
    "Jacob"   => "41",
    "William" => "39",
    "Ramesh"  => "40"
];


asort($profileArray);
echo "a) ascending order sort by Value result is<br>" . print_r($profileArray, true) . "<hr>";

ksort($profileArray);
echo "b) ascending order sort by Key result is<br>" . print_r($profileArray, true) . "<hr>";

arsort($profileArray);
echo "c) descending order sort by Value result is<br>" . print_r($profileArray, true) . "<hr>";

krsort($profileArray);
echo "d) descending order sort by Key result is<br>" . print_r($profileArray, true) . "<hr>";


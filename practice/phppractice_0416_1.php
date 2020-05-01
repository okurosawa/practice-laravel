<?php

function isGreater($number)
{
    if($number > 30) {
        echo "greater than 30";
    } elseif($number > 20) {
        echo "greater than 20";
    } elseif($number > 10) {
        echo "greater than 10";
    } else {
        echo "Input a number at least greater than 10!";
    }
}

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

function display5to15()
{
    for($i = 5; $i <= 15; $i++) {
        echo "$i<br>";
    }
}

function sumofXtoY($first, $second)
{
    if($first < $second) {
        $startNum = $first;
        $endNum   = $second;
    } else {
        $startNum = $second;
        $endNum   = $first; 
    }

    $sum = 0;
    for($i = $startNum; $i <= $endNum; $i++) {
        $sum += $i;
    }

    echo "The sum of the numbers $first to $second is : $sum";
}

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

    echo "The Factorial of $n is<br>$equation = $result";
}

$profileArray = [
    "Sophia"  => "31",
    "Jacob"   => "41",
    "William" => "39",
    "Ramesh"  => "40"
];

asort($profileArray);
echo "ascending order sort by Value result is<br>" . print_r($profileArray, true) . "<hr>";

ksort($profileArray);
echo "ascending order sort by Key result is<br>" . print_r($profileArray, true) . "<hr>";

arsort($profileArray);
echo "descending order sort by Value result is<br>" . print_r($profileArray, true) . "<hr>";

krsort($profileArray);
echo "descending order sort by Key result is<br>" . print_r($profileArray, true) . "<hr>";

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
    
    echo $message;
}

function displayRightTriangle($n)
{
    for($i = 1; $i <= $n; $i++) {
        for($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
}

function displayIsoscelesTriangle($n)
{

}

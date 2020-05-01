<?php

// $favoriteColor = "red";
// echo "My favorite color is $favoriteColor.<br>";

// $apple  = 10;
// $orange = 15;
// echo $apple + $orange;

// echo mb_strlen("Hello world!");

$bank             = 5000;
$webPageDesignJob = 15000;
$onlineJob        = 25000;
$iPodTouch        = 20800;

// Sora-san's all bank money
$bank += ($webPageDesignJob + $onlineJob);
// echo $bank;

// Sora-san bought iPod touch
$bank -= $iPodTouch;
// echo $bank;

// Sora-san earn money
$regularWork      = 30000;
$earnMoneyForYear = $regularWork * 12;
// echo $earnMoneyForYear;

// Sora-san's remain money for a month
$remainMoneyForMonth = $regularWork / 2;
echo $remainMoneyForMonth;

?>

<?php

$food_name = $_POST["food_name"];

switch($food_name) {
    case "sushi":
        echo "Healthy and GOOD!";
        break;
    case "french fries":
        echo "Oily but Yummy!";
        break;
    case "salad":
        echo "No comment :D";
        break;
    case "nori":
        echo "Is it food?";
        break;
    default:
        echo "Your food is $food_name!";
}

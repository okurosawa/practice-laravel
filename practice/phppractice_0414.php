<?php

// $input1 = 5;
// $input2 = 5;

// if($input1 == $input2) {
//     echo "IT IS THE SAME";
// }

// $age = 15;

// if($age >= 20) {
//     echo "YOU ARE NOT TEENAGER!!!";
// } else {
//     echo "YOU ARE TEENAGER!";
// }

// $score = 69;
// $evaluation = "";

// if($score >= 80) {
//     $evaluation = "Excellent";
// } elseif($score >= 70) {
//     $evaluation = "Very Good";
// } elseif($score >= 60) {
//     $evaluation = "Good";
// } else {
//     $evaluation = "Failure";
// }

// echo "Your grade is $score. It is $evaluation!";

// $food = "pizza";

// switch($food) {
//     case "sushi":
//         echo "Healthy and GOOD!";
//         break;
//     case "french fries":
//         echo "Oily but Yummy!";
//         break;
//     case "salad":
//         echo "No comment :D";
//         break;
//     case "nori":
//         echo "Is it food?";
//         break;
//     default:
//         echo "Your food is $food!";
// }

// $min = 1;
// $max = 10;

// for($i = $min; $i <= $max; $i++) {
//     // echo $i;

//     // if($i < $max) {
//     //     echo "-";
//     // }

//     echo $i < $max ? $i."-" : $i;
// }

$dataArray = [1, 2, 3, 4, 5];


?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Number</th>
                <th>Description</th>
            </tr>
        </thead>

        <tbody>
            <?php for($i =1; $i < 5; $i++): ?>
                <tr>
                    <td><?= $i ?></td>
                    <td>This is Data <?= $i ?></td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>

    <table>
        <thead>
            <tr>
                <th>Number</th>
                <th>Description</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($dataArray as $key => $data): ?>
                <tr>
                    <td><?= $key + 1 ?></td>
                    <td>This is Data <?= $data ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>

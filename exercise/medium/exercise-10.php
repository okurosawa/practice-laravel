<?php
//               $j = 1 2 3 ...
// $i = 1 odd number  ■ □ ■ □ ■ □ ■ □
// $i = 2 even number □ ■ □ ■ □ ■ □ ■ 
// $i = 3 odd number  ■ □ ■ □ ■ □ ■ □
// $i = 4 even number □ ■ □ ■ □ ■ □ ■
// $i = 5 odd number  ■ □ ■ □ ■ □ ■ □
// $i = 6 even number □ ■ □ ■ □ ■ □ ■
// $i = 7 odd number  ■ □ ■ □ ■ □ ■ □
// $i = 8 even number □ ■ □ ■ □ ■ □ ■

//      odd even
// odd   ■   □
// even  □   ■
// ■ => odd + odd or even + even = even number
// □ => odd + even = odd number

/**
 * Write a PHP script using nested for loop
 * that creates a chess board as shown in the image.
 *
 * @param int $n
 * @return string
 */
function tableLikeChessBoard($n)
{
    $table = "<table border='1'>\n";

    for($i = 1; $i <= $n; $i++) {

        $table .= "\t<tr>\n";

        for($j = 1; $j <= $n; $j++) {

            if(($i + $j) % 2 == 0) {
                $table .= "\t\t<td style='background: #000'></d>\n";
            } else {
                $table .= "\t\t<td style='background: #fff'></d>\n";
            }
        }

        $table .= "\t<tr>\n";

    }

    $table .= "</table>";

    return $table;
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise-10</title>
    <style>
        td {
            width: 30px;
            height: 30px;
        }
    </style>
</head>
<body>
    
<?= tableLikeChessBoard(8) ?>

</body>
</html>

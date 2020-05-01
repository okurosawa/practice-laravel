<?php

/**
 * Write a PHP program to find the factorial of a number using a recursive function.
 *
 * @param int $number
 * @return int
 */
function calculateFactorial($number) {
    if($number > 0) {
        return $number * calculateFactorial($number - 1);
    }
    return 1;
}

?>

<table border="1">
    <tr>
        <th>N</th>
        <th>Factorial</th>
    </tr>
    <?php
        for($i = 1; $i <= 20; $i++) {
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>" . calculateFactorial($i) . "</td>";
            echo "</tr>";
        }
    ?>
</table>

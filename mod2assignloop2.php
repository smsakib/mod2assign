<?php
function printEvenNumbersWhile($start, $end, $step) {
    $i = $start;
    while ($i <= $end) {
        echo "$i ";
        $i += $step;
    }
}

printEvenNumbersWhile(2, 20, 2);
?> 

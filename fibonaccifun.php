<?php
function printFibonacci($n) {
    $fibonacci = [0, 1];
    for ($i = 2; $i < $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    for ($i = 0; $i < $n; $i++) {
        echo $fibonacci[$i] . " ";
    }
}

printFibonacci(15);


?> 

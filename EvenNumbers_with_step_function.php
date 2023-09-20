<?php
function EvenNumbers($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        echo $i;
        if ($i < $end) {
            echo " ";
        }
    }
}
EvenNumbers(2, 20, 2);
<?php

$a = 65;
$m = 55;
$e = 45;

if ($a >= 33 && $m >= 33 && $e >= 33) {
    $avg = ($a + $m + $e) / 3;
    if ($avg >= 80 && $avg <= 100) {
        echo "Result= A+";
    } else if ($avg >= 70 && $avg <= 79) {
        echo "Result= A";
    } else if ($avg >= 60 && $avg <= 69) {
        echo "Result= A-";
    } else if ($avg >= 50 && $avg <= 59) {
        echo "Result= B";
    } else if ($avg >= 40 && $avg <= 49) {
        echo "Result= C";
    } else {
        echo "Result= D";
    }
} else {
    echo "Failed";
}
<?php

$arrayDad = [2, 1, 1, 1, 2, 3, 3, 2, 2, 2, 1];
$n = 0;
$m = 0;
$c = 0;
foreach ($arrayDad as $key => $value) {
    $temp = $arrayDad[$key + 1];
    if ($value == $temp) {
        $n++;
    } elseif ($value !== $temp) {
        if ($m < $n) {
            $m = $n;
            $c = $key - $n;
            $n = 0;
        } elseif ($m == $n) {
            $n = 0;
        }
    }
}
echo $n;
echo $m;
echo $c;
print_r(array_slice($arrayDad,$c,$m + 1));
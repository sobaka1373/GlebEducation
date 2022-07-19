<?php

$arrayRome = [[" ", "M", "MM", "MMM"],
    [" ", "C", "CC", "CCC", "CD", "D", "DC", "DCC", "DCCC", "CM"],
    [" ", "X", "XX", "XXX", "XL", "L", "LX", "LXX", "LXXX", "XC"],
    [" ", "I", "II", "III", "IV", "V", "VI", "VII", "VIII", "IX"]];
$number = 1234;
$number = (string) $number;
$number = str_split($number);
while (count($number) < 4) {
    array_unshift($number, 0);
}
foreach ($number as $key => $value) {
    $number = str_replace($number[$key], $arrayRome[$key][$number[$key]], $number);
}
$number = implode($number);
print_r($number);
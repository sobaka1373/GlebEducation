<?php
// Array
// task 1

for ($j = 0; $j < 20; $j++) {
    $array[$j] = mt_rand(100,1000);
}
$array = array_flip($array);
foreach ($array as $key => &$value) {
    $value *= 5;
}
$array = array_flip($array);
print_r($array);

//////////////
// task 2

$arrayOne = ['a', 'b', 'c', 'd', 'e'];
$arrayTwo = ['a', 'd', 'c', 'b', 'e'];
foreach ($arrayOne as $key => $value)
    if ($value == $arrayTwo[$key]) {
        $arrayFinish[$key] = $value;
    }
print_r($arrayFinish);

//////////////////
// task 3

$arrayDad = [2, 1, 1, 2, 3, 3, 2, 2, 2, 1];
$n = 0;
$m = 0;
$c = 0;
foreach ($arrayDad as $key => $value) {
    if ($value == $arrayDad[$key++]) {
        $n++;
    } elseif ($value !== $arrayDad[$key++]) {
        if ($m < $n) {
            $m = $n;
            $c = $key - $n;
            $n = 0;
        }
    }
}
echo $n;
echo $m;
echo $c;
print_r(array_slice($arrayDad,$c,$m++));
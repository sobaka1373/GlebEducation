<?php
// task 1

$x = 6;
$y = 15;
$z = 4;
$x += $y - $x++ * $z;
echo $x;
$z = - $x - $y * 5;
echo $z;
$y /= $x + 5 % $z;
echo $y;
$z = $x++ + $y * 5;
echo $z;
$x = $y - $x++ * $z;
echo $x;

/////////////////////////
// task 2

$a = mt_rand(0,100);
$b = mt_rand(0,100);
$c = mt_rand(0,100);
$s = ($a + $b + $c) / 3;
echo $s;

/////////////////////////
// task 3

$r = mt_rand(0,10);
$h = mt_rand(0,10);
$v = pi() * $r * 2 * $h;
$s = 2 * pi() * $r * ($r + $h);
echo $v;
echo $s;

/////////////////////////
// task 4

$a = mt_rand(0,10);
$b = mt_rand(11,20);
for ($a; $a <= $b; $a++) {
    $sum += $a;
    if ($a % 2 != 0) echo "$a ,";
}
echo $sum;

/////////////////////////
// task 7

$n = mt_rand(5,15);
for ($j = 0; $j < $n; $j++) {
    $arr[$j] = mt_rand(0,100);
}
$countarr = count($arr);
$max = 0;
$min = 1000000;
$sum = 0;
for ($i = 0; $i < $countarr; $i++) {
    $sum += $arr[$i];
    if ($arr[$i] > $max) {
        $max = $arr[$i];
    } elseif ($arr[$i] < $min) {
        $min = $arr[$i];
    } elseif ($arr[$i] % 2 != 0) {
        echo "<br />$arr[$i] ,";
    } else {
        $max = $max;
        $min = $min;
    }
}
$average = $sum / $countarr;
echo $max;
echo $min;
echo $sum;
echo $average;

////////////////////////////
// task 8

$arrayrand = array(array(mt_rand(-10,10),mt_rand(-10,10),mt_rand(-10,10),mt_rand(-10,10),mt_rand(-10,10)),
    array(mt_rand(-10,10),mt_rand(-10,10),mt_rand(-10,10),mt_rand(-10,10),mt_rand(-10,10)),
    array(mt_rand(-10,10),mt_rand(-10,10),mt_rand(-10,10),mt_rand(-10,10),mt_rand(-10,10)),
    array(mt_rand(-10,10),mt_rand(-10,10),mt_rand(-10,10),mt_rand(-10,10),mt_rand(-10,10)),
    array(mt_rand(-10,10),mt_rand(-10,10),mt_rand(-10,10),mt_rand(-10,10),mt_rand(-10,10)));
for ($i = 0; $i < 5; $i++){
    if ($arrayrand[$i][$i] < 0) {
        $$arrayrand[$i][$i] = 0;
    } elseif ($arrayrand[$i][$i] > 0) {
        $arrayrand[$i][$i] = 1;
    }
}
print_r($arrayrand);


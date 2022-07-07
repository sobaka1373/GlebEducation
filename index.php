<?php
// task 1
$x = 6;
$y = 15;
$z = 4;
$x += $y - $x++ * $z;
echo "task 1 <br /> $x <br />";
$z = - $x - $y * 5;
echo $z, "<br />";
$y /= $x + 5 % $z;
echo $y, "<br />";
$z = $x++ + $y * 5;
echo $z, "<br />";
$x = $y - $x++ * $z;
echo $x, "<br />";

/////////////////////////
// task 2

$a = mt_rand(0,100);
$b = mt_rand(0,100);
$c = mt_rand(0,100);
$sarf = ($a + $b + $c) / 3; // Не читается переменная
echo " task 2 <br /> $sarf <br />";

/////////////////////////
// task 3

$r = mt_rand(0,10);
$h = mt_rand(0,10);
$V = pi() * $r * 2 * $h;
$S = 2 * pi() * $r * ($r + $h);
echo "task 3 <br /> $V <br />";
echo $S, "<br />";

/////////////////////////
// task 4

$A = mt_rand(0,10);
echo "task 4 <br /> $A A";
$B = mt_rand(11,20);
echo "$B B <br />";
for ($A; $A <= $B; $A++) {
    $c = $A;
    $sum += $c; // Undefined variable
    if ($c % 2 != 0) echo "$c ,";
}
echo "<br /> $sum сумма <br />";

/////////////////////////
// task 7

$N = mt_rand(5,15);
for ($j = 0; $j < $N; $j++) {
    $arr[$j] = mt_rand(0,100);
}
echo "task 7 <br /> массив <br />";
print_r($arr); // Variable '$arr' is probably undefined
$car = count($arr);
$max = 0;
$min = 1000000;
$summ = 0; // Не корректное название
for ($i = 0; $i < $car; $i++) {
    $summ += $arr[$i];
    if ($arr[$i] > $max) {
        $max = $arr[$i];}
    elseif ($arr[$i] < $min) {
        $min = $arr[$i];
    }
    elseif ($arr[$i] % 2 != 0) {echo "<br />$arr[$i] ,";}
    else {
        $max = $max;
        $min = $min;
    }
}
$sarff = $summ / $car;

echo "<br /> $max max";
echo "<br /> $min min";
echo "<br /> $summ sum";
echo "<br /> $sarff sred arefm<br />";

////////////////////////////
// task 8

$arrt = array(array(mt_rand(-10,10),mt_rand(-10,10),mt_rand(-10,10),mt_rand(-10,10),mt_rand(-10,10)),
    array(mt_rand(-10,10),mt_rand(-10,10),mt_rand(-10,10),mt_rand(-10,10),mt_rand(-10,10)),
    array(mt_rand(-10,10),mt_rand(-10,10),mt_rand(-10,10),mt_rand(-10,10),mt_rand(-10,10)),
    array(mt_rand(-10,10),mt_rand(-10,10),mt_rand(-10,10),mt_rand(-10,10),mt_rand(-10,10)),
    array(mt_rand(-10,10),mt_rand(-10,10),mt_rand(-10,10),mt_rand(-10,10),mt_rand(-10,10))); // Исправь название
echo "task 8 <br /> massiv do<br /> ";
print_r($arrt);
for ($i = 0; $i < 5; $i++){
    if ($arrt[$i][$i] < 0){$arrt[$i][$i] = 0;}
    elseif ($arrt[$i][$i] > 0) {$arrt[$i][$i] = 1;}
}
echo "<br /> massiv posle<br /> ";
print_r($arrt);
echo "<br /> proverka elementov<br /> ";
print_r($arrt[0][0]);
print_r($arrt[1][1]);
print_r($arrt[2][2]);
print_r($arrt[3][3]);
print_r($arrt[4][4]);

// Fix PSR if, for.
// Fix output lang, example: massiv posle => array after.
// Старайся не использовать теги HTML в echo.

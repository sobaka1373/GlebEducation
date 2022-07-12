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

$array = ['President'];
$arrayCompare = ['side'];
$arrayAfterCompare = substr($array[0], strpos($array[0], $arrayCompare[0]), strlen($arrayCompare[0]));
print_r($arrayAfterCompare);

//////////////////
// task 3

$array = [2, 1, 1, 2, 3, 3, 2, 2, 2, 1];
$arraySequence = [];
foreach ($array as $key => $value) {
    if (!isset($array[$key + 1])) {
        break;
    } else {
        $arrayCount[] = $value;
        if ($value === $array[$key + 1]) {
            continue;
        } else {
        if (count($arraySequence) < count($arrayCount)) {
            unset($arraySequence);
            $arraySequence = $arrayCount;
            unset($arrayCount);
        } else {
            unset($arrayCount);
        }
        }
    }
}
print_r($arraySequence);

////////////////////////////////
// task 4

$array = [3, 2, 3, 4, 2, 2, 4];
$arraySequence = [];
foreach ($array as $key => $value) {
    if (!isset($array[$key + 1])) {
        break;
    } else {
        $arrayCount[] = $value;

        if ($value === $array[$key + 1] - 1) {
            continue;
        } else {
            if (count($arraySequence) < count($arrayCount)) {
                unset($arraySequence);
                $arraySequence = $arrayCount;
                unset($arrayCount);
            } else {
                unset($arrayCount);
            }
        }
    }
}
print_r($arraySequence);

////////////////////////////////
// task 5

$array = [4, 1, 1, 4, 2, 3, 4, 4, 1, 2, 4, 9, 3];
$count = count($array);
for ($i = 0; $i < $count - 1; $i++) {
    for ($j = 0; $j < $count - 1 - $i; $j++) {
        if ($array[$j] > $array[$j + 1]) {
            $old = $array[$j];
            $array[$j] = $array[$j + 1];
            $array[$j + 1] = $old;
        }
    }
}
print_r($array);

//////////////////////////
// task 6

$array = [4, 1, 1, 4, 2, 3, 4, 4, 1, 2, 4, 9, 3];
$arrayMostFrequent = [];
$arrayCount = [];
for ($i = 0; $i < count($array); $i++) {
    for ($j = 0; $j < count($array); $j++) {
        if ($array[$j] === $array[$i]) {
            $arrayCount[] += $array[$j];
        }
    }
    if (count($arrayMostFrequent) < count($arrayCount)) {
        unset ($arrayMostFrequent);
        $arrayMostFrequent = $arrayCount;
        unset ($arrayCount);
    } else {
        unset ($arrayCount);
    }
}
print_r($arrayMostFrequent);

////////////////////////////////////
// task 7

$array = [1, 3, 5, 7, 9, 11, 13, 15, 17, 19];
$item = 9;
$low = 0;
$high = count($array) - 1;
$halfIndex = (int) (($low + $high) / 2);
while ($array[$halfIndex] !== $item) {
    if ($array[$halfIndex] < $item) {
        $low = $halfIndex + 1;
    } else {
        $high = $halfIndex - 1;
    }
    $halfIndex = (int) (($low + $high) / 2);
}
print_r($halfIndex);
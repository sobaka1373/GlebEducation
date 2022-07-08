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

$array = [2,1,1,2,3,3,2,2,2,1];
$arraySequence = [];
foreach ($array as $key => $value) {
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
print_r($arraySequence);

////////////////////////////////
// task 4

$array = [3,2,3,4,2,2,4];
$arraySequence = [];
foreach ($array as $key => $value) {
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
print_r($arraySequence);

////////////////////////////////
// task 5

$array = [4,1,1,4,2,3,4,4,1,2,4,9,3];
$count = count($array);
for ($i = 0; $i < $count-1; $i++) {
    for ($j = 0; $j < $count - 1 - $i; $j++) {
        if ($array[$j] > $array[$j+1]) {
            $old = $array[$j];
            $array[$j] = $array[$j+1];
            $array[$j+1] = $old;
        }
    }
}
print_r($array);

//////////////////////////
// task 6

$array = [4,1,1,4,2,3,4,4,1,2,4,9,3];
$count = count($array);
for ($i = 0; $i < $count-1; $i++) {
    for ($j = 0; $j < $count - 1 - $i; $j++) {
        if ($array[$j] > $array[$j+1]) {
            $old = $array[$j];
            $array[$j] = $array[$j+1];
            $array[$j+1] = $old;
        }
    }
}
$arrayFrequent = [];
foreach ($array as $key => $value) {
    $arrayCount[] = $value;
    if ($value === $array[$key + 1]) {
        continue;
    } else {
        if (count($arrayFrequent) < count($arrayCount)) {
            unset($arrayFrequent);
            $arrayFrequent = $arrayCount;
            unset($arrayCount);
        } else {
            unset($arrayCount);
        }
    }
}
print_r($arrayFrequent);

////////////////////////////////////
// task 7



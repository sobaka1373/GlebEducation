<?php
// Function
// task 1

function lastDigit ($a)
{
    $array = str_split($a);
    if ($array[count($array) - 1] === 0) {
        return "zero";
    } elseif ($array[count($array) - 1] == 1) {
        return "one";
    } elseif ($array[count($array) - 1] == 2) {
        return "two";
    } elseif ($array[count($array) - 1] == 3) {
        return "three";
    } elseif ($array[count($array) - 1] == 4) {
        return "four";
    } elseif ($array[count($array) - 1] == 5) {
        return "five";
    } elseif ($array[count($array) - 1] == 6) {
        return "six";
    } elseif ($array[count($array) - 1] == 7) {
        return "seven";
    } elseif ($array[count($array) - 1] == 8) {
        return "eight";
    } elseif ($array[count($array) - 1] == 9) {
        return "nine";
    } else {
        return "type integer";
    }
}
$a = 12345;
echo lastDigit ($a);

/////////////////////////////
// task 2

function reverseDigit ($a)
{
    return implode(array_reverse(str_split($a)));
}
$a = 12345;
print_r(reverseDigit ($a));

/////////////////////////////
// task 3

function findWord ($text, $word)
{
    static $count = 0;
    static $position = 0;
    if (stripos($text, $word, $position)) {
        $count++;
        $position = stripos($text, $word, $position) + 1;
        findWord($text, $word);
    }
    return $count;
}
$text = "mom dad mom Dad mom dad";
$word = "dad";
echo findWord ($text, $word);

//////////////////////////////
// task 5

function countNumbers ($array, $number)
{
    $counter = 0;
    foreach ($array as $value) {
        if ($value === $number) {
            $counter += 1;
        }
    }
    return $counter;
}
$array = [1, 2, 1, 3, 4, 1, 2, 3, 5, 1, 2];
$number = 1;
echo countNumbers ($array, $number);

/////////////////////////////////////
// task 6

function checkNeighbor($array, $key)
{
    if (isset($array[$key - 1])) {
        if (isset($array[$key + 1])) {
            if ($array[$key] > $array[$key - 1]) {
                if ($array[$key] > $array[$key + 1]) {
                    $counter = 1;
                } else {
                    $counter = 0;
                }
            } else {
                $counter = 0;
            }
        } else {
            $counter = -1;

        }
    } else {
        $counter = -1;

    }
    if ($counter > 0) {
        return "1 Element is  bigger then it's neighbours";
    } elseif ($counter < 0) {
        return "-1 This is the first/last element and it has only one neighbour";
    } else {
        return "0 Element is not bigger then it's neighbours";
    }
}
$array = [5, 4, 5, 4, 2];
$elementKey = 2;
echo checkNeighbor($array, $elementKey);

///////////////////////////////////
// task 7

function indexNeighbor($array)
{
    for ($i = 0; $i < count($array); $i++) {
        if (checkNeighbor($array, $i) > 0) {
            return $i;
        }
    }
}

$array = [1, 2, 5, 2, 1];
echo indexNeighbor($array);


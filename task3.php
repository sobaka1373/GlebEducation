<?php
// Function
// task 1
function lastDigit (int $number)
{
    $number = (string) $number;
    $array = str_split($number);
    $lastDigit = (int) $array[count($array) - 1];
    if ($lastDigit === 0) {
        return "zero";
    } elseif ($lastDigit === 1) {
        return "one";
    } elseif ($lastDigit === 2) {
        return "two";
    } elseif ($lastDigit === 3) {
        return "three";
    } elseif ($lastDigit === 4) {
        return "four";
    } elseif ($lastDigit === 5) {
        return "five";
    } elseif ($lastDigit === 6) {
        return "six";
    } elseif ($lastDigit === 7) {
        return "seven";
    } elseif ($lastDigit === 8) {
        return "eight";
    } elseif ($lastDigit === 9) {
        return "nine";
    } else {
        return "type integer";
    }
}
$number = 12347;
echo lastDigit ($number);

/////////////////////////////
// task 2

function reverseDigit (int $number) : string
{
    $number = (string) $number;
    return implode(array_reverse(str_split($number)));
}
$number = 12375;
print_r(reverseDigit ($number));

/////////////////////////////
// task 3

//function findWord ($text, $word, $flag)
//{
//    static $count = 0;
//    static $position = 0;
//    if ($flag === true) {
//        if (stripos($text, $word, $position) !== false) {
//            $count++;
//            $position = stripos($text, $word, $position) + 1;
//            findWord($text, $word);
//        }
//    } else {
//
//    }
//
//
//    return $count;
//}
//$text = "mom dad Mommy Dad mom dad";
//$word = "mom";
//echo findWord ($text, $word);

// task 4
//ispol'zovat stroky'

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


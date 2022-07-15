<?php
// Function
// task 1
function lastDigit (int $number) : string
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

function findWord ($text, $word, $flag)
{
    $text = explode(" ", $text);
    $counter = 0;
    if ($flag === true) {
        foreach ($text as $key => $value) {
            if (strtolower($value) == strtolower($word)) {
                $counter++;
            }
        }
        return $counter;
    } else {
        foreach ($text as $key => $value) {
            if ($value == $word) {
                $counter++;
            }
        }
        return $counter;
    }
}
$text = "Mom dad mom dad mommy daddy mOm Dad";
$word = "mom";
echo findWord($text, $word, true);

/////////////////////////////
// task 4

function findDiv($text)
{
    preg_match_all("/<div>/ui", $text, $allMatches);
    return count($allMatches[0]);
}
$text = "<div> mom </div> dad mom <div> dad mommy </div>";
echo findDiv($text);

//////////////////////////////
// task 5

function countNumbers (array $array, int $number) : int
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

function checkNeighbor(array $array, int $key) : int
{
    if ((isset($array[$key - 1])) && (isset($array[$key + 1]))){
            if (($array[$key] > $array[$key - 1]) && ($array[$key] > $array[$key + 1])) {
                    $counter = 1;
                    return $counter;
                } else {
                    $counter = 0;
                    return $counter;
                }
            } else {
        $counter = -1;
        return $counter;

    }
}
$array = [5, 4, 5, 4, 2];
$elementKey = 2;
switch (checkNeighbor($array, $elementKey)) {
    case 1:
        echo "Element is  bigger then it's neighbours";
        break;
    case 0:
        echo "Element is not bigger then it's neighbours";
        break;
    case -1:
        echo "This is the first/last element and it has only one neighbour";
        break;
}

///////////////////////////////////
// task 7

function indexNeighbor(array $array) : int
{
    $item = 0;
    for ($i = 0; $i < count($array); $i++) {
        if (checkNeighbor($array, $i) > 0) {
            $item++;
            break;
        }
    }
    if ($item > 0){
        return $i;
    } else {
        return -1;
    }
}

$array = [30, 20, 10, 8, 9];
echo indexNeighbor($array);


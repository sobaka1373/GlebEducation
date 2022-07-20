<?php

function checkNeighbor($array, $key) // dobavit' spaceship, strogaya tipizaciya, fozvrat
// chisla i potom otdel'no yje vivod 4erez function
{
    if (isset($array[$key - 1]) && isset($array[$key + 1])) {
        if (($array[$key] > $array[$key - 1]) && ($array[$key] > $array[$key + 1])) {
            $counter = 1;
        } else {
            $counter = 0;
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
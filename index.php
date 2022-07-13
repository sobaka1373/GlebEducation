<?php

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

function indexNeighbor($array)
{
    for ($i = 0; $i < count($array); $i++) {
        if (checkNeighbor($array, $i) > 0) {
            return $i;
        }
    }
}

$array = [1, 2, 5, 2, 1];
$index = 3;
echo indexNeighbor($array);



<?php

namespace OOP;

require_once "Classes/BarWorkers.php";
require_once "Classes/Test.php";
require_once "Classes/Singleton.php";

class Barmen extends BarWorkers implements testText
{
    public function doJob()
    {
        echo "Вот ваше пиво";
    }
    public function TestMessage()
    {
        echo "Hello big world";
    }
    public function insert($data, $data2){
        $sql = 'INSERT INTO Barmen (`name`, `age`) Values ('.$data. ', ' .$data2. ')';
        DB::query ($sql);
        die($sql);
    }
}
<?php

namespace OOP;

require_once "Classes/BarWorkers.php";

class Barmen extends BarWorkers
{
    public function doJob()
    {
        echo "Вот ваше пиво";
    }
}
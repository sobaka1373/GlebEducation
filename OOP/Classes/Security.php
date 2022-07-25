<?php
namespace OOP;

require_once "Classes/BarWorkers.php";

class Security extends BarWorkers
{
    public function doJob()
    {
        echo "Предъявите ваши документы";
    }
}

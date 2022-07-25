<?php
namespace OOP;

require_once "Classes/BarWorkers.php";
class Administrator extends BarWorkers
{
    public function doJob()
    {
        echo "Живо за работу!";
    }
}
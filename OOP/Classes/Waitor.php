<?php
namespace OOP;

require_once "Classes/BarWorkers.php";

class Waitor extends BarWorkers
{
    public function doJob()
    {
        echo "Готов принять заказ";
    }
}
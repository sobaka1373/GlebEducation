<?php
namespace OOP;

require_once "Classes/BarWorkers.php";

class Janitor extends BarWorkers
{
    public function doJob()
    {
        echo "Чищу вилкой";
    }
}
<?php
namespace OOP;

require_once "Classes/BarWorkers.php";

class Accountant extends BarWorkers
{
    public function doJob()
    {
        echo "Это не ветка, а зарплата";
    }
}
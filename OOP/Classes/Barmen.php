<?php

namespace OOP;

class Barmen extends BarWorkers
{
    private string $name;
    private int $age;
    private int $salary;
    private string $gender;

    public function __construct(string $name, int $age, int $salary, string $gender)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
        $this->gender = $gender;
    }
    public function doJob()
    {
        echo "Вот ваше пиво";
    }
}
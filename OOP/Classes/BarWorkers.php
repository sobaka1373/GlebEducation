<?php

namespace OOP;

abstract class BarWorkers
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
    abstract public function doJob();
    public function getName() : string
    {
        return $this->name;
    }

    public function getAge() : int
    {
        return $this->age;
    }

    public function getSalary() : int
    {
        return $this->salary;
    }
    public function getGender() : string
    {
        return $this->gender;
    }
}
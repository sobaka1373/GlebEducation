<?php
namespace OOP;

require_once "Classes/Barmen.php";


$maddison = new Barmen("Ilya", 35, 1000, "male");
$maddison->doJob();
$maddison->TestMessage();
$table = "Barmen";
$data=$maddison->getName();
$data2 =$maddison->getAge();
$maddison->insert($data, $data2);

<?php
namespace OOP;

require_once "Classes/Security.php";

$silvername = new Security("Vlad", 25, 900, "male");
$silvername->doJob();

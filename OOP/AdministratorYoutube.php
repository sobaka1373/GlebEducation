<?php
namespace OOP;

require_once "Classes/Administrator.php";

$youtube = new Administrator("Admin", 50, 3000, "male");
$youtube->doJob();
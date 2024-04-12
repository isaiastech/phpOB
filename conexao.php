<?php

require "vendor/autoload.php";

use app\src\class\Conection;

$connection = Conection::connect();
$prepare = $connection->query("SELECT * FROM user");
var_dump($prepare->fetchAll());

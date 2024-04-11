<?php
require "vendor/autoload.php";

use app\src\class\Construtor;

$user = new Construtor('Isaias', 45);

echo $user->info();
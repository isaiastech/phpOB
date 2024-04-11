<?php
require "vendor/autoload.php";

use app\src\class\Math;

$nome = new Math('isaias');

$nome->nome('carlos');

echo '<br>';

$name = 'Maria';

$myName = match($name)
{
    'Isaias'=>'Isaias',
    'João'=>'João',
    'Maria'=>'Maria',
    default => 'undefined'
};

echo $myName;


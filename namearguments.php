<?php

require "vendor/autoload.php";

use app\src\class\NameArguments;


$name = new NameArguments();

echo $name->info('paulo', false);


<?php
require "vendor/autoload.php";

use app\src\class\Uploadfile;


$upload = new Uploadfile('Isaias.png');

echo $upload->upload();

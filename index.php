<?php
require "vendor/autoload.php";

use app\src\class\UploadFoto;

$upload = new UploadFoto('Isaias.png');
echo $upload->teste();


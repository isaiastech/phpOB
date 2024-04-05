<?php
require "vendor/autoload.php";

use app\src\class\UploadFoto;

$upload = new UploadFoto('teste.png');

echo $upload->teste();


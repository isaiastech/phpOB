<?php
require "vendor/autoload.php";

use app\src\class\Upload;
use app\src\class\Uploadfile;
use app\src\class\UploadFoto;

$upload = new Uploadfile('Isaias.rar');

// echo $upload->extension();
echo $upload->rename();
echo $upload->upload();

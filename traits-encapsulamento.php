<?php 
require "vendor/autoload.php";

use app\src\class\UploadFoto;

$upload = new UploadFoto('arqivo.png');

$upload->validation();
echo $upload->upload();

?>
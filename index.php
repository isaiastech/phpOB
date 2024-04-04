<?php

require "vendor/autoload.php";
use app\src\class\UploadFoto;



$upload = new  UploadFoto('foto dois.jpg');


$upload->extension();
$upload->rename();
$upload->upload();

echo $upload->upload();



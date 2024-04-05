<?php

require "vendor/autoload.php";
use app\src\class\UploadFoto;



$upload = new  UploadFoto('foto dois.jpg');


echo $upload->teste();



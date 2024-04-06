<?php
require "vendor/autoload.php";

use app\src\class\Email;
use app\src\class\UploadFoto;


echo UploadFoto::estatico() . "<br>";
// echo UploadFoto::$propriedade;
// echo UploadFoto::PROPRIEDADE;

$email = new Email;

echo Email::send();

?>


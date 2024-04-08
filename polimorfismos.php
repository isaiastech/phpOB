<?php 
require "vendor/autoload.php";

use app\src\class\SendEmail;
use app\src\class\Enviar;
use app\src\class\Mailer;

$email = new Enviar(new Mailer);
echo $email->send();

?>
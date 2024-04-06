<?php 
require "vendor/autoload.php";

use app\src\class\UploadFoto;

$upload = new UploadFoto('arqivo.png');

$upload->validation();
$upload->upload() . "<br>";

echo "Classe abstrata não pode ser instanciada serve somente para extender
métodos dentro de outras classes.";

?>


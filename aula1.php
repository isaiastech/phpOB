<?php
use app\src\class\Pessoa;
use app\src\class\UploadFoto;

$pessoa = new Pessoa;

$pessoa->idade = 45;
$pessoa->nome = "Isaias";
$pessoa->email = "isaias@isaiastech.com.br";

echo $pessoa->dados();

require "vendor/autoload.php";

$upload = new  UploadFoto('foto dois.jpg');

$upload->extension();
$upload->rename();
$upload->upload();

echo $upload->upload();

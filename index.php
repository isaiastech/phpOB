<?php
<<<<<<< HEAD
$pessoa = new Pessoa;

$pessoa->idade = 45;
$pessoa->nome = "Isaias";
$pessoa->email = "isaias@isaiastech.com.br";

echo $pessoa->dados();
=======

require "vendor/autoload.php";
use app\src\class\UploadFoto;



$upload = new  UploadFoto('foto dois.jpg');


$upload->extension();
$upload->rename();
$upload->upload();

echo $upload->upload();


>>>>>>> de273cc02287d0b6f29ebac8b6d46bb258a099cc

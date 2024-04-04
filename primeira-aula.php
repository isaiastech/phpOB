<?php

require "vendor/autoload.php";
use app\src\class\AtividadePessoa;
use app\src\class\Pessoa;
use app\src\class\UploadFoto;

$pessoa = new Pessoa;
$pessoa->idade = 45;
$pessoa->nome = "Isaias";
$pessoa->email = "isaias@isaiastech.com.br";

echo $pessoa->dados() .' <br>';

$pessoa->idade = 36;
$pessoa->nome = "Pedro";
$pessoa->email = "pedro@isaiastech.com.br";

echo $pessoa->dados() .' <br>';

$atividade = new AtividadePessoa;

echo $atividade->andar() .' <br>';
echo $atividade->pular();

$upload = new  UploadFoto('primeirafoto.png');


$upload->extension();
$upload->rename();
$upload->upload();

echo $upload->upload();



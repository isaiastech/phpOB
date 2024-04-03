<?php


class Pessoa
{
    public $idade;
    public $nome;
    public $email;

    public function dados()
    {
        return "Meu nome é {$this->nome}, minha idade é {$this->idade} e meu email é {$this->email}";
    }
}

$pessoa = new Pessoa;

$pessoa->idade = 45;
$pessoa->nome = "Isaias";
$pessoa->email = "isaias@isaiastech.com.br";

echo $pessoa->dados();
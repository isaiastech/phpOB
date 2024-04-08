<?php

namespace app\src\class;

abstract class Banco
{
    public function depositar($valor){
        return "depositando com juros de 0.3";
    }
}

class Itau extends Banco
{
    private $juros = 0.6;

    public function depositar($valor)
    {
        return "depositando no Itaú com jutos {$this->juros} com o valor $valor ";
    }
}

class Bradesco extends Banco
{
    private $juros = 1;

    public function depositar($valor)
    {
        return "depositando com jutos {$this->juros}";
    }
}

$itau = new Itau;
echo $itau->depositar(50);




<?php

namespace app\src\class;

class Construtor
{
    public function __construct(private string $name, private int $age)
    {
        # code...
    }

    public function info()
    {
        return "Meu nome é $this->name e minha idade é $this->age anos." ;
    }
}


<?php

require "vendor/autoload.php";

class Controller
{
    public function make()
    {
        if(!$this->controllerExist())
        {
            throw new Exception("Erro ao criar Controller");
        }

        return 'Controller';
    }

    private function controllerExist()
    {
        return false;
    }

}

try{
    $controller = new Controller;
    $controller->make();
    echo "Controlller criado com sucesso!!";

}catch(Exception $e)
{

    var_dump($e->getMessage());
}

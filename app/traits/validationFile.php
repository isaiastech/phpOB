<?php

namespace app\traits;

trait validationFile
{
    public function validation()
    {
        if(!in_array($this->extension(), $this->extension))
        {
            throw new \Exception("Essa extenção não é aceita");
        }
    }
    protected function teste()
    {
        return "teste";
    }

}
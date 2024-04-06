<?php

namespace app\src\class;

use app\traits\validationFile;

class UploadFoto extends Upload
{
    
    use validationFile;
    
    public $extension = ['png', 'jpg'];
    
    public static $propriedade = "Propriedade Teste";
    const PROPRIEDADE = "Constante Propriedade";

    public static function estatico()
    {
        return "teste";
    }

    public function upload()
    {
        // return "Gerou a foto: {$this->rename()}";
        // return $this->teste();
    }
    
}


<?php

namespace app\src\class;

use app\traits\validationFile;

class UploadFoto extends Upload
{
    
    
    public $extension = ['png', 'jpg'];
    use validationFile;

    public function upload()
    {
        // return "Gerou a foto: {$this->rename()}";
        return $this->teste();
    }
    
}


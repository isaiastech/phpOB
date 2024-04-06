<?php

namespace app\src\class;

class UploadFoto extends Upload
{
    
    
    public $extensions = ['png', 'jpg'];

    public function upload()
    {
        return $this->newName;
    }
    
}


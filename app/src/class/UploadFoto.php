<?php

namespace app\src\class;

class UploadFoto extends Upload
{
    public $file;
    public $newName;
    public $extensions = ['png', 'jpg'];

    public function __construct($file)
    {
        $this->file = $file;
        
    }


    public function extension()
    {
      return pathinfo($this->file,  PATHINFO_EXTENSION);   
    }

    public function rename()
    {
        $uniqId = uniqid(true);
        $this->newName = $uniqId . '.' . $this->extension();

    }

    public function upload()
    {
        return $this->newName;
    }
    
}
<?php

namespace app\src\class;

use app\traits\validationFile;

class Upload
{
    use validationFile;
    private $file;

    public function __construct($file)
    {
        $this->file = $file;
        
    }

    protected function extension()
    {
      return pathinfo($this->file,  PATHINFO_EXTENSION);   
    }

    protected function rename()
    {
        $uniqId = uniqid(true);
       return  $uniqId . '.' . $this->extension();

    }


}


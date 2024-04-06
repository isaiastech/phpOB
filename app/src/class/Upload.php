<?php

namespace app\src\class;

class Upload
{
    private $file;

    public function __construct($file)
    {
        $this->file = $file;
        
    }

    private function extension()
    {
      return pathinfo($this->file,  PATHINFO_EXTENSION);   
    }

    protected function rename()
    {
        $uniqId = uniqid(true);
       return  $uniqId . '.' . $this->extension();

    }


}


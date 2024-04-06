<?php

namespace app\src\class;

class Uploadfile extends Upload
{
    public $extensions = ['zip', 'rar', 'pdf'];

    public function __construct($file)
    {
        parent::__construct($file);
        echo 'Construtor do upload file';
    }

    public function upload()
    {
        return "Gerou o arquivo: {$this->newName}";

    }
    
}
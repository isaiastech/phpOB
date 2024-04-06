<?php

namespace app\src\class;
use app\traits\validationFile;

class Uploadfile extends Upload
{
    use validationFile;

    private $extensions = ['zip', 'rar', 'pdf'];

    public function __construct($file)
    {
        parent::__construct($file);
        echo 'Construtor do upload file';
    }

    public function upload()
    {
        return "Gerou o arquivo: {$this->rename()}";

    }
    
}
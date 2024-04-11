<?php

namespace app\src\class;

class Math
{
    public function __construct($name)
    {
        
    }
    public function nome($name)
    {
        switch($name){
            case 'Isaias':
                echo 'é Isaias';
                break;
            case 'João':
                echo 'é João';
                break;
            default:
            echo 'Não sei meu nome';

        }
    }
}
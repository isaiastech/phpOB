<?php
require "vendor/autoload.php";

interface loginInterface
{
    public function login();
   
}

class login implements loginInterface{
    public function login()
    {
        
    }
}
    
$login = new login;
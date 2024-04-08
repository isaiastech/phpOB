<?php

namespace app\src\class;

interface Enviar
{
    public function send();
 
}

class Swift implements Enviar
{
    public function send()
    {
        return "enviando email com swift";
    }
}

class Mailer implements Enviar
{
    public function send()
    {
        return "enviando email com phpmailer";
    }
}

class SendEmail
{
    private $enviar;
    public function __construct(Enviar $enviar)
    {
        $this->enviar = $enviar;
    }

    public function send()
    {
        return $this->enviar->send();
    }
  
}

$Enviar = new Enviar(new Mailer);
echo $email->send();

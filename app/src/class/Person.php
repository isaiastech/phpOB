<?php

namespace app\src\class;

class Person
{
    private $data = [];
    public function data(null|string $data):null|self
    {
        array_push($this->data, $data);
        return null;
    }

    public function info()
    {
      return  var_dump($this->data);
    }
}

$isaias = new Person;
$isaias->data('Isaias')?->info();

echo Person::class . '<br>';
echo $isaias::class;
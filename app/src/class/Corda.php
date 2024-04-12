<?php
namespace app\src\class;

use Stringable;

class Corda
{
    public function __toString()
    {
        return 'to_string';
    }

   public function myInfo(Stringable $corda){
        return $corda;
    }
}

$corda = new Corda;
echo $corda;

<?php

namespace app\src\class;

class NameArguments
{
 public function info(string $name, bool $isAdmin)
 {
    if($isAdmin)
    {
        return "É administrador";
    }

    return 'Não é administrador';
 } 

}
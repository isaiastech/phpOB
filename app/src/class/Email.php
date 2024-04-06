<?php

namespace app\src\class;

class Email
{
   public static function who()
   {
        return "Isaias";

   } 

   public static function send()
   {
     return self::who();
    //  return static::who();

   }


}
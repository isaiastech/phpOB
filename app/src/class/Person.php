<?php

namespace app\src\class;

class Person extends Hand
{
    private $head;
    private $hand;

   public function __construct()
   {
       $this->head = new Head;
       $this->hand = new Hand;
    
   } 
   public function create(Hand $hand)
   {
      $this->head->create();
      $hand->creat();  
   } 


}


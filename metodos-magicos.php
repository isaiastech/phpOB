<?php 
require "vendor/autoload.php";
/*
 __set , __get, São utilizados em funções.
 __call, _toString, São utilizados para os métodos.
*/

// class ShoppingCart
// {
//     private $get = [];
//     private $product;
//     public function __set($name, $value)
//     {
//         if(!property_exists($this, $name))
//         {
//             $this->get[$name][]=$value;

//         }else{
//             throw new \Exception("Essa propriedade já existe");
//         }

        
//     }
//     public function __get($name)
//     {
//         var_dump($this->get[$name]);
//     }
// }

// $ShoopingCart = new ShoppingCart;
// $ShoopingCart->product = "monitor";
// $ShoopingCart->product = "Placa de video";
// $ShoopingCart->product;


class ShoppingCart
{
    private $get = [];
    private $products = [];
    public function __call($name, $value)
    {
        var_dump($value);
    }

    public function products()
    {
        return $this->products;
    }

    public function __toString()
    {
        return "Chamando o toString";
    }
}

$ShoopingCart = new ShoppingCart;
$ShoopingCart->add("monitor") ;
$ShoopingCart->add('Mouse');
var_dump($ShoopingCart->products());

echo $ShoopingCart;
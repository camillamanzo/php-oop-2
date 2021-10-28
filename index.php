<?php 

    class OnlineShop{

        protected $name;
        protected $delivery = [];

        // construct function to initialize class
        protected function __construct($name, $delivery){

            $this -> name = $name;
            $this -> delivery = $delivery;
        }

        //  function to check if product is available in italy
        protected function availableInItaly(){

            return in_array($italy, $delivery);
        }
    }

    // initialized class user part of OnlineShop
    class User extends OnlineShop{

        protected $userName;
        protected $boughtProducts = [];
        protected $loyalty = false;
        protected $card;
        protected $discount;


        protected function __construct($userName, $boughtProducts, $loyalty, $card, $cart, $discount){

            $this -> userName = $userName;
            $this -> boughtProducts = $boughtProducts;
            $this -> loyalty = $loyalty;
            $this -> card = $card;
            $this -> cart = $cart;
            $this -> discount = $discount;
        }

        protected function isLoyal(){
            return count($boughtProducts) > 10;
        }

    }

?>

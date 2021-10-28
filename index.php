<?php 

    class OnlineShop{

        protected $name;
        protected $delivery = [];

        /**
         * @param string $name 
         * @param string $delivery 
         */

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

        /**
         * @param string $userName 
         * @param string $boughtProducts 
         * @param bool $loyalty 
         * @param int $card 
         */


        protected function __construct($userName, $boughtProducts, $loyalty, $card, $name, $delivery){

            $this -> userName = $userName;
            $this -> boughtProducts = $boughtProducts;
            $this -> loyalty = $loyalty;
            $this -> card = $card;
        }

        protected function isLoyal(){
            return count($boughtProducts) > 10;
        }

    }

    class Product extends OnlineShop{
        protected $category;
        protected $price = [];
        protected $discount;

        /**
         * @param string $category 
         * @param int $priceRange 
         * @param int $discount 
         */


        protected function __construct($category, $price, $discount, $name, $delivery){

            $this -> category = $category;
            $this -> price = $price;
            $this -> discount = $discount;
        }

        protected function hasDiscount(){
            return $price * .2;
        }
    }

?>

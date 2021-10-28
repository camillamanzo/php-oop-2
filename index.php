<?php 

    class OnlineShop{

        protected $name;
        protected $delivery = [];

        protected function __construct($name, $delivery){
            $this -> name = $name;
            $this -> delivery = $delivery;
        }

        protected function available(){

            return in_array($italy, $delivery);
        }
    }

?>

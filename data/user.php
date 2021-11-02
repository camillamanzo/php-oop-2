<?php 
    class User {
        protected $userName;
        protected $cards = [];
        protected $cart = [];

        public function __construct($userName, $cards, $cart)
        {
            $this->userName = $userName;
            $this->cards = $cards;
            $this->cart = $cart;
        }

        public function getUserName(){
            return $this-> userName;
        }

        public function setUserName($userName){
            $this-> userName = $userName;
        }

        public function getCards(){
            return $this-> cards;
        }

        public function setCards($cards){
            $this-> cards = $cards;
        }

        public function getCart(){
            return $this-> cart;
        }

        public function setCart($cart){
            $this-> cart = $cart;
        }

        public function addCard($card){
            $this->cards[] = $card;
        }
        
        public function addToCart($product){
            $this->cart[] = $product;
        }

        public function getTotalPrice(){
            $totalPrice = 0;
            foreach($this->cart as $product){
                $totalPrice += $product->getPrice();
            }
        }
    }

    class Premium {
        protected $discount;

        public function __construct($discount, $userName, $cards, $cart)
        {
            $this->discount = $discount;

            parent::__construct($userName, $cards, $cart);
        }

        public function getDiscount(){
            return $this-> discount;
        }

        public function setDiscount($discount){
            $this-> discount = $discount;
        }

        public function getmMyDiscount(){
            $this->price = $price * (100 - $discount);
        }
    }
?>

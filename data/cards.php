<?php 
    class Card {
        protected $type;
        protected $name;

        public function __construct($type, $name)
        {
            $this->type = $type;
            $this->name = $name;
        }

        public function gettype(){
            return $this-> type;
        }

        public function settype($type){
            $this-> type = $type;
        }

        public function getName(){
            return $this-> name;
        }

        public function setName($name){
            $this-> name = $name;
        }
    }

    class creditCard extends Card{
        protected $number;

        public function __construct($number, $type, $name)
        {
            $this->number = $number;

            parent::__construct($type, $name);
        }

        public function getnumber(){
            return $this-> number;
        }

        public function setnumber($number){
            $this-> number = $number;
        }
    }
?>

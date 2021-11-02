<?php 

    class Product {

        protected $name;
        protected $price;
        protected $description;
        protected $picture;

        public function __construct($name, $price)
        {
            $this->name = $name;
            $this->price = $price;
        }

        public function getName(){
            return $this-> name;
        }

        public function setName($name){
            $this-> name = $name;
        }

        public function getPrice(){
            return $this-> price;
        }

        public function setPrice($price){
            $this-> price = $price;
        }

    }

    class Book extends Product{

        protected $genre;
        protected $bookId;

        public function __construct($genre, $bookId, $name, $price)
        {
            $this->genre = $genre;
            $this->bookId = $bookId;

            parent::__construct($name, $price);
        }

        public function getGenre(){
            return $this-> name;
        }

        public function setGenre($genre){
            $this-> genre = $genre;
        }

        public function getBookId(){
            return $this-> getBookId;
        }

        public function setBookId($bookId){
            $this-> bookId = $bookId;
        }
    }

?>
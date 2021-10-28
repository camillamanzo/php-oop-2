<?php 

    class Product {

        protected $name;
        protected $price;
        protected $description;
        protected $picture;


        public function __construct($name, $price, $description, $picture){

            $this->name = $name;
            $this->price = $price;
            $this->description = $description;
            $this->picture = $picture;

        }
    }

    class UsedProduct extends Product{
        // ::parent
    }

    class Cart {

        protected $products = [];

        public function getPrice(){
            
            foreach ($this->products as $product){
                $this->$price += $price;
            } return $price;
        } 

        public function addProduct($product){
            array_push($this->products, $product);
        }
    }
?>

<?php 
    $scienceBook = new Product ('Einstein', 20, 'Book abount Einstein', 'noPic');
    $book2 = new Product ('ciao', 23, 'Book abount Ciao', 'Pic');
    $book3 = new Product ('vero', 30, 'Book abount vero', 'noPic');
    var_dump($scienceBook, $book2, $book3); 


    $newCart = new Cart ();
    var_dump($newCart);

    $newCart -> addProduct($scienceBook);
    $newCart -> addProduct($book2);
    $newCart -> addProduct($book3);
    var_dump($newCart);
    var_dump($newCart -> getPrice());


?>


<?php 
    require_once __DIR__ . '/data/cards.php';
    require_once __DIR__ . '/data/product.php';
    require_once __DIR__ . '/data/user.php';
    require_once __DIR__ . '/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shop</title>
</head>
<body>
    <h1>My Online Book Store</h1>
    <h2>Clients:</h2>

    <hr>

    <?php foreach($users as $user){ ?>

        <h3>Name: <?= $user->getUserName() ?></h3>

        <?php foreach($user->getCart() as $product){ ?>
            <h4>Cart: <?= $product->getName() ?></h4>
        <?php } ?>

        <?php foreach($user->getCards() as $cardElement){ ?>
            <h4>Card: <?= $cardElement->getNumber() ?></h4>
        <?php } ?>

        <hr>

    <?php } ?>

    <hr>

    <h2>Products:</h2>

    <hr>

    <?php foreach($books as $book){ ?>

        <h3>Title: <?= $book->getName() ?></h3>
        <h4>Genre: <?= $book->getGenre() ?></h4>
        <h4>Price: <?= $book->getPrice() ?> $</h4>
        <hr>

    <?php } ?>

    
    
</body>
</html>
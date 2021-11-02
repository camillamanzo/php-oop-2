<?php 
    require_once __DIR__ . '/data/cards.php';
    require_once __DIR__ . '/data/product.php';
    require_once __DIR__ . '/data/user.php';
?>

<?php 

    $bookOne = new Book('Non-fiction', '9781448190690', 'Sapiens', 35);
    $bookTwo = new Book('Novel', '9783630620930', 'The master and Margarita', 50);
    $books = [$bookOne, $bookTwo];

    $userOne = new Premium(20, 'BookWarm');
    $userTwo = new Premium(15, 'ILoveBooks');
    $users = [$userOne, $userTwo];

    $cardOne = new fideltyCard(203435231,'American Books' , 'MyBooks');
    $cardTwo = new fideltyCard(152342513,'Master Books' , 'ILoveBooks');
    $cards = [$cardOne, $cardTwo];

    $userOne->addCard($cardOne);
    $userTwo->addCard($cardTwo);

    $userOne->addToCart($bookOne);
    $userTwo->addToCart($bookTwo);

?>


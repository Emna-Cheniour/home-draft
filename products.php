<?php
session_start();
include_once('autoload.php');
var_dump($_POST);
$cartRep = new CartRepository();
$cartProductRep = new CartProductRepository();
$wishProductRep = new WishProductRepository();
$shop = $_POST['shopping'];
$wished = $_POST['wish'];
if ($wished) {
    $wishProductRep->insert(array('userId' => $_SESSION['user'], 'productId'=>$_POST['product']));
} else {

    $wishProductRep->deleteTwo('userId',  $_SESSION['user'], 'productId', $_POST['product']);
}


// /*We check the existense of the product in the cart table if not we add it else we remove it and add it with the new info*/

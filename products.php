<?php
session_start();
var_dump($_SESSION);
include_once ('autoload.php');

$cartRep= new CartRepository();
$shop=$_POST['shopping'];

if($_POST['order']=="add"){
    $_SESSION['order']= $_SESSION['order']+1;
    if($_SESSION['order']==1){
        $_SESSION['orderId']=$cartRep->insert(array('status'=>'en cours'));
    }
}
else{
    $_SESSION['order']=$_SESSION['order']-1;
    if($_SESSION['order']==0){
        $cartRep->delete(array('id'=> $_SESSION['orderId']));
        unset($_SESSION['orderId']);
    }
}


var_dump($_SESSION);

/*We check the existense of the product in the cart table if not we add it else we remove it and add it with the new info*/

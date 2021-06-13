<?php
require_once 'autoload.php';

$rp =new SpecialistRepository();
$rp->insertSpecialist(array("lastName" => 'salut', "firstName" => 'toi' , "email" => 'alo' , "address" => 'aloo' , "description" => 'bma', "phoneNumber" => 'lala',"profession" => 'pro'));
$wishProductRep = new WishProductRepository();
$wishProductRep->deleteTwo('productId','28','userId','nawres04');

<?php
require_once 'autoload.php';

$wishProductRep = new WishProductRepository();
$wishProductRep->deleteTwo('productId','28','userId','nawres04');

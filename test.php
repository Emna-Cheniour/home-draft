<?php 
require_once 'autoload.php';

$prRep= new ProductRepository();
$minPrice= $prRep->getProducts(10,30,'price','ASC');

var_dump($minPrice);

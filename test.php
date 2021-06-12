<?php 
require_once 'autoload.php';
$specialist = new ProductRepository();
$result=$specialist->findOneBy(array('name'=>"p"));
var_dump($result['id']);
//  $specialist = new UserRepository();
//  $specialist->insert(array("username"=>"c","password"=>"hi","email"=>"hh"));

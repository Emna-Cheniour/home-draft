<?php
require_once 'autoload.php';

$rp =new ProductRepository();
$result= $rp->update(array('where'=>array("id"=>28),'value'=>array('price'=>35,'promotion'=>5)));


var_dump($result);

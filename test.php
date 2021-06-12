<?php
require_once 'autoload.php';

$cartRep = new CartRepository();
$result=$cartRep->insert(array('status'=>'en cours'));
echo $result;

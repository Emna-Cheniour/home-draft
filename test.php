<?php 
require_once 'autoload.php';
$specialist = new SpecialistRepository();
$result= $specialist->findByNumbered(array('firstName'=>'nawres'),4,0);
var_dump($result);

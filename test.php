<?php 
require_once 'autoload.php';
$specialist = new SpecialistRepository();
$specialist->update(array('value'=>array('firstName','wala'), 'where'=>array('id'=>1)));
?>
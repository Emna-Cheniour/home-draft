<?php 

include_once 'autoload.php';
$user=new UserRepository();
$infoCount=3;
$query1=$user->findByUsername($_SESSION['user']);
foreach($query1 as $key => $val) {
  if(!empty($val) && $key!='id' && $key!='username' && $key!='email' && $key!='password'){
    $infoCount++;
  }
}
echo $infoCount;

?>
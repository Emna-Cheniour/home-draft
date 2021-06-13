<?php 

include_once 'autoload.php';
$user=new UserRepository();
$infoCount=3;
$username=$_SESSION['user'];
$query1=$user->findBy(array('username' => $username ));

foreach($query1 as $key => $val) {
  if( $key!='username' && $key!='email' && $key!='password'){
    $infoCount++;
  }
}

?>
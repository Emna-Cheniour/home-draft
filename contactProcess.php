<?php 

session_start();
include_once ("autoload.php");

$users = new UserRepository();

if ( empty($_POST['adresse'])  &&  empty($_POST['telephone']) ) {

  $_SESSION['contactError']='Veuillez vérifier les informations saisies' ;
  $_SESSION['page']='contact';
  $_SESSION['pageIcon']='active';



} else {
  
    if(isset($_POST['adresse']) && !(empty($_POST['adresse']))){
      $adresse=$_POST['adresse'];
      $users->update('adresse', $adresse);
    }

    if(isset($_POST['telephone']) && !(empty($_POST['telephone']))){
      $telephone=$_POST['telephone'];
      $users->update('telephone', $telephone);
    }
}


header('location:profile.php');
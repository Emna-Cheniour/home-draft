<?php 

session_start();
include_once ("autoload.php");

$users = new UserRepository();



if (isset($_POST['adresse']) && !(empty($_POST['adresse'])) && isset($_POST['telephone']) && !(empty($_POST['telephone']))) {
  $adresse=$_POST['adresse'];
  $users->update('adresse', $adresse);
  
  $telephone=$_POST['telephone'];
  $users->update('telephone', $telephone);
}
else {
  $_SESSION['contactError']='Veuillez vérifier les informations saisies';
  $_SESSION['page']='contact';
  $_SESSION['pageIcon']='active';
}

header('location:profile.php');
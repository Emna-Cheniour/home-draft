<?php 

session_start();
include_once ("autoload.php");

// first Form: Profile Form 
$users = new UserRepository();


if (isset($_POST['firstname']) && !(empty($_POST['firstname'])) && isset($_POST['lastname']) && !(empty($_POST['lastname'])) && isset($_POST['birthday']) && isset($_POST['sexe']) && !(empty($_POST['sexe'])) ) {
  $firstname=$_POST['firstname'];
  $users->update('firstname', $firstname);

  $lastname=$_POST['lastname'];
  $users->update('lastname', $lastname);

  $birthday=$_POST['birthday'];
  $users->update('birthday', $birthday);

  $sexe=$_POST['sexe'];
  $users->update('sexe', $sexe);

}

else {
  $_SESSION['profileError']='Veuillez vérifier les informations saisies';
  $_SESSION['page']='profile';

}

header('location:profile.php');
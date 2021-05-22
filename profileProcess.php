<?php 

session_start();
include_once ("autoload.php");

// first Form: Profile Form 
$users = new UserRepository();


if ((empty($_POST['firstname'])) && (empty($_POST['lastname'])) && (empty($_POST['sexe'])) ) {

  $_SESSION['profileError']='Veuillez vérifier les informations saisies';
  $_SESSION['page']='profile';

}

else {

  if (isset($_POST['firstname']) && !(empty($_POST['firstname'])) ){
    $firstname=$_POST['firstname'];
    $users->update('firstname', $firstname);
  }
  if(isset($_POST['lastname']) && !(empty($_POST['lastname']))){
    $lastname=$_POST['lastname'];
    $users->update('lastname', $lastname);
  } 
  if(isset($_POST['birthday']) ){
    
    $birthday=$_POST['birthday'];
    $users->update('birthday', $birthday);
  }
  if(isset($_POST['sexe']) && !(empty($_POST['sexe'])) ) {
  
    $sexe=$_POST['sexe'];
    $users->update('sexe', $sexe);
  }
  
  }




header('location:profile.php');
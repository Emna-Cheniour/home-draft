<?php 

session_start();
include_once ("autoload.php");

// first Form: Profile Form 
$users = new UserRepository();


if ((empty($_POST['firstName'])) && (empty($_POST['lastName'])) && (empty($_POST['sex'])) ) {

  $_SESSION['profileError']='Veuillez vérifier les informations saisies';
  $_SESSION['page']='profile';

}

else {

  if (isset($_POST['firstName']) && !(empty($_POST['firstName'])) ){
    $firstname=$_POST['firstName'];
   
  }
  if(isset($_POST['lastName']) && !(empty($_POST['lastName']))){
    $lastname=$_POST['lastname'];
   
  } 
  if(isset($_POST['birthday']) ){
    
    $birthday=$_POST['birthday'];
  
  }
  if(isset($_POST['sex']) && !(empty($_POST['sex'])) ) {
  
    $sexe=$_POST['sex'];
  
  }
  
  }




header('location:profile.php');
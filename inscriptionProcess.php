<?php
session_start();
include_once ("autoload.php");



  if( (isset($_POST['username']))  && (isset($_POST['email']))  && (isset($_POST['password']))){
    
$username=$_POST['username'];
$email=$_POST['email']; //  htmlSpecialchar($_POST['username'])
$password=$_POST['password'];

      if(empty($username) || empty($email) || empty($password)){
        $_SESSION['requiredFieldsError']='Veuillez remplir tous vos informations';
        $_SESSION['page']='inscription';
        header('location:login_SignUp.php');
      }


      
     /* else if (strlen($password) <8){
        $_SESSION['shortPwdError']='Faible mot de passe.Veuillez réessayer';
        header('location:login_SignUp.php');
      }*/



      else{
        $user=new UserRepository();
        $query1=$user->findByUsername($username);
        $query2=$user->findByEmail($email);

        if($query1){
          $_SESSION['usedUsername']="Nom d'utilisateur n'est pas disponible";
          header('location:login_SignUp.php');
        }
        else if($query2){
          $_SESSION['usedEmail']="Cette adresse est déjà existante";
          header('location:login_SignUp.php');
        }
        else {
          
          $user = new UserRepository();
          $request = "INSERT INTO ".$user->tableName. "(username,email,password) VALUES ('".$username."','".$email."','".$password."')";
          
        $response=$user->bd->prepare($request);
        $response->execute();
        $_SESSION['user']=$username;
        header('location:acceuil.php');
          
        }

        

      }
  }


?>
<?php
session_start();
include_once ("autoload.php");



  if( (isset($_POST['username']))  && (isset($_POST['email']))  && (isset($_POST['password'])) && (isset($_POST['confirmedPassword']))){
    
      $username=$_POST['username'];
      $email=$_POST['email']; 
      $password=$_POST['password'];
      $confirmedPassword=$_POST['confirmedPassword'];

      if(empty($username) || empty($email) || empty($password)){
        $_SESSION['inscriptionError']='Veuillez remplir toutes vos informations';
        $_SESSION['page']='inscription';
        header('location:login_SignUp.php');
      }


      
      else if (strlen($password) <8){
        $_SESSION['inscriptionError']='Faible mot de passe.Veuillez réessayer';
        $_SESSION['page']='inscription';
        header('location:login_SignUp.php');
      }
      else if ($confirmedPassword!=$password){
        $_SESSION['inscriptionError']='Veuillez vérifier votre mot de passe';
        $_SESSION['page']='inscription';
        header('location:login_SignUp.php');
      }



      else{
        $user=new UserRepository();
        $query1=$user->findByUsername($username);
        $query2=$user->findByEmail($email);

        if($query1){
          $_SESSION['inscriptionError']="Nom d'utilisateur n'est pas disponible";
          $_SESSION['page']='inscription';
          header('location:login_SignUp.php');
        }
        else if($query2){
          $_SESSION['inscriptionError']="Cette adresse est déjà existante";
          $_SESSION['page']='inscription';
          header('location:login_SignUp.php');
        }
        else {
          
            $user = new UserRepository();
            $user->addUser($username,$email,$password);
            $_SESSION['user']=$username;
            header('location:acceuil.php');
        }
          
          
        }

        

      }
  


?>
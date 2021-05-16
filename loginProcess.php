<?php
session_start();
include_once('autoload.php');



if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (!empty($username) && !empty($password)) {
        $user = new UserRepository();
        $response1 = $user->findByUsernamePwd($username, $password);
       // $response2 = $user->findByEmailPwd($username, $password);
        
        if ($response1 || $response2) {
            $_SESSION['user']=$username;
            header('location:acceuil.php');
        } else {
            $_SESSION['IncorrectFieldsError']="Veuillez vérifier vos informations personnelles.";
            header('location:login_SignUp.php');
        }
    } else {
        $_SESSION['IncorrectFieldsError']="Veuillez saisir votre nom d'utilisateur et mot de passe";
        header('location:login_SignUp.php');
    }
}
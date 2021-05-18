<?php 

session_start();
include_once ("autoload.php");

// first Form: Profile Form 
$users = new UserRepository();


if (isset($_POST['firstname']) && !(empty($_POST['firstname']))) {
  $firstname=$_POST['firstname'];
  $users->update('firstname', $firstname);
}
if (isset($_POST['lastname']) && !(empty($_POST['lastname']))) {
  $lastname=$_POST['lastname'];
  $users->update('lastname', $lastname);
}
if (isset($_POST['birthday']) && !(empty($_POST['birthday']))) {
  $birthday=$_POST['birthday'];
  $users->update('birthday', $birthday);
}
if (isset($_POST['sexe']) && !(empty($_POST['sexe']))) {
  $sexe=$_POST['sexe'];
  $users->update('sexe', $sexe);
}

if (isset($_FILES['profileImg']) && !empty($_FILES['profileImg'])) {
  if ($_FILES['profileImg']['size'] <= 524288) {

    $img_blob = file_get_contents($_FILES['profileImg']['tmp_name']);
    $users->updatePic('profileImg', $img_blob);
  } else {
    $_SESSION['imageSizeError'] = 'Image size is too big !try again ...';
  }
}
header('location:profile.php');


// Second Form: contact Form 
$users = new UserRepository();


if (isset($_POST['adresse']) && !(empty($_POST['adresse']))) {
  $adresse=$_POST['adresse'];
  $users->update('adresse', $adresse);
  
}
if (isset($_POST['telephone']) && !(empty($_POST['telephone']))) {
  $telephone=$_POST['telephone'];
  $users->update('telephone', $telephone);
}

if (isset($_POST['password']) && !(empty($_POST['password']))) {
  $password=$_POST['password'];
  $users->update('password', $password);
}

header('location:profile.php');




?>
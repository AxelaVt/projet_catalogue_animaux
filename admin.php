
<?php
session_start();
require('Users.php');
require('Animaux.php');
require('controller.php');




//var_dump($_SESSION);
if ($_SESSION['admin'] !== "true" ) {
  echo "devez vous connecter";
  //header("location:view/connexionView.php");
  header("Refresh: 1;URL=view/connexionView.php");
}

if($_SESSION['username'] !== ""){
    $user = $_SESSION['username'];
    // afficher un message
}


if(isset($_GET['deconnexion']) && $_GET['deconnexion']==true){
  session_unset();
  session_destroy();
  header("location:index.php");
}


$adms = getUsersList($user);
$animals = getAnimalsListAdmin($user);
require('view/adminView.php');

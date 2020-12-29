
<?php
session_start();
require('controller.php');
require('Users.php');

if(isset($_POST['username']) && isset($_POST['password'])){   //username et password saisi
  // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
  // pour éliminer toute attaque de type injection SQL et XSS
  $username = htmlspecialchars($_POST['username']);
  $password = htmlspecialchars($_POST['password']);

   echo $username;
   echo $password;
  
    var_dump($username);
    var_dump($password);

  if($username !== "" && $password !== ""){
     $user = userConnexion($username, $password);
     
     var_dump($user);
     if ($user === 'true') {
      $_SESSION['username'] = $username;
      //$_SESSION['password'] = password_hash($password, PASSWORD_DEFAULT);//hashage du mot de passe;
      $_SESSION['admin'] = 'true';
      //header('Location: admin.php');
      header("Refresh: 1; URL=admin.php");
      }
      else
      {
         header('Location: view/connexionView.php?erreur=1'); // utilisateur ou mot de passe incorrect

      }
  }
  else
  {
     header('Location: view/connexionView.php?erreur=2'); // utilisateur ou mot de passe vide
  }
}

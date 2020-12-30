
<?php


//en poo class Animaux,
function animalsList()
{
  $animalsManager = new Animaux(); // Création d'un objet
  $animals = $animalsManager->get_unarchived();  // Appel la fonction qui renvoie toutes les données sur les animaux qui ne sont pas archivés en bdd

  require('view/accueilView.php');

}

//$user = utilisateur connecté
function getUsersList($user)
{
  $usersManager = new Users();
  $adms = $usersManager->get_all();
  return $adms;

}

// uniquement si user = admin
function getAnimalsListAdmin($user)
{
  $animalsManager = new Animaux(); // Création d'un objet
  $animals = $animalsManager->get_all();  // Appel la fonction qui renvoie toutes les données sur les animaux en bdd
  return $animals;
}

function animalAdd($name, $type, $family, $alim, $description, $photo)
{
  $animal = new Animaux();
  $animal->add($_POST['name']);

  $id = $animal->get_name($_POST['name'])['id'];
  $animal->set_name($id, $_POST['name']);
  $animal->set_type($id, $_POST['type']);
  $animal->set_family($id, $_POST['family']);
  $animal->set_alim($id, $_POST['alim']);
  $animal->set_description($id, $_POST['description']);
  $animal->set_photo($id, $photo);

  require('view/addView.php');

}

function animalDelete($id, $user)
{
  $animalsManager = new Animaux();
  $animal = $animalsManager->remove($_GET['id']);

  getAnimalsListAdmin($user);
}

function animalArchived($id, $user){
  $animalsManager = new Animaux();
  $animal = $animalsManager->get_id($id);

  if ($animal['archived'] === 'false') {
    $animalsManager->archive($animal['id']);
  } else {
    $animalsManager->unarchive($animal['id']);
  }
  getAnimalsListAdmin($user);
}

function animalChange($id)
{
  $animalsManager = new Animaux;
  $animal = $animalsManager->get_id($id);
  // var_dump($animal);
  // var_dump($_POST['submit']);
  if (isset($_POST['submit'])) {
    if (empty($_FILES['image']['tmp_name'])===false) {
      $file = $_FILES['image'];
      $photo = file_get_contents($file['tmp_name']);
    }

    $animalsManager->set_name($id, $_POST['name']);
    $animalsManager->set_type($id, $_POST['type']);
    $animalsManager->set_family($id, $_POST['family']);
    $animalsManager->set_alim($id, $_POST['alim']);
    $animalsManager->set_description($id, $_POST['description']);
    if (isset($photo)===true) {
      $animalsManager->set_photo($id, $photo);
    }
  }
  // var_dump($animal);
  require('view/changeView.php');
}


function animalPage($id)
{
  $animalsManager = new Animaux();
  $animal = $animalsManager->get_id($id);
  $animals = $animalsManager->get_unarchived();  // Appel la fonction qui renvoie toutes les données sur les animaux qui ne sont pas en status "archivé" en bdd

    require('view/animalView.php');
}

//change password
function changePassword($password, $username)
{
  $usermanager = new Users();
  $passwordbdd = $usermanager->get_username($username); //recup les données associées au user connecté
  $password_hashed = password_hash($password, PASSWORD_BCRYPT);
  $usermanager->set_password($passwordbdd['id'], $password_hashed);// enregistre le nouveau password en lien ave l'id connecté
  $newpasswordbdd = $usermanager->get_username($username); // recupère les données associées au user connecté
  if(password_verify($password, $newpasswordbdd['password'])){
    return 'true';
  }else{
    return 'false';
  }
}

function userConnexion($username, $password)
{
  $usermanager = new Users();
  $passwordbdd = $usermanager->get_username($username);
    if(password_verify($password, $passwordbdd['password'])){   // fonction password_verify (mdp saisi, mdp db)
      return 'true';
      } else {
      return 'false';
      }
}

// fonction filtrer par alimentation
function animalsAlim($alim){
  $animalsManager = new Animaux();
  $animals = $animalsManager->get_unarchived();
  //$animals = $animalsManager->get_alim($alim);  c
  $recherche = 'alimentation';
  $value= $alim;

  require('view/animalSortView.php');

}

function animalsFamily($family){
  $animalsManager = new Animaux();
  $animals = $animalsManager->get_unarchived();
  //$animals = $animalsManager->get_family($family); //ne fonctionne pas??
  $recherche = 'family';
  $value = $family;
  require('view/animalSortView.php');

}

function animalsType($type){
  $animalsManager = new Animaux();
  $animals = $animalsManager->get_unarchived();
  //$animals = $animalsManager->get_type($type);  //ne fonctionne pas??
  $recherche = 'type';
  $value = $type;
  require('view/animalSortView.php');

}


?>

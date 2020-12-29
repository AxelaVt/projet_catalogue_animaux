<?php
session_start();
require('controller.php');
require('Animaux.php');


$file = $_FILES['image'];
$photo = file_get_contents($file['tmp_name']);
if(!empty($_POST['name'])) {
  echo "veuillez compléter les champs";
  animalAdd($_POST['name'], $_POST['type'], $_POST['family'], $_POST['alim'],$_POST['description'],$photo );
 }
header('Location: admin.php');

?>



<?php
session_start();
require('controller.php');
require('Animaux.php');
require('Users.php');

$user = $_SESSION['username'];
animalDelete($_GET['id'], $user);

$adms = getUsersList($user);
$animals = getAnimalsListAdmin($user);
require('view/adminView.php');

?>

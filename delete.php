

<?php
session_start();
require('controller.php');
require('Animaux.php');

$user = $_SESSION['username'];
animalDelete($_GET['id'], $user);

?>

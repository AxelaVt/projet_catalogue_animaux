

<?php
session_start();
require('controller.php');
require('Animaux.php');


$user=$_SESSION['username'];
animalArchived($_GET['id'],$user);

?>

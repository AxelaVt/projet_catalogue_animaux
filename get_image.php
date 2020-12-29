<?php

require "Animaux.php";

$animal = new Animaux();

echo $animal->get_id($_GET['id'])['photo'];

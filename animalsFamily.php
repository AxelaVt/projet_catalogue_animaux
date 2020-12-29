<?php

require('controller.php');
require('Animaux.php');

$family = $_GET['family'];
animalsFamily($family);

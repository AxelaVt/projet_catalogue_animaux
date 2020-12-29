
<?php
// require('controller.php');
// require('Animaux.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  </head>
  <header>
    <div id="sidebar-container">
      <div class="sidebar-logo">
        Projet Bestiaire
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="color: #1A1A1A; left:80px;">&times;</a>
      </div>
      <ul class="sidebar-navigation">
        <div class="search-container">
          <form action="/action_page.php">
            <input type="text" placeholder="Rechercher.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
        </div>
        <li class="header">Navigation</li>
        <li>
          <a href="index.php">
            <i class="fa fa-home" aria-hidden="true"></i> Accueil
          </a>
        </li>
        <li>
          <a href="view/connexionView.php#">
            <i class="fa fa-tachometer" aria-hidden="true"></i> Admin
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-tachometer" aria-hidden="true"></i> FAQ
          </a>
        </li>
        <li class="header">Catégories</li>
        <li>
          <a href="#">
            <i class="fa fa-users" aria-hidden="true"></i> Alimentation
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-cog" aria-hidden="true"></i> Zone Géographique
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-info-circle" aria-hidden="true"></i> Famille
          </a>
        </li>
      </ul>
    </div>
  </header>
  <body>
    <div class="hero">
      <div class="overlay">
        <div id="main">
          <button class="openbtn" onclick="openNav()">&#9776; </button>
        </div>
      </div>
          <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="media/wildlife.mp4" type="video/mp4">
            </video>
      <div class="container h-100">
        <div class="d-flex h-100 text-center align-items-center">
          <div class="w-100 text-white" style="margin-bottom: 85vh;">
            <img src="icons/logo1.png">
            <h1 class="display-3">Projet Bestiaire</h1>
            <p class="lead mb-0">Ceci est la vidéo d'accueil du projet bestiaire. Ce site a pour but de donner une description simple et claire sur la plupart des animaux qui vivent sur la planète.</p>
          </div>
        </div>
      </div>
    </div>
    <section class="ong" > <!-- Page ong -->
      <div class="container-">
        <!-- <span class="border-animation" >
          <div class="border-animation__inner"> -->
        <div class="row">
            <div class="col-sm-12 col-md-6 mb-4">
            <!-- <img class="scrollout" src="media/21.jpg"> -->
            </div>
            <div class="col-sm-12 col-md-6">
              <div class=" border-5 border-left border-dark mb-5 pl-4"> <h3 class="scrollout"> SOUTENONS LA CAUSE ANIMALE </h3> </div>
              <div>
              <p class=" scrollout">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. <br><br>
              The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' <p>
              </div>
              <button type="button" class="btn btn-danger mt-3 text-dark scrollout">En savoir plus</button>
            </div>
          </div>
    <!-- </div></span> -->
        </div>
    </section> <!-- Fin ong -->
<section>
  <div class="section-2">
    <div class="title">
      <div class="content">
        <h1> Catégories</h1>
        <p> Retrouvez ici l'animal que vous souhaitez selon son cadre géographique, son espèce, son régime alimentaire ou tout simplement par son nom. </p>
      </div>
    </div>
      <div class="container">
    			<div class="box">
    				<a href="#"><img src="media/whitewolf.jpg"></a>
            <div class="box-overlay">
              <div class="text">Hello World
              </div>
            </div>
    			</div>
    			<div class="box">
    			<a href="#"><img src="media/turtle.jpg"> </a>
    			</div>
    			<div class="box">

    				<a href="#"><img src="media/cerf.jpg"></a>
    			</div>
    			<div class="box">
    				<a href="animal.php?id=5"><img src="media/lion.jpg"></a>
    	</div>
      <div class="box">
        <a href="#"><img src="media/bears.jpeg"></a>
      </div>
      <div class="box">
        <a href="#"><img src="media/chat.jpg"></a>
      </div>
      <div class="box">
        <a href="#"><img src="media/tigre.jpg"></a>
      </div>
      <div class="box">
        <a href="#"><img src="media/panthere.jpg"></a>
      </div>
      <div class="box">
        <a href="#"><img src="media/lynx.jpg"></a>
      </div>
      <div class="box">
        <a href="#"><img src="media/leopard.jpg"></a>
      </div>
    </div>
  </div>
</section>
<section class="contact">
<div class="formulaire">
  <h4> Nous contacter </h4>
  <form action="" method="get" class="form-example">
    <div class="form">
      <input type="text" name="name" id="name" placeholder="Veuillez indiquer votre nom" style="width: 512px;" required>
    </div>
    <div class="form">
      <input type="email" name="email" id="email" placeholder="Veuillez indiquer votre email" style="width: 512px;" required>
    </div>
    <div class="form">
      <input type="text" name="message" id="message" placeholder="Veuillez indiquer votre message" style=" width: 512px; height:256px;" required>
    </div>
    <div class="form-button">
      <input type="submit" value="Envoyer">
    </div>
  </form>
</div>
<section>
<script> ScrollReveal().reveal('.scrollout', { delay: 2000 }); </script>
<script src="scrollout.js"></script>
<script src="https://unpkg.com/scrollreveal"></script>
<script src="index.js"></script>
</body>
</html>

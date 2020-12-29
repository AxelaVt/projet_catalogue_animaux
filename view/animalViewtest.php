

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

  <header>

    <div id="sidebar-container">
      <div class="sidebar-logo">
        Projet Bestiaire
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="color: #1A1A1A; left:80px;">&times;</a>
      </div>
      <ul class="sidebar-navigation">
        <li class="header">Navigation</li>
        <li>
          <a href="index.php">
            <i class="fa fa-home" aria-hidden="true"></i> Accueil
          </a>
        </li>
        <li>
          <a href="#">
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
<section>


    <?php
      // $conn = mysqli_connect("localhost", "root", "", "catalog_animaux");
      // if ($conn-> connect_error) {
      //   die("Connection failed:" . $conn-> connect_error);
      // }
      //
      // $sql = "SELECT id, name, type, family, alimentation, description, photo FROM animaux";
      // $result = $conn-> query($sql);
     ?>

  <div class="card bg-dark text-white">
  <span class="grey-hover">  <img src="media/felides.jpg" class="card-img" alt="..." style="opacity:0.8;">      </span>
    <div class="card-img-overlay">
      <div id="main">
        <button class="openbtn" onclick="openNav()">&#9776; </button>
      </div>
      <h1 class="card-title-1">Les félidés</h1>
      <a class="circular" href="#"></a>
      <a class="circular-1" href="#"></a>
      <a class="circular-2" href="#"></a>
      <a class="circular-3" href="#"></a>
      <a class="circular-4" href="#"></a>
      <a class="circular-5" href="#"></a>
      <a class="circular-6" href="#"></a>
    </div>
  </div>

  <?php
    // $id = 5;
    // $animal_manager= new Animaux();
    // $animal = $animal_manager->get_id($id);
   ?>

  <div class="fiche card mb-3 bg-dark " style="max-width: 80%;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 card-img" src="get_image.php?id=<?php echo $id ?>" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 card-img" src="media/cerf.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 card-img" src="media/whitewolf.jpg" alt="Third slide">
          </div>
        </div>
      </div>
    </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title text-white"><?php echo $animal['name']; ?></h5>
          <!-- <h6 class="card-subtitle text-white">Panthera leo</h5> -->
            <a href="../dna.png" data-toggle="popover"  class="location"></a>
            <a href="../globe.png" data-toggle="popover"  class="species"></a>
            <a href="../pet.png#" data-toggle="popover"  class="family"></a>
            <a href="../food.png" data-toggle="popover"  class="food"></a>
          <p class="card-text text-white">Localisation: Savane africaine</p>
          <p class="card-text text-white">Famille : <?php echo $animal['family']; ?></p>
          <p class="card-text text-white">Espèce : <?php echo $animal['type']; ?></p>
          <p class="card-text text-white">Régime alimentaire : <?php echo $animal['alimentation']; ?></p>
          <p class="card-text text-white"><small class="text-muted"><?php echo $animal['description']; ?></small></p>
        </div>
      </div>
    </div>
  </div>


  <div class="more">
    <div class="title-2">
      <h2>Retrouvez également</h2>
    </div>
  </div>
  <div class="container">
    <div class="box">
    <img src="media/whitewolf.jpg">
      <div class="box-overlay">
        <div class="text">Hello World
        </div>
      </div>
    </div>
    <div class="box">
      <img src="media/turtle.jpg">
    </div>
    <div class="box">
      <img src="media/cerf.jpg">
    </div>
    <div class="box">
      <img src="media/chat.jpg">
    </div>
  <div class="box">
  <img src="media/leopard.jpg">
    </div>
  <div class="box">
    <img src="media/lynx.jpg">
  </div>
  <div class="box">
    <img src="media/panthere.jpg">
  </div>
  <div class="box">
    <img src="media/tigre.jpg">
  </div>
</div>


</section>




  <script src="index.js"></script>
  </body>
</html>

<?php
include "headerView.php";
  ?>

<body>

<section>
  <div class="card bg-dark text-white">
  <span class="grey-hover">  <img src="media/felides.jpg" class="card-img" alt="..." style="opacity:0.8;">  </span>
    <div class="card-img-overlay">
      <div id="main">
        <button class="openbtn" onclick="openNav()">&#9776; </button>
      </div>
      <h1 class="card-title-1"><?php echo $animal['family']; ?></h1>
      <!-- <a class="circular" href="#"></a>
      <a class="circular-1" href="#"></a>
      <a class="circular-2" href="#"></a>
      <a class="circular-3" href="#"></a>
      <a class="circular-4" href="#"></a>
      <a class="circular-5" href="#"></a>
      <a class="circular-6" href="#"></a> -->
    </div>
  </div>

  <!-- <?php
    // $id = 5;
    // $animal_manager= new Animaux();
    // $animal = $animal_manager->get_id($id);
   ?> -->

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
          <a href="#" data-toggle="popover"  class="location"></a>
          <a href="animalsType.php?type=<?php echo $animal['type']; ?>" data-toggle="popover"  class="species"></a>
          <a href="animalsFamily.php?family=<?php echo $animal['family']; ?>" data-toggle="popover"  class="family"></a>
          <a href="animalsAlim.php?alim=<?php echo $animal['alimentation']; ?>" data-toggle="popover"  class="food"></a>
          <!-- <p class="card-text text-white">Localisation: Savane africaine</p> -->
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
  <?php foreach ($animals as $animal) {
  ?>
    <div class="box">
      <a href="animal.php?id=<?= $animal['id'] ?>">
      <img src="get_image.php?id=<?= $animal['id'] ?>">
      </a>
        <!-- <div class="box-overlay"> -->
        <!-- <div class="text"> -->
          <!-- <?php echo $animal['name'] ?> -->
          <!-- </div> -->
        <!-- </div> -->
    </div>

<?php } ?>
</div>
</section>




  <script src="js/index.js"></script>
  </body>
</html>

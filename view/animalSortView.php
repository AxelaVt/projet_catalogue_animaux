<?php
include "headerView.php";
  ?>

<body>

<section>

  <div class="more">

    <div class="title-2">
    <button type="button" onclick="history.back()" style="color:white;"class="btn btn-xs float-right">Close</button>
      <h2>Tous les <?php echo $value ; ?> </h2>
      <!--  -->
    </div>
  </div>
  <div class="container">

  <?php

echo $animals;

  foreach ($animals as $animal) {

  ?>
    <div class="box">
      <h6><?php echo $animal['name']; ?></h6>
      <a href="animal.php?id=<?php echo $animal['id']; ?>">
      <img src="get_image.php?id=<?php echo $animal['id']; ?>">
      </a>
    </div>

  <?php } ?>
  </div>
</section>


<?php
include "footer.php";
  ?>

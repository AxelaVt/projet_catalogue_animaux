
<?php
include "header.php";

?>

<div class="container form h-80 justify-content-center align-items-center">

    <form action="change.php?id=<?= $animal['id'] ?>" method="post" class="w-80 p-5" enctype="multipart/form-data">
      <div class="form-group">
      <label for="name">Nom de l'animal:</label>
      <input type="text" id="" class="form-control" name="name" value="<?= $animal['name'] ?>" required>
      </div>
      <div class="form-group">
      <label for="type">Type:</label>
      <input type="text" id="" class="form-control" placeholder="Entrer le type" name="type" value="<?= $animal['type'] ?>">
      </div>
      <div class="form-group">
      <label for="famille">Famille:</label>
      <input type="text" id="" class="form-control" placeholder="Entrer la famille" name="family" value="<?= $animal['family'] ?>">
      </div>
      <div class="form-group">
      <label for="alimentation">Alimentation:</label>
      <input type="text" id="" class="form-control" placeholder="Entrer le type d'alimentation" name="alim" value="<?= $animal['alimentation'] ?>">
      </div>
      <div class="form-group">
      <label for="image">Illustration:</label>
      <!-- <input type="text" id="" class="form-control" name="image" value=""> -->
      </div>
      <div class="form-group">
        <input type="file" name="image" size="30" value="">
        <img style="width: 400px; object-fit: contain" src="get_image.php?id=<?= $id ?>" >
        <!-- <button type="submit" name="upload" class="btn btn-primary" value="Uploader">Uploader</button> -->
      </div>
      <div class="form-group">

      <div class="form-group">
      <label for="description">Description:</label>
      <textarea type="text" id="" class="form-control" rows="10" cols="50" name="description"><?= $animal['description'] ?></textarea>
      </div>
      <button type="submit" class="btn btn-secondary" name="submit">Enregistrer</button>
      <a href="admin.php"><button type="button" class="btn btn-secondary">annuler</button></a>
      <a href="admin.php"><button type="button" class="btn btn-secondary">admin</button></a>
    </form>

</div>

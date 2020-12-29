
<?php
include "header.php";
?>

<div class="container form h-80 justify-content-center align-items-center border">

    <form action="../add.php" method="post" class="w-80 p-5" enctype="multipart/form-data">
      <div class="form-group">
      <label for="name">Nom de l'animal:</label>
      <input type="text" id="" class="form-control" placeholder="Entrer le nom" name="name" required>
      </div>
      <div class="form-group">
      <label for="type">Type:</label>
      <input type="text" id="" class="form-control" placeholder="Entrer le type" name="type">
      </div>
      <div class="form-group">
      <label for="famille">Famille:</label>
      <input type="text" id="" class="form-control" placeholder="Entrer la famille" name="family">
      </div>
      <div class="form-group">
      <label for="alimentation">Alimentation:</label>
      <input type="text" id="" class="form-control" placeholder="Entrer le type d'alimentation" name="alim">
      </div>
      <div class="form-group">
      <label for="image">Illustration:</label>
      <!-- <input type="text" id="" class="form-control" name="image" value=""> -->
      </div>
      <div class="form-group">
        <input type="file" name="image" size="30">
        <!-- <button type="submit" name="upload" class="btn btn-primary" value="Uploader">Uploader</button> -->
      </div>
      <div class="form-group">
      <label for="archiver">Achiver:</label>
        <select name="archiver">
          <option value="" selected>false</option>
          <option value="">true</option>
        </select>
      </div>

      <div class="form-group">
      <label for="description">Description:</label>
      <textarea type="text" id="" class="form-control" rows="6" cols="50" name="description"></textarea>
      </div>
      <button type="submit" class="btn btn-secondary" name="submit">Enregistrer</button>
      <!-- <button type="button" value="Annuler" onclick="history.back()" class="btn btn-primary">Annuler</button> -->
      <button type='reset' class="btn btn-secondary">Annuler</button>
      <a href="../admin.php"><button type="button" class="btn btn-secondary">admin</button></a>
    </form>

</div>

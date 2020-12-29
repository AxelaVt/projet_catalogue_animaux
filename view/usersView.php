
<?php
include "header.php";

?>

<table class="table table-striped w-100 h-auto">
  <thead>
    <tr>
      <th>id</th>
      <th>utilisateur</th>
      <th>mot de passe</th>
    </tr>
  </thead>
  <tbody>

      <?php
      foreach ($users as $user){
        ?>
      <tr>
        <td><?= $user['id'] ?></td>
        <td><?= $user['username'] ?></td>
        <td class="text-center"><a href="passwordView.php" ><img src="view/bootstrap-icons/key.svg" alt="change" width="16" height="16" title="change"></a></td>

      </tr>
        <?php
      }?>

  </tbody>
</table>

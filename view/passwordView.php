
<?php
include "header.php";

?>

<?php
$user=$_SESSION['username'];?>
<div class="p-5"style="font-size:1.5rem"> <?php echo "utilisateur connecté : $user";?></div>

<div class="container h-100 m-0">
  <div class="row">
      <div class="col-lg-3 col-md-2"></div>
      <div class="col-lg-6 col-md-8 login-box">
          <div class="col-lg-12 login-key">
              <i class="fa fa-key" aria-hidden="true"></i>
          </div>


        <div class="col-lg-12 login-title">
            CHANGE PASSWORD
        </div>
        <form class="w-100 p-5" action="../password.php" method="POST">
          <div class="form-group">
            <label class="form-control-label"><b>ACTUAL PASSWORD</b></label>
            <input type="password" id="pass" class="form-control" placeholder="Entrer le mot de passe" name="password" minlength="8" required>
          </div>
          <div class="form-group">
            <label class="form-control-label"><b>NEW PASSWORD</b></label>
            <input type="password" id="pass1" class="form-control" placeholder="Entrer le mot de passe" name="password1" minlength="8" required>
          </div>
          <div class="form-group">
            <label class="form-control-label"><b>CONFIRM PASSWORD</b></label>
            <input type="password" id="pass2" class="form-control" placeholder="Entrer le mot de passe" name="password2" onchange="passverif()" minlength="8" required>
          </div>
          <div class="col-lg-6 login-btm login-button float-sm-right">
          <button type="submit" class="btn btn-outline-primary my-1">Change</button>
          <!-- <a href:"../admin.php"><button class="btn btn-outline-primary">Cancel</button></a> -->
          <button type="button" value="Cancel" onclick="history.back()" class="btn btn-outline-primary my-1">Cancel</button>
          </div>
        </form>
  </div>
</div>
</div>
  <script type="text/javascript">
    function passverif(){
      var pass1 = document.getElementById('pass1').value;
      var pass2 = document.getElementById('pass2').value;

    console.log(pass1);
    console.log(pass2);
      if (pass1 !== pass2) {
        //document.getElementsByClassName('pass').style.color = "#f00";
        document.getElementById('pass1').style.color = "#f00";
        document.getElementById('pass1').style.color = "#f00";
        //alert("Les mots de passe ne correspondent pas")

      }else{
        //document.getElementsByClassName('pass').style.color = "#0f0";
        document.getElementById('pass1').style.color = "#0f0";
        document.getElementById('pass2').style.color = "#0f0";
      }
    }
  </script>

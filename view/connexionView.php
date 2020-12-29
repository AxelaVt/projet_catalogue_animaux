<?php
session_start();
include_once ('header.php');
?>
<div class="container">
  <div class="row">
      <div class="col-lg-3 col-md-2"></div>
      <div class="col-lg-6 col-md-8 login-box">
          <div class="col-lg-12 login-key">
            <!-- <img src="bootstrap-icons/key-fill.svg" alt="key" width="32" height="32" title="key"> -->
              <i class="fa fa-key" aria-hidden="true"></i>
          </div>
          <div class="col-lg-12 login-title">
              ADMIN PANEL
          </div>

          <div class="col-lg-12 login-form">
              <div class="col-lg-12 login-form">
                  <form action="../session.php" method="POST">
                      <div class="form-group">
                          <label class="form-control-label">USERNAME</label>
                          <input type="text" class="form-control" name="username" required>
                      </div>
                      <div class="form-group">
                          <label class="form-control-label">PASSWORD</label>
                          <input type="password" class="form-control" name="password" required>
                      </div>

                      <div class="col-lg-12 loginbttm">
                          <div class="col-lg-6 login-btm login-text">
                            <?php
                            if(isset($_GET['erreur'])){
                                $err = $_GET['erreur'];
                                if($err==1 || $err==2){
                                    //echo password_hash('kangourou', PASSWORD_BCRYPT);
                                    //var_dump(password_verify('$password', $passwordbdd['password']));
                                    //var_dump($passwordbdd['password']);
                                    echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                            }
                          }
                            ?>
                          </div>
                          <div class="col-lg-6 login-btm login-button float-sm-right">
                              <button type="submit" class="btn btn-outline-primary my-1">LOGIN</button>
                              <button type="button" value="Cancel" onclick="history.back()" class="btn btn-outline-primary my-1">Cancel</button>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
          <div class="col-lg-3 col-md-2"></div>
      </div>
  </div>

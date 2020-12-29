

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
          <a href="view/connexionView.php">
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
    </section>
    <!-- Fin ong -->
<!-- <section class="background-2">
  <div class="section-2">
    <span class="banner">
    <div class="title">
      <div class="content">
        <h1> Catégories</h1>
        <p> Retrouvez ici l'animal que vous souhaitez selon son cadre géographique, son espèce, son régime alimentaire ou tout simplement par son nom. </p>
      </div>
    </div>
  </span> -->
<div class="section-2">
  <div class="wrapper">
        <!-- <h1 class="title" data-text="Bestiaire">Bestiaire</h1> -->
      <div class="banniere">
        <ul class="text hidden">
          <li>B</li>
          <li>E</li>
          <li>S</li>
          <li>T</li>
          <li>I</li>
          <li>A</li>
          <li>I</li>
          <li>R</li>
          <li>E</li>
           <li>&nbsp;</li>
           <li>:</li>
          <li class="spaced"> &nbsp; </li>
          <li class="ghost">R</li>
          <li class="ghost">e</li>
          <li class="ghost">t</li>
          <li class="ghost">r</li>
          <li class="ghost">o</li>
          <li class="ghost">u</li>
          <li class="ghost">v</li>
          <li class="ghost">e</li>
          <li class="ghost">r</li>
          <li class="ghost">&nbsp;</li>
          <li class="ghost">l</li>
          <li class="ghost">a</li>
          <li class="ghost">&nbsp;</li>
          <li class="ghost">l</li>
          <li class="ghost">i</li>
            <li class="ghost">s</li>
          <li class="ghost">t</li>
          <li class="ghost">e</li>
          <li class="ghost">&nbsp;</li>
          <li class="ghost">d</li>
            <li class="ghost">e</li>
          <li class="ghost">&nbsp;</li>
          <li class="ghost">t</li>
          <li class="ghost">o</li>
          <li class="ghost">u</li>
            <li class="ghost">t</li>
          <li class="ghost">&nbsp;</li>
          <li class="ghost">l</li>
          <li class="ghost">e</li>
          <li class="ghost">s</li>
            <li class="ghost">&nbsp;</li>
          <li class="ghost">a</li>
          <li class="ghost">n</li>
          <li class="ghost">i</li>
          <li class="ghost">m</li>
            <li class="ghost">a</li>
          <li class="ghost">u</li>
          <li class="ghost">x</li>
          <li class="ghost">&nbsp;</li>
        </ul>
      </div>
      <div class="container">
        <div class='items'>
          <?php foreach ($animals as $animal) {

           ?>
           <div class='item'>
             <a href="animal.php?id=<?= $animal['id'] ?>">
             <svg preserveAspectRatio='xMidYMid slice' viewBox='0 0 300 200'>
               <defs>
                 <clipPath id='clip-0'>
                   <circle cx='0' cy='0' fill='#000' r='150px'></circle>
                 </clipPath>
               </defs>
               <text class='svg-text' dy='.3em' x='50%' y='50%'><?php echo $animal['name'];?>

               </text>
               <g clip-path='url(#clip-0)'>
               <image height='100%' preserveAspectRatio='xMinYMin slice' width='100%' xlink:href="get_image.php?id=<?= $animal['id'] ?>"</image>
               <text class='svg-masked-text' dy='.3em' x='50%' y='50%'>
                <?php echo $animal['name'] ?>
               </text>
               </g>
             </svg></a>
           </div>
        <?php   } ?>
        </div>
      </div>
    </div>
</div>
<section class="section-3">
  <div class="formulaire parallax">
    <div class="contact-box contact">
      <h2>Nous contacter</h2>
      <form>
        <div class="user-box">
          <input type="text" name="name" id="name" required="">
          <label>Nom</label>
        </div>
        <div class="user-box">
          <input type="email" name="" id="email" required="">
          <label>E-mail</label>
        </div>
        <div class="user-box">
          <input type="text" name="message" id="message" required="" style="height:256px;">
          <label>Message</label>
        </div>
        <a href="#">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          Envoyer
        </a>
      </form>
    </div>
  </div>
</section>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://unpkg.com/scrollreveal"></script>
<script src="js/index.js"></script>
<script src="js/contact.js"></script>
<script src="js/scrollout.js"></script>
<script src="https://unpkg.com/scrollreveal"></script>
<script src="https://smtpjs.com/v3/smtp.js"></script>
</body>
</html>

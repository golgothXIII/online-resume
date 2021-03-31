<?php
/*
 * Code for send mail to my email.
*/
  $retourMail = null;
  if (isset($_POST['inputMessage']) && isset($_POST['inputEmail'])) {
      $role = null;
      $retour = mail('gautheronludovic@gmail.com', 'Envoi depuis la page Contact', $_POST['inputMessage'], 'From: ' . $_POST['inputEmail']);
      if(!$retour) {
        $retourMail = "Message envoyé";
        $role = "success";
      } else {
        $retourMail = "Erreur lors de l'envoie du message";
        $role = "danger";
      }
      $retourMail = '<div class="alert alert-' . $role . ' role="alert">' . $retourMail . '</div>';
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="icon" type="image/svg+xml" href="images/mon_logo.svg" />
  <!-- Bootstrap css -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- My css file-->
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg fixed-top my-bg-dark" >
      <a class="navbar-brand" href="#">
        <img src="images/mon_logo.svg" width="40" height="40" alt=""/>
      </a>
      <button
        class="navbar-toggler navbar-dark"
        type="button" 
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon""></span>
      </button> 
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- menu -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item my-button" >
              <a class="nav-link my-link" href="#about-me">A propos de moi</a>
            </li>
            <li class="nav-item my-button">
              <a class="nav-link my-link" href="#my-skills">Mes competences</a>
            </li>
            <li class="nav-item my-button">
              <a class="nav-link my-link" href="#projects">Mes projets & réalisation</a>
            </li>
            <li class="nav-item my-button">
              <a class="nav-link my-link" href="#carrer">Mon parcours</a>
            </li>
          <li class="nav-item my-button">
            <a class="nav-link my-link text-center" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <main class="container">
    <!-- Section about me -->
    <!---------------------->
    <section id="about-me" class="my-bg-light my-first-section my-section row" >
        <h2 class="col-12 text-center my-section-title" >A propos de moi</h2>
        <div class="col-sm-4 text-center align-middle" >
          <img src="images/ludovic-gautheron.jpg" class="my-profile" />
        </div>
        <div class="col-sm text-center" >
          <h3 class="my-section-subtitle">
            Ludovic GAUTHERON<br />
            Developpeur web / mobile full stack
          </h3>
        </div>
        <p class="text-justify" style="font-size:25px ">
          Developpeur de formation, j'ai durant ma carrier doucement basculé vers l'administration systeme.
          Apres plusieur années ( plus de 10 ans ) loin des lignes de code, et voulant revenir à ma premiere passion,
          je me suis lancé dans une formation à distance de developpeur web / web mobile.<br />
          <b>Motivé, passionée je suis la pour réaliser vos besoins et envie.</b>
        </p>

    </section>
    <!-- Section my skills -->
    <!----------------------->
    <section id="my-skills" class="my-bg-dark my-section row">
        <h2 class="col-12 text-center my-section-title" >Mes competences</h2>
        <div class="col-3 text-center"><img src="images/html5.svg" /><span class="d-none d-xl-inline">HTML 5</span></div>
        <div class="col-3 text-center" ><img src="images/css3.svg" /><span class="d-none d-xl-inline">CSS 3</span></div>
        <div class="col-3 text-center" ><img src="images/javascript.svg" /><span class="d-none d-xl-inline">JAVASCRIPT</span></div>
        <div class="col-3 text-center" ><img src="images/bootstrap.svg" /><span class="d-none d-xl-inline">BOOTSTRAP</span></div>
        <div class="col-3 text-center" ><img src="images/php.svg"/><span class="d-none d-xl-inline">PHP</span></div>
        <div class="col-3 text-center"><img src="images/symfony.svg" /><span class="d-none d-xl-inline">SYNFONY</span></div>
        <div class="col-3 text-center" ><img src="images/react.svg" /><span class="d-none d-xl-inline">REACT</span></div>
        <div class="col-3 text-center" ><img src="images/wordpress.svg" /><span class="d-none d-xl-inline">WORDPRESS</span></div>
        <div class="col-3 text-center" ><img src="images/github.svg"/><span class="d-none d-xl-inline">GITHUB</span></div>
        <div class="col-3 text-center"><img src="images/mysql.svg" /><span class="d-none d-xl-inline">MYSQL</span></div>
    </section>
    <!-- Section my projects -->
    <!------------------------->
    <section id="projects" class="my-bg-light my-section row">
      <h2 class="col-12 text-center my-section-title">Mes projets et réalisations</h2>
      <div class="container text-center pb-5 pt-3">
        <h3 class="my-section-subtitle text-center">Un demineur en React.js</h3>
        <img class="col-10" src="images/minesweeper.jpg" />
      </div>
    </section>
    <!-- Section my carrer -->
    <!----------------------->
    <section id="carrer" class="container my-bg-dark my-section row" >
      <h2 class="col-12 text-center my-section-title">Mon parcours</h2>
      <div class="col-md-6 my-carrer-left" >
        <p>Octobre 2020 - Aujourd'hui</p>
        <p>Formation Dévellopeur Web et Web Mobile</p>
        <p>STUDI - Formation à distance</p>
      </div>
      <div class="col-md-6 d-none d-md-inline my-carrer-right"></div>
      <div class="col-md-6 d-none d-md-inline my-carrer-left"></div>
      <div class="col-md-6 my-carrer-right" >
        <p>2018 - Aujourd'hui</p>
        <p>Responsable informatique</p>
        <p>CELSIUS EQUIPEMENT</p>
      </div>
      <div class="col-md-6 my-carrer-left" >
      <p>2005 - 2018</p>
        <p>administrateur systeme</p>
        <p>Armée de l'air</p>
      </div>
      <div class="col-md-6 d-none d-md-inline my-carrer-right"></div>
      <div class="col-md-6 d-none d-md-inline  my-carrer-left"></div>
      <div class="col-md-6 my-carrer-right" >
        <p>1999 - 2005</p>
        <p>Développeur / administrateur systeme & BDD</p>
        <p>Armée de l'air</p>
      </div>
      <div class="col-md-6 my-carrer-left" >
        <p>1997</p>
        <p>DUT Informatique</p>
        <p>IUT - BELFORT MONTBELIARD</p>
      </div>
      <div class="col-md-6 d-none d-md-inline my-carrer-right"></div>
      <div class="col-md-6 d-none d-md-inline  my-carrer-left"></div>
      <div class="col-md-6 my-carrer-right" >
        <p>1995</p>
        <p>Baccalaureat S</p>
        <p>Lycée G. EIFFEIL (Dijon)</p>
      </div>
    </section>
    <!-- Section contact -->
    <!--------------------->
    <section id="contact" class="my-bg-light my-section">
      <h2 class="col-12 text-center my-section-title">Me contacter</h2>
      <?= $retourMail ?>
      <form method="post" action="#contact">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputLastame">Nom</label>
            <input type="text" class="form-control" id="inputLastname" name="inputLastname" placeholder="Saisir votre nom">
          </div>  
          <div class="form-group col-md-6">
            <label for="inputFirstname">Prénom</label>
            <input type="text" class="form-control" id="inputFirstname" name="inputFirstname" placeholder="Saisir votre prénom">
          </div>  
        </div>
        <div class="form-group">
          <label for="inputEmail">Votre adresse mail *</label>
          <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Saisir votre email" required>
        </div>
        <div class="form-group">
          <label for="inputMessage">Votre demande *</label>
          <textarea class="form-control" id="inputMessage" name="inputMessage" placeholder="Saisir votre demande" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn my-button">Envoyer</button>
      </form>
    </section>
  </main>
  <footer class="my-bg-dark text-center"><h6>Ludovic GAUTHERON @ Golgoth.codeur</h6></footer>
  <!-- jQuery -->
  <script src="js/jquery-3.6.0.min.js"></script>
  <!-- Bootstrap JavaScript -->
  <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
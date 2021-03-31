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
    <section id="about-me" class="my-bg-light my-first-section my-section row" >
        <h2 class="col-12 text-center my-section-title" >A propos de moi</h2>
        <div class="col-sm-4 text-center align-middle" >
          <img src="images/ludovic-gautheron.jpg" class="my-profile" />
        </div>
        <div class="col-sm text-center" >
          <h3 class="my-section-subtitle">
            Ludovic GAUTHERON<br />
            Developpeur web / mobile full stack</h3>
        </div>
        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum purus erat, tincidunt nec pretium vel, convallis a sem. Cras a lorem turpis. Suspendisse venenatis et justo at malesuada. Donec tortor ante, dictum et dolor at, suscipit vestibulum sem. Donec tristique venenatis turpis quis placerat. Nunc aliquet ut felis vel porttitor. Integer pellentesque, lacus sit amet pulvinar aliquet, arcu magna finibus enim, eu convallis justo mi sit amet metus. Pellentesque sed erat velit. Fusce posuere imperdiet neque ut gravida.
          Donec a vehicula leo. Ut aliquet ullamcorper ligula, eget cursus magna porta vitae. Nulla pellentesque diam quis ex semper, et scelerisque est placerat. Vestibulum dui lorem, consectetur sit amet purus gravida, sollicitudin suscipit magna. Vestibulum placerat, leo sit amet pretium lacinia, neque neque fringilla massa, ut consequat ligula justo ac lacus. Aenean ut massa nunc. Aliquam pulvinar urna nec purus ornare euismod. Duis dignissim euismod nisl et fringilla. In hendrerit vulputate convallis. Nulla mattis ultricies finibus. Aliquam quis ante molestie, porta ex sed, placerat est. Vivamus egestas magna nisl, ut consequat quam tempor sit amet. Morbi non ante eget velit feugiat tristique. Fusce eget ex ut nunc lacinia condimentum at eget ex. Vivamus vestibulum iaculis nibh a laoreet.</p>

    </section>
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
    <section id="projects" class="my-bg-light my-section row">
      <h2 class="col-12 text-center my-section-title">Mes projets et réalisations</h2>
    </section>
    <section id="carrer" class="my-bg-dark my-section row" >
      <h2 class="col-12 text-center my-section-title">Mon parcours</h2>
      <div class="col-md-6 my-carrer-left" >
        Octobre 2020 - Aujourd'hui<br />Formation Dévellopeur Web et Web Mobile<br /> STUDI - Formation à distance
      </div>
      <div class="col-md-6 d-none d-md-inline my-carrer-right"></div>
      <div class="col-md-6 d-none d-md-inline my-carrer-left"></div>
      <div class="col-md-6 my-carrer-right" >
        2018
      </div>
      <div class="col-md-6 my-carrer-left" >
        1997<br /> DUT Informatique <br />IUT - BELFORT MONTBELIARD
      </div>
      <div class="col-md-6 d-none d-md-inline my-carrer-right"></div>
      <div class="col-md-6 d-none d-md-inline  my-carrer-left"></div>
      <div class="col-md-6 my-carrer-right" >
        1995<br /> Baccalaureat S<br />Lycée G. EIFFEIL (Dijon)
      </div>
    </section>
    <section id="contact" class="my-bg-light my-section">
      <h2 class="col-12 text-center my-section-title">Me contacter</h2>
      <form method="post" action="#contact" >
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
<?php
  if (isset($_POST['inputMessage'])) {
      echo "salut <br/><br/>";
      $retour = mail('gautheronludovic@gmail.com', 'Envoi depuis la page Contact', $_POST['inputMessage'], 'From: ' . $_POST['inputEmail']);
      if($retour)
        echo '<p>Votre message a été envoyé.</p>';
      else
        echo '<p>Erreur.</p>';
  }
?>
</body>
</html>
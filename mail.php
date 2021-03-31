<?php
  var_dump($_POST);
  if (isset($_POST['inputMessage'])) {
      echo "salut <br/><br/>";
      $position_arobase = strpos($_POST['email'], '@');
      if ($position_arobase === false)
          echo '<p>Votre email doit comporter un arobase.</p>';
      else {
          $retour = mail('mail@test.fr', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . $_POST['email']);
          if($retour)
              echo '<p>Votre message a été envoyé.</p>';
          else
              echo '<p>Erreur.</p>';
      }
  } else {
    echo "pas coucou";
  }
  ?>
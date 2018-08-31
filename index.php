<?php
session_start()
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Accueil WenManCoach</title>
  <link rel="stylesheet" href="/assets/css/master.css">
  <link rel="stylesheet" href="/WenManCoach/assets/css/master.css">
  <script src="/WenManCoach/assets/js/master.js"></script>
</head>
<body>

  <header class="zng-container wmc-theme zng-padding" id="header">
    <?php
    if(isset($_SESSION['znglogged'])){
    if ($_SESSION['znglogged']=="yes") {
      echo "
      <figure class=\"profil\" onclick=\"document.location.href = 'profile';\">
      <button type=\"button\" name=\"button\" class=\"profil\" ></button>
      <figcaption>"."".$_SESSION['zngpseudo']."</figcaption>
      </figure>
      ";
      echo "
      <figure style=\"visibility:hidden;float:left;\" class=\"profil\" onclick=\"document.location.href = 'profile';\">
      <button type=\"button\" name=\"button\" class=\"profil\" ></button>
      <figcaption>"."".$_SESSION['zngpseudo']."</figcaption>
      </figure>
      ";
    }
  }

    ?>
    <div class="zng-center">
      <h1 class="wmc-title">WenManCoach</h1>
      <div class="zng-header">
        <button id="btn" class="zng-btn zng-xlarge wmc-theme-dark zng-hover-teal" onclick="start()" style= "font-weight:900"><?php
           if(isset($_SESSION['znglogged'])){
        if ($_SESSION['znglogged']=="yes") {
          echo "Démarrer une session";
        }
      }
      else{
          echo "Se connecter";
        }
        ?></button>
      </div>
    </div>
  </header>

  <noscript>
    <span class="important">Javascript est désactivé, vous avez besoin d\'activer javascript pour poursuivre sur notre site sans quoi votre expérience sera gachée</span>
  </noscript>
  <div class="zng-center zng-margin-top">
    <div class="zng-half">
      <div class="wmc-card" >
        <h2>Sport</h2>
      <ul>
        <li> Tirer </li><li>Pousser</li><li>Jambes</li>
        </ul>
        </div>
    </div>
    <div class="zng-half zng-sec-half">
      <div class="wmc-card" >
        <h2>Nutrition</h2>
        <ul>
        <li>Les protéines</li> <li>Les calories</li> <li>Les vitamines importantes</li>
        </ul>
      </div>
    </div>
  </div>

</body>
</html>
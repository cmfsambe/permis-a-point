<?php
session_start();
include 'includes/header.php';
include 'includes/footer.php';
?>

<div class="sub-nav">
  <ul>
    <li><a class="navlinks" href="automobiliste.php">Accueil</a></li>
    <li><a class="navlinks" href="informations.php">Infractions</a></li>
    <li><a class="navlinks" href="tests.php">Tests</a></li>
    <li><a class="navlinks" href="actualites.php">Actualités</a></li>
    <div id="logoutdiv">
      <a id="logoutLink" href="logout.php?logout"><img id="logout" src="images/se-deconnecter.png"></a>
    </div>
  </ul>
</div>

<main>
  <br /><br />
  <div class="parent">
    <div class="divSolde">
      <?php
      $date = date("d/m/Y");
      echo "<p>Solde au : $date</p>";
      ?>
      <div class="circle">
        <p class="nbPoints"><?php echo $_SESSION['nbPoints']; ?> points</p>
        <p class="extra-margin">sur un capital de 12</p>
      </div>
      <p>Dernier mouvement du solde de points* : <?php echo  $_SESSION['derniereModification']; ?> </p>
    </div>
    <div class="div2">
      <p style="font-weight:bold; font-size:20px;">N° PERMIS: <?php echo $_SESSION['numeroPermis'] ?></p>
      <br /> <br /> <br />
      <h3 style="font-weight:bold; color:rgb(24, 146, 144);">Savoir du jour:
        <p id="Psavoirdujour"><?php echo $_SESSION['savoirdujour'] ?>
        <p>
      </h3>
    </div>
  </div>
</main>

<!-- https://www.aaaep.fr/blog-tests-psychotechniques/la-recuperation-des-points-de-permis-0033-488/ -->
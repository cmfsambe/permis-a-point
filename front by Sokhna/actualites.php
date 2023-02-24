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

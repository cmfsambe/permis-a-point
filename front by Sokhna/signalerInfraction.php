<?php
include 'includes/header.php';
include 'includes/footer.php';
echo $_SESSION['role'] ;
?>

<div class="sub-nav">
    <ul>
        <li><a href="#">Actualités</a></li>
        <li><a href="#">Agence</a></li>
        <li><a href="#">Historique de traitements</a></li>
        <li><a href="#">Mon Planning</a></li>
        <li><a href="#">Mon compte</a></li>
        <div id="logoutdiv">
            <a id="logoutLink" href="logout.php?logout"><img id="logout" src="images/se-deconnecter.png"></a>
        </div>
    </ul>
</div>

<p>Veuillez remplir ces champs pour signaler une infraction</p>
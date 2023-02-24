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

<div class="txtNactionContainer">
    <div class="txtContainer">
        <h2>Bienvenue Cher Agent dans votre Espace <br /> Personnel,</h2>
        <h3>Lequel de ces Actions souhaiteriez vous effectuer ?</h3>
    </div>

    <div class="actionContainer">
        <div class="actionAEffectuer">
            <p class="descAction">Signaler une infraction</p>
            <a href="signalerInfraction.php" class="arrowLink"><img src="images/next.png" alt="arrow"></a>
        </div>

        <div class="actionAEffectuer">
            <p class="descAction">Consulter le solde d'un automobiliste</p>
            <a href="#" class="arrowLink"><img src="images/next.png" alt="arrow"></a>
        </div>

        <div class="actionAEffectuer">
            <p class="descAction">Troisième fonction</p>
            <a href="#" class="arrowLink"><img src="images/next.png" alt="arrow"></a>
        </div>
    </div>

</div>

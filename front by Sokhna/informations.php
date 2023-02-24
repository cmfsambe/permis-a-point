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
    <div class="containerInfractions">
        <div class="circleInfraction" data-popup="alcoholPopup">
            <img class="infraction" src="images/alcohol.png"> &nbsp;&nbsp;
            <p class="descInfraction">ALCOOL AU VOLANT</p>
        </div>
        <br />
        <div class="circleInfraction" data-popup="priorityPopup">
            <img class="infraction" src="images/priorité.jpeg"> &nbsp;&nbsp;
            <p class="descInfraction">REFUS DE PRIORITÉ</p>
        </div>
        <br />
        <div class="circleInfraction" data-popup="equipementVehicule">
            <img class="infraction" src="images/car-wheel.png"> &nbsp;&nbsp;
            <p class="descInfraction">EQUIPEMENT VÉHICULE</p>
        </div>


        <div class="circleInfraction" data-popup="infractionAutoroute">
            <img class="infraction" src="images/highway-2.png"> &nbsp;&nbsp;
            <p class="descInfraction">INFRACTIONS AUTOROUTE</p>
        </div>


        <div class="circleInfraction" data-popup="excesvitesse">
            <img class="infraction" src="images/speedometer.png"> &nbsp;&nbsp;
            <p class="descInfraction">EXCÈS DE VITESSE</p>
        </div>


        <div class="circleInfraction" data-popup="feuCirculation">
            <img class="infraction" src="images/traffic-light.png"> &nbsp;&nbsp;
            <p class="descInfraction">INFRACTIONS CIRCULATION</p>
        </div>

        <div class="circleInfraction" data-popup="fumerVolant">
            <img class="infraction" src="images/ne-pas-fumer.png"> &nbsp;&nbsp;
            <p class="descInfraction">FUMER AU VOLANT</p>
        </div>
    </div>


    <!-- Les popups -->

    <div id="alcoholPopup" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Alcool au volant</h2>
            <p class="gras">L'alcool au volant est l'une des premières causes de la mortalité routière et demeure en cause dans près d'un tiers des accidents mortels. En France, il est interdit de conduire ou d'accompagner un élève conducteur avec un taux d’alcool dans le sang ou dans l'air expiré supérieur au seuil autorisé par le code de la route. La Sécurité routière vous informe sur la législation applicable en la matière établie dans le code de la route.</p>
            <p><span class="gras">Type :</span> Contravention de classe 4 </p>
            <p><span class="gras">Amende :</span> 89000Frcs </p>
            <br />
            <p><span class="gras">Minorée :</span> 60000Frcs</p>
            <p><span class="gras">Majorée : </span> </p>
            <p><span class="gras">Maxima :</span> 500000Frcs </p>
            <br />
            <p><span class="gras">Points: </span> 4 </p>
            <p>Un quart d'heure après absorption à jeun
                Une heure après absorption au cours d'un repas.
                L'alcoolémie baisse en moyenne de 0,10 g à 0,15 g d'alcool par litre de sang en 1 heure. Café salé, cuillerée d'huile… : aucun « truc » ne permet d'éliminer l'alcool plus rapidement.
                <br />
                Attention, certains médicaments sont incompatibles avec la consommation d'alcool. Lisez attentivement les notices ou demandez conseil à votre médecin en cas de doute.
            </p>
        </div>

    </div>

    <div id="priorityPopup" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Refus de priorité</h2>
            <h2 class="gras">Refus de priorité (intersections, véhicules prioritaires, ronds-points)</h2>
            <p class="gras">Excès de vitesse supérieur à 30 km/h et inférieur à 39 km/h en ville</p>
            <p><span class="gras">Type :</span> Contravention de classe 4 </p>
            <p><span class="gras">Amende :</span> 89000Frcs </p>
            <br />
            <p><span class="gras">Minorée :</span> 60000Frcs</p>
            <p><span class="gras">Majorée : </span> </p>
            <p><span class="gras">Maxima :</span> 500000Frcs </p>
            <br />
            <p><span class="gras">Points: </span> 4 </p>
            <p>Le droit de priorité ne dispense pas celui qui l'exerce du devoir général de prudence imposé par le Code de la Route. Ce n'est pas un droit
                absolu et il ne permet pas par exemple d'exonérer systématiquement de toute responsabilité le prioritaire en cas d'accident de la
                circulation.</p>
        </div>
    </div>


    <div id="excesvitesse" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2 class="gras">Excès de vitesse</h2>
            <p class="gras">Excès de vitesse supérieur à 30 km/h et inférieur à 39 km/h en ville</p>
            <p><span class="gras">Type :</span> Contravention de classe 3 </p>
            <p><span class="gras">Amende :</span> 89000Frcs </p>
            <br />
            <p><span class="gras">Minorée :</span> 60000Frcs</p>
            <p><span class="gras">Majorée : </span> </p>
            <p><span class="gras">Maxima :</span> 500000Frcs </p>
            <br />
            <p><span class="gras">Points: </span> 3 </p>
            <p>Les points perdus à la suite d'un excès de vitesse inférieur à 40 km/h en ville sont récupérés au bout de 3 ans sur votre permis. A condition de ne commettre aucune infraction entraînant un retrait de points pendant ces 3 ans.</p>
        </div>
    </div>

    <div id="feuCirculation" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2 class="gras">Feux de signalisation</h2>
            <p class="gras">Non-respect de l'arrêt au feu rouge ou au stop</p>
            <p><span class="gras">Type :</span> Contravention de classe 4 </p>
            <p><span class="gras">Amende :</span> 89000Frcs </p>
            <br />
            <p><span class="gras">Minorée :</span> 60000Frcs</p>
            <p><span class="gras">Majorée : </span> </p>
            <p><span class="gras">Maxima :</span> 500000Frcs </p>
            <br />
            <p><span class="gras">Points: </span> 4 </p>
            <p>Les feux de signalisation verts autorisent le passage des véhicules dans les intersections, à condition que le conducteur ne s'engage que si
                son véhicule ne risque pas d'être immobilisé et d'empêcher le passage des autres véhicules circulant sur les autres voies.</p>
        </div>
    </div>

    <!-- <div id="feuCirculation" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2 class="gras">Feux de signalisation</h2>
                <p class="gras">Non-respect de l'arrêt au feu rouge ou au stop</p>
                <p><span class="gras">Type :</span> Contravention de classe 4 </p>
                <p><span class="gras">Amende :</span> 89000Frcs </p>
                <br />
                <p><span class="gras">Minorée :</span> 60000Frcs</p>
                <p><span class="gras">Majorée : </span> </p>
                <p><span class="gras">Maxima :</span> 500000Frcs </p>
                <br />
                <p><span class="gras">Points: </span> 4 </p>
                <p>Les feux de signalisation verts autorisent le passage des véhicules dans les intersections, à condition que le conducteur ne s'engage que si
                    son véhicule ne risque pas d'être immobilisé et d'empêcher le passage des autres véhicules circulant sur les autres voies.</p>
            </div>
        </div> -->

    <div id="infractionAutoroute" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2 class="gras">Infraction Autoroute</h2>
            <p class="gras">Demi-tour ou marche arrière sur autoroute</p>
            <p><span class="gras">Type :</span> Contravention de classe 4 </p>
            <p><span class="gras">Amende :</span> 89000Frcs </p>
            <br />
            <p><span class="gras">Minorée :</span> 60000Frcs</p>
            <p><span class="gras">Majorée : </span> </p>
            <p><span class="gras">Maxima :</span> 500000Frcs </p>
            <br />
            <p><span class="gras">Points: </span> 4 </p>
            <p>Lorsque vous circulez sur autoroute, la vitesse de circulation est de 130 km/h maximum, si vous loupez votre sortie ne tentez jamais de faire demi-tour, ou de faire une marche arrière sur la bande d'arrêt d'urgence. </p>
        </div>
    </div>


    <div id="equipementVehicule" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2 class="gras">Équipements véhicule</h2>
            <p class="gras">Équipements obligatoires en voiture : gilet de sécurité, triangle...</p>
            <p><span class="gras">Type :</span> Contravention de classe 3 </p>
            <p><span class="gras">Amende :</span> 89000Frcs </p>
            <br />
            <p><span class="gras">Minorée :</span> 60000Frcs</p>
            <p><span class="gras">Majorée : </span> </p>
            <p><span class="gras">Maxima :</span> 500000Frcs </p>
            <br />
            <p><span class="gras">Points: </span> 3 </p>
            <p>Vous devez avoir dans votre voiture un gilet de sécurité (gilet jaune) et un triangle de signalisation de danger.
                Le gilet de sécurité doit être fluorescent, avoir un marquageCE : CE : Conformité européenne et être rangé à portée de main.
                Le triangle doit avoir un marquage E 27 R et être rangé dans votre voiture. </p>
        </div>
    </div>

    <div id="fumerVolant" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2 class="gras"> Fumer au volant</h2>
            <p class="gras">Équipements obligatoires en voiture : gilet de sécurité, triangle...</p>
            <p><span class="gras">Type :</span> Contravention de classe 2 </p>
            <p><span class="gras">Amende :</span> 30000Frcs </p>
            <br />
            <p><span class="gras">Minorée :</span> 23000Frcs</p>
            <p><span class="gras">Majorée : </span>15000Frcs</p>
            <p><span class="gras">Maxima :</span> 500000Frcs </p>
            <br />
            <p><span class="gras">Points: </span> 2 </p>
            <p>Vous devez avoir dans votre voiture un gilet de sécurité (gilet jaune) et un triangle de signalisation de danger.
                Le gilet de sécurité doit être fluorescent, avoir un marquageCE : CE : Conformité européenne et être rangé à portée de main.
                Le triangle doit avoir un marquage E 27 R et être rangé dans votre voiture. </p>
        </div>
    </div>


</main>
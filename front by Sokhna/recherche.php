
<?php
// Connexion à la base de données
$servername = "localhost";
$username = "votre_nom_utilisateur";
$password = "votre_mot_de_passe";
$dbname = "nom_de_votre_base_de_données";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connexion échouée: " . $conn->connect_error);
}

// Récupération du paramètre de recherche
$search_term = $_GET["q"];

// Requête pour chercher les éléments dans la base de données
$sql = "SELECT * FROM ma_table WHERE mon_champ LIKE '%$search_term%'";
$result = $conn->query($sql);

// Affichage des résultats
if ($result->num_rows > 0) {
    echo "<h2>Résultats de recherche pour '$search_term'</h2>";
    while($row = $result->fetch_assoc()) {
        echo "<p>" . $row["mon_champ"] . "</p>";
    }
} else {
    echo "<p>Aucun résultat trouvé pour '$search_term'</p>";
}

// Fermeture de la connexion à la base de données
$conn->close();
?>

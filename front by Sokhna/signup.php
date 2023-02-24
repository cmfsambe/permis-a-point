<?php
include 'includes/header.php';
include 'includes/footer.php';
//Connect to the MySQL database
$conn = mysqli_connect('localhost', 'root', '', 'Permisapoints');
if (isset($_POST['submit'])) {

       // Get the values from the form
       $nPermis = mysqli_real_escape_string($conn, $_POST['numeroP']);
       $nom = mysqli_real_escape_string($conn, $_POST['nom']);
       $prenom = mysqli_real_escape_string($conn, $_POST['prenom']);
       $adresse = mysqli_real_escape_string($conn, $_POST['adresse']);
       $mdp = mysqli_real_escape_string($conn, $_POST['password']);
       $confirmPassword = mysqli_real_escape_string($conn, $_POST['confirmPassword']);

  // Now we check if the data has been submitted, the isset function will check if the data exists.
  if (!isset($_POST['numeroP'], $_POST['nom'], $_POST['prenom'], $_POST['adresse'], $_POST['password'], $_POST['confirmPassword'])) {
    // Unable to get the data that should have been sent.
    echo '<p style="color:red;">Please complete the registration form!</p>';
}

// Let's check that the submitted registration values are not empty.
if (empty($_POST['numeroP']) || empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['adresse']) || empty($_POST['password']) || empty($_POST['confirmPassword'])) {
    // One or more fields are empty
    echo '<p style="color:red;">Please complete the registration form!</p>';
}


    // Check if the passwords match
    if ($mdp !== $confirmPassword) {
        echo '<p style="color:red;">Les mots de passe ne correspondent pas!</p>';
    }
     $check_query = "SELECT numeroPermis FROM Automobilistes WHERE numeroPermis = '$nPermis'";
     $result = mysqli_query($conn, $check_query);
     if (mysqli_num_rows($result) > 0) {
         // Account with that username already exists
         echo '<p style="color:red;">Vous avez déjà un compte</p>';
     } else {
         // Hash the password
         $hashed_password = password_hash($mdp, PASSWORD_DEFAULT);
         // Insert the data into the database
         $insert_query = "INSERT INTO Automobilistes (numeroPermis, nom, prenom, adresse, nbPoints, motdepasse, derniereModification,)
                          VALUES ('$nPermis', '$nom', '$prenom', '$adresse', 12, '$hashed_password',  NOW())";
        if (mysqli_query($conn, $insert_query)) {
            echo '<p style="color:green;">Inscription réussie!</p>';
        } else {
            echo '<p style="color:red;">Erreur lors de l\'inscription. Veuillez réessayer plus tard.</p>';
        }        
    } 

}
?>

<form class="signup-form" id="signupForm" method="post">
    <h2 id="signupH2">S'inscrire</h2>
    <div class="container">
        <div class="form-group">
            <label for="numeroP">N° de permis</label>
            <input type="text" id="numeroP" name="numeroP">
        </div>

        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom">
        </div>

        <div class="form-group">
            <label for="prenom">Prenom</label>
            <input type="text" id="prenom" name="prenom">
        </div>

        <div class="form-group">
            <label for="adresse">Adresse</label>
            <input type="text" id="adresse" name="adresse">
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
        </div>
        <div class="form-group">
            <label for="confirm-password">Confirm Password:</label>
            <input type="password" id="confirmPassword" name="confirmPassword">
        </div>
        <button type="submit" name="submit">S'inscrire</button>
    </div>
</form>

</body>

</html>
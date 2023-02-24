<?php
include 'includes/header.php';
include 'includes/footer.php';
?>
<?php
//Connect to the MySQL database
$conn = mysqli_connect('localhost', 'root', '', 'Permisapoints');
?>

<form action="login.php" method="post" class="form-width">
  <div class="imgcontainer">
    <img src="images/avatar-homme.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <div class="form-group">
      <label for="identifiant"><b>Matricule/N° de permis</b></label>
      <input type="text" class="form-control" id="identifiant" placeholder="Matricule/N° de permis" name="identifiant" required>
    </div>

    <div class="form-group">
      <label for="mdp"><b>Mot de passe</b></label>
      <input type="password" class="form-control" id="mdp" placeholder="Mot de passe" name="mdp" required>
    </div>

    <button type="submit" class="btn btn-primary" name="submit">Login</button>
    <a href="signup.php"><button type="button" class="btn btn-secondary">Create Account</button></a>
  </div>
</form>

<?php
if (isset($_POST['submit'])) {
  // Get the values from the form
  $identifiant = $_POST['identifiant'];
  $password = $_POST['mdp'];

  // Check if the user's login credentials are valid
  $query1 = "SELECT * FROM automobilistes WHERE numeroPermis='$identifiant' AND motdepasse='$password'";
  $query2 = "SELECT * FROM agentCirculation WHERE matricule='$identifiant' AND motdepasse='$password'";
  $query3 = "SELECT * FROM agentGouvernemental WHERE matricule='$identifiant' AND motdepasse='$password'";
  $query4 = "SELECT description FROM savoirdujour ORDER BY RAND() LIMIT 1";

  $result1 = mysqli_query($conn, $query1);
  $result2 = mysqli_query($conn, $query2);
  $result3 = mysqli_query($conn, $query3);
  $result4 = mysqli_query($conn, $query4);

  if (mysqli_num_rows($result1) == 1) {
    // Start a session and set the session variable
    session_start();
    $_SESSION['logged_in'] = true;
    $row1 = mysqli_fetch_assoc($result1);
    $_SESSION['nbPoints'] = $row1['nbPoints'];
    $_SESSION['numeroPermis'] = $row1['numeroPermis'];
    $_SESSION['derniereModification'] = $row1['derniereModification'];
    // Récupération du rôle de l'utilisateur à partir de l'URL
    $role = $_GET['role'];

    // Enregistrement du rôle de l'utilisateur dans la session
    $_SESSION['role'] = $role;
    //Redirection de l'utilisateur vers la page correspondant à son rôle
    // switch ($role) {
    //   case 'Agentcirculation':
    //     header('Location: agentCirculation.php');
    //     break;
    //   case 'Automobiliste':
    //     header('Location: automobiliste.php');
    //     break;
    //   case 'Agentgouvernemental':
    //     header('Location: agentGouvernemental.php');
    //     break;
    //   default:
    //     // Rôle non reconnu, redirection vers la page d'erreur
    //     header('Location: error.php');
    //     break;
    // }
    // exit;
    header('Location: automobiliste.php');
    if (mysqli_num_rows($result4) == 1) {
      $row4 = mysqli_fetch_assoc($result4);
      $_SESSION['savoirdujour'] = $row4['description'];
    }
  } else if (mysqli_num_rows($result2) == 1) {
    // Start a session and set the session variable
    session_start();
    $_SESSION['logged_in'] = true;
    // Récupération du rôle de l'utilisateur à partir de l'URL
    $role = $_GET['role'];

    // Enregistrement du rôle de l'utilisateur dans la session
    $_SESSION['role'] = $role;
    header('Location: automobiliste.php');

    // Redirection de l'utilisateur vers la page correspondant à son rôle
    // switch ($role) {
    //   case 'Agentcirculation':
    //     header('Location: agentCirculation.php');
    //     break;
    //   case 'Automobiliste':
    //     header('Location: automobiliste.php');
    //     break;
    //   case 'Agentgouvernemental':
    //     header('Location: agentGouvernemental.php');
    //     break;
    //   default:
    //     // Rôle non reconnu, redirection vers la page d'erreur
    //     header('Location: error.php');
    //     break;
    // }
    //  exit;
    header('Location: agentCirculation.php');
  } else if (mysqli_num_rows($result3) == 1) {

    // Start a session and set the session variable

    session_start();
    $_SESSION['logged_in'] = true; // Récupération du rôle de l'utilisateur à partir de l'URL
    $role = $_GET['role'];

    // Enregistrement du rôle de l'utilisateur dans la session
    $_SESSION['role'] = $role;

    //Redirection de l'utilisateur vers la page correspondant à son rôle
    // switch ($role) {
    //   case 'Agentcirculation':
    //     header('Location: agentCirculation.php');
    //     break;
    //   case 'Automobiliste':
    //     header('Location: automobiliste.php');
    //     break;
    //   case 'Agentgouvernemental':
    //     header('Location: agentGouvernemental.php');
    //     break;
    //   default:
    //     // Rôle non reconnu, redirection vers la page d'erreur
    //     header('Location: error.php');
    //     break;
    // }
    // exit;
    header('Location: agentGouvernemental.php');
  } else {
    // Display an error message
    echo "<p class='error-message'>Invalid login credentials. Please try again.</p>";
  }
}
?>
</body>

</html>
<?php
  session_start();;
  // Récupération du rôle de l'utilisateur à partir de l'URL
  $role = $_GET['role'];

  // Enregistrement du rôle de l'utilisateur dans la session
  $_SESSION['role'] = $role;

  echo $_SESSION['role'];

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Erreur de rôle</title>
  </head>
  <body>
    <h3>Vous n'êtes pas autorisé à accéder à cette page en raison de votre identité. Veuillez vérifier votre lien et réessayer.</h3>
  </body>
</html>

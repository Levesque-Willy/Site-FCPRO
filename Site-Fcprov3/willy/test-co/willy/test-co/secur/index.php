<?php
// Authentification basique php MYSQL avec mot de passe crypté
  $username = $_POST['username'];
  $password = $_POST['password'];
  $salt = "CrazyassLongSALTThatMakesYourUsersPasswordVeryLong123!!312567__asdSdas";
  $password = hash('sha256', $salt.$password);
  //echo $password;

  // Mysql connection
  $mysqli = new mysqli("localhost","mysqluser","root","");
  $stmt = $mysqli->prepare('SELECT userid FROM Users WHERE password = ? AND username = ?');
  // (ss -> string, string) Toujours lier les paramètres et utiliser l'instruction préparée pour améliorer la sécurité
  $stmt->bind_param("ss", $password, $username);
  $stmt->execute();
  $stmt->bind_result($userid );

  if (!empty($stmt->fetch())) {
// si la récupération n'est pas vide, nous avons des résultats et le hachage du mot de passe était correct
    echo "User was found";
  } else
    echo "User was not found";

$mysqli->close();
?>

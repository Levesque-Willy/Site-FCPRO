<html>
<head>
  <meta charset="utf-8">
</head>
<body>

<h1 align=center> Fc-pro </h1>
<h1 align=center> ajouter une pseudo</h1>
<hr><br>

<?php
  $nom = $_POST["nom"];
  $Prenom = $_POST["prenom"];
  $mail = $_POST["mail"];
  $motdepasse = hash('sha256', $_POST['motdepasse']);
  $tel = $_POST["tel"];
	$pseudo = $_POST["pseudo"];


	echo"<hr>ajout de $nom, $Prenom, $mail, $motdepasse, $tel, $pseudo <hr>";
  //--- Connection au SGBDR
  $DataBase = mysqli_connect( "localhost" , "root" , "" );

  //--- Ouverture de la base de données
  mysqli_select_db( $DataBase, "fcpro_bd" );

  //--- Préparation de la requête
  $Requete = "INSERT INTO utilisateur (Nom, Prenom, AdresseMail, MotDePasse, Telephone, Pseudonyme)
  VALUES ( '$nom', '$Prenom', '$mail', '$motdepasse', $tel, '$pseudo');";

	echo"$Requete<hr>";
  //--- Exécution de la requête (fin du script possible sur erreur ...)
  $Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;

  //--- Déconnection de la base de données
  mysqli_close ( $DataBase ) ;
?>
<li> <a href="afficherutil.php"> Afficher </a>
</body>
</html>

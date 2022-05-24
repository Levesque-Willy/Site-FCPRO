<html>
<head>
  <meta charset="utf-8">
</head>
<body>

<h1 align=center> Fc-pro </h1>
<h1 align=center> ajouter une formation</h1>
<hr><br>

<?php
  $id = $_POST["id"];
  $date = $_POST["date"];
  $duree = $_POST["duree"];
  $place = $_POST["place"];
  $heure = $_POST["heure"];
	$formation = $_POST["formation"];
  $lien = $_POST["lien"];
  $desc = $_POST["desc"];

	echo"<hr>ajout de $id, $date, $duree, $place, $heure, $formation, $lien et $desc <hr>";
  //--- Connection au SGBDR
  $DataBase = mysqli_connect( "localhost" , "root" , "" );

  //--- Ouverture de la base de données
  mysqli_select_db( $DataBase, "fcpro_bd" );

  //--- Préparation de la requête
  $Requete = "INSERT INTO formation (Code_Forma, DateDebut, Duree, NbPlace, HeureDebut, NomFormation, Lien, Presentation)
  VALUES ( $id, '$date', $duree, $place, $heure, '$formation', '$lien', '$desc');";

	echo"$Requete<hr>";
  //--- Exécution de la requête (fin du script possible sur erreur ...)
  $Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;

  //--- Déconnection de la base de données
  mysqli_close ( $DataBase ) ;
?>
lien pour afficher
<hr>
<li> <a href="Afficher.php"> Afficher </a>
</body>
</html>

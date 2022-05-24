<html>
<head>
  <title>	Sauvegarde de la modification	</title>
  <meta charset="utf-8">
</head>
<body>
<?php
  $id = $_GET["id"];
  $date = $_GET["date"]; 
  $duree = $_GET["duree"];
  $place = $_GET["place"];
  $heure = $_GET["heure"];
  $formation = $_GET["formation"];
  $lien = $_GET["lien"];
  $desc = $_GET["desc"];
  $formateur = $_GET["formateur"];

  echo "Modification de la formation : ". $id .", ". $date.", ". $duree .", ". $place. ", " . $heure .", 
  " . $formation .", ".$lien.", ".$desc.", ".$formateur." dans la base de données";

  //--- Connection au SGBDR et Sélection de la BDD
  $DataBase = mysqli_connect ( "mysql-fcpro.alwaysdata.net" , "fcpro_ndlp" , "fcprondlp" ) ;
  mysqli_select_db ( $DataBase, "fcpro_bd" ) ;

  //--- Préparation de la requête
  $Requete = "UPDATE formation SET DateDebut = '$date', Duree = '$duree', NbPlace = '$place', 
  HeureDebut = '$heure', NomFormation = '$formation' , Lien = '$lien' , Presentation = '$desc',
   IdFormateur = (SELECT (IdFormateur) FROM formateur WHERE Nom = '$formateur') WHERE CodeForma= '$id'";

  //--- Exécution de la requête (fin du script possible sur erreur ...)
  $Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;

  //--- Déconnection de la base de données
  mysqli_close ( $DataBase ) ;  
?>

<hr>
	<center><a href="Afficher.php">Afficher</a></center>
<hr>
</BODY>
</HTML>

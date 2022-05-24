<html>
<head>
  <meta charset="utf-8">
</head>
<body>

<h1 align=center> Fc-pro </h1>
<h1 align=center> ajouter une formation</h1>
<hr><br>
  
<?php
  $id = $_GET["id"];
  $date = $_GET["date"]; 
  $duree = $_GET["duree"];
  $place = $_GET["place"];
  $heure = $_GET["heure"];
	$formation = $_GET["formation"]; 
	
	echo"<hr>ajout de $id, $date, $duree, $place, $heure et $formation<hr>";
  //--- Connection au SGBDR 
  $DataBase = mysqli_connect( "localhost" , "root" , "" );

  //--- Ouverture de la base de données
  mysqli_select_db( $DataBase, "bdfcpro" );

  //--- Préparation de la requête
  $Requete = "INSERT INTO formation (Code_Forma, DateDebut, Duree, NbPlace, HeureDebut, NomFormation) 
  VALUES ( '$id', '$date', '$duree', '$place', '$heure', '$formation');";
    
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

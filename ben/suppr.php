<html>
<head>
  <title>	Suppression d'une formation	</title>
  <meta charset="utf-8">
</head>
<body>
<h1 align=center> Suppression d'une formation </h1>
<h2 align=center> Suppression dans une Base de Données <br>
par un Programme sur le Serveur </h2>
<center> Cette page est générée par un programme PhP exécuté sur le serveur </center>
<hr><br>

<?php
  $id = $_GET["id"];
  
  echo "<center> <b> Suppression de la formation " . $id ;
  echo " de la base de données </b><br><br>" ;

  //--- Connection au SGBDR et Sélection de la BDD
  $DataBase = mysqli_connect ( "localhost" , "root" , "" ) ;
  mysqli_select_db ( $DataBase, "fcpro_bd" ) ;

  //--- Préparation de la requête
  //DELETE FROM `formation` WHERE `formation`.`Code_Forma` =
  $Requete = "Delete FROM formation WHERE CodeForma= '$id'";
  echo "<hr> $Requete <hr>";
  //--- Exécution de la requête (fin du script possible sur erreur ...)
  $Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;

  //--- Déconnection de la base de données
  mysqli_close ( $DataBase ) ;  

?>

<hr>
	<center><a href="Afficher.php">Table de données</a></center>
<hr>
</body>
</html>

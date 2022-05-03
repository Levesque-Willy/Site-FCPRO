<html>
<head>
  <title>	PHP - Exemple n°7	</title>
  <meta charset="utf-8">
</head>
<body>
<h1 align=center> PHP - Exemple n°7 </h1>
<h2 align=center> Suppression dans une Base de Données <br>
par un Programme sur le Serveur </h2>
<center> Cette page est générée par un programme PhP exécuté sur le serveur </center>
<hr><br>

<?php
  $id = $_GET['id'] ;
  
  echo "<center> <b> Suppression de la personne '" . $id ;
  echo "' de la Base de Données </b><br><br>" ;

  //--- Connection au SGBDR et Sélection de la BDD
  $DataBase = mysqli_connect ( "localhost" , "root" , "" ) ;
  mysqli_select_db ( $DataBase, "BD_Personnes" ) ;

  //--- Préparation de la requête
  $Requete = "Delete From personne Where id=". $id ;
    
  //--- Exécution de la requête (fin du script possible sur erreur ...)
  $Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;

  //--- Déconnection de la base de données
  mysqli_close ( $DataBase ) ;  

?>

<hr>
	<center><a href="HTTP://Localhost/Sequence-PHP/PHP-Exemple-07/Exo-7.php">Exo-7</a></center>
<hr>
</BODY>
</HTML>

<html>
<head>
  <title>	PHP - Exemple n°7	</title>
  <meta charset="utf-8">
</head>
<body>
<?php
  $id 		= $_GET['id'] ;
  $nom		= $_GET['nom'] ;
  $prenom	= $_GET['prenom'] ;
  $tel		= $_GET['tel'] ;
  
  echo "Modification de la Personne : " . $id .", ". $nom .", ". $prenom .", ". $tel. ", dans la base de données";

  //--- Connection au SGBDR et Sélection de la BDD
  $DataBase = mysqli_connect ( "localhost" , "root" , "" ) ;
  mysqli_select_db ( $DataBase, "BD_Personnes" ) ;

  //--- Préparation de la requête
  $Requete = "UPDATE personne SET Nom = '$nom', Prenom = '$prenom', Telephone = '$tel' WHERE personne.Id = $id" ;
    
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

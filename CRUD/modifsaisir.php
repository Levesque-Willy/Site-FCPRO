<html>
<head>
  <title>	PHP - Exemple n°7	</title>
  <meta charset="utf-8">
</head>
<body>
<h1 align=center> PHP - Exemple n°7 </h1>
<h2 align=center> Modification dans une Base de Données <br>
par un Programme sur le Serveur </h2>
<center> Cette page est générée par un programme PhP exécuté sur le serveur </center>
<hr><br>

<?php
  $id 		= $_GET['id'] ;

  //--- Connection au SGBDR et Sélection de la BDD
  $DataBase = mysqli_connect ( "localhost" , "root" , "" ) ;
  mysqli_select_db ( $DataBase, "BD_Personnes" ) ;

  $Requete = "SELECT * FROM personne WHERE id=". $id ;

  $Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;
  
  if (  $ligne = mysqli_fetch_array($Resultat)  ) //bool
  {	
	echo "<center>Modification de la Personne <b>" . $id ."</b> dans la base de données";
	echo '<form action="HTTP://Localhost/Sequence-PHP/PHP-Exemple-07/modifsave.php" >' ;
	echo "<input type=hidden name=id value=$id>" ;
	echo "<pre>Nom :		<input type=text name=nom value=".$ligne['Nom']."><pre>" ;
	echo "<pre>Prénom :	<input type=text name=prenom value=".$ligne['Prenom']."><pre>" ;
	echo "<pre>Tel :		<input type=text name=tel value=".$ligne['Telephone']."><pre>" ;
	echo "<input type=submit value='Modifier' >" ;
	echo "</form>" ;
	echo "</center>" ;
  } 
  else echo "personne $id n'existe plus/pas !\n" ;
	
  mysqli_free_result ( $Resultat ) ;
  mysqli_close ( $DataBase ) ; //--- Déconnexion de la BDD

?>

<hr>
	<center><a href="HTTP://Localhost/Sequence-PHP/PHP-Exemple-07/Exo-7.php">Exo-7</a></center>
<hr>
</BODY>
</HTML>


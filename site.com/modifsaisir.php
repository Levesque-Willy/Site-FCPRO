<html>
<head>
  <title>	Modification d'une formation dans la base de données 	</title>
  <meta charset="utf-8">
</head>
<body>
<h1 align=center> Modification d'une formation dans la base de données </h1>
<center> Cette page est générée par un programme PhP exécuté sur le serveur </center>
<hr><br>

<?php
  $id = $_GET["id"] ;

  $DataBase = mysqli_connect ( "localhost" , "root" , "" ) ;
  mysqli_select_db ( $DataBase, "fcpro_bd" ) ;

  $Requete = "SELECT * FROM formation WHERE CodeForma=". $id ;

  $Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;
  
  if (  $ligne = mysqli_fetch_array($Resultat)  )
  {	
	echo "<center>Modification de la formation <b>" . $id ."</b> dans la base de données";
  echo "<p>Veuillez rentrer le numéro d'identification de la formation dans le formulaire CodeForma !</p>";
	echo '<form action="modifsave.php" >' ;

  echo "<pre>CodeForma    : <input name=id        type=text value".$ligne['CodeForma']."> <pre>";
	echo "<pre>DateDebut    : <input name=date      type=text value=".$ligne['DateDebut'].">    <pre>" ;
	echo "<pre>Duree        : <input name=duree     type=text value=".$ligne['Duree'].">        <pre>" ;
  echo "<pre>NbPlace      : <input name=place     type=text value=".$ligne['NbPlace'].">      <pre>" ;
	echo "<pre>HeureDebut   : <input name=heure     type=text value=".$ligne['HeureDebut'].">   <pre>" ;
	echo "<pre>NomFormation : <input name=formation type=text value=".$ligne['NomFormation']."> <pre>" ;
  echo "<pre>Lien         : <input name=lien      type=file value=".$ligne['Lien']."> <pre>" ;
  echo "<pre>Présentation  : <input name=desc      type=text value=".$ligne['Presentation']."> <pre>" ;
  echo "<pre>Formateur  : <input name=formateur      type=select value=".$ligne['Nom']."> <pre>" ;

	echo "<input type=submit value='Modifier' >" ;
	echo "</form>" ;
	echo "</center>" ;
  } 
  else echo "La formation $id n'existe plus/pas !\n" ;
	
  mysqli_free_result ( $Resultat ) ;
  mysqli_close ( $DataBase ) ; //--- Déconnexion de la BDD

?>
</body>
</html>


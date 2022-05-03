<html>
<head>
  <title>	Afficher	</title>
  <meta charset="utf-8">
</head>
<body>

<head><center>

<?php
function stage
{
  //--- Connection au SGBDR 
  $DataBase = mysqli_connect ( "localhost" , "root" , "" ) ;	

  //--- Ouverture de la base de données
  mysqli_select_db ( $DataBase, "BD_Agenda" ) ;

  //--- Préparation de la requête
  $Requete = "Select * From Formation Where DateDebut ;" ;

  //--- Exécution de la requête (fin du script possible sur erreur ...)
  $Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;

  //--- Libérer l'espace mémoire du résultat de la requête
  mysqli_free_result ( $Resultat ) ;
  mysqli_close ( $DataBase ) ;  //--- Déconnection de la base de données
}
function duree
{
  //--- Connection au SGBDR 
  $DataBase = mysqli_connect ( "localhost" , "root" , "" ) ;	

  //--- Ouverture de la base de données
  mysqli_select_db ( $DataBase, "BD_Agenda" ) ;

  //--- Préparation de la requête
  $Requete = "Select * From Formation Where Duree ;" ;

  //--- Exécution de la requête (fin du script possible sur erreur ...)
  $Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;

  //--- Libérer l'espace mémoire du résultat de la requête
  mysqli_free_result ( $Resultat ) ;
  mysqli_close ( $DataBase ) ;  //--- Déconnection de la base de données
}
?>

<!	Envoyer la fin du tableau HTML	!>
<br>
<hr>
</BODY>
</HTML>
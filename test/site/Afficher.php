<html>
<head>
  <title>	Afficher	</title>
  <meta charset="utf-8">
</head>
<body>

<h2 align=center> Consultation d'une Base de Données <br>
par un Programme sur le Serveur </h2>
<center> Cette page est générée par un programme PhP exécuté sur le serveur </center>
<hr><br>

<head><center>
<table border>
<caption> <b> Personnes </b> </caption>
<tr> <th>Id</th><th> Nom </th> <th> Prénom </th> <th> Téléphone </th> </tr>

<?php
  //--- Connection au SGBDR 
  $DataBase = mysqli_connect ( "localhost" , "root" , "" ) ;	

  //--- Ouverture de la base de données
  mysqli_select_db ( $DataBase, "BD_Personnes" ) ;

  //--- Préparation de la requête
  $Requete = "Select * From personne ;" ;
    
  //--- Exécution de la requête (fin du script possible sur erreur ...)
  $Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;

  //--- Enumération des lignes du résultat de la requête
  while (  $ligne = mysqli_fetch_array($Resultat)  )
  {
    //--- Afficher une ligne du tableau HTML pour chaque enregistrement de la table 
    echo "<tr>\n" ;
	  echo "<td>" . $ligne['id']        . "</td>\n" ;
    echo "<td>" . $ligne['date']        . "</td>\n" ;
    echo "<td>" . $ligne['duree']        . "</td>\n" ;
    echo "<td>" . $ligne['place']        . "</td>\n" ;
    echo "<td>" . $ligne['heure']        . "</td>\n" ;
    echo "<td>" . $ligne['formation']        . "</td>\n" ;  
	  echo "<td>" . "<a href='Supprimer.php?id=123'> supprimer</a>" . "</td>\n" ; 
	  echo "<td>" . "<a href='Modifier.php?id=123'> Modifier</a>" . "</td>\n" ; 
    echo "</tr>\n" ;
  }
  //--- Libérer l'espace mémoire du résultat de la requête
  mysqli_free_result ( $Resultat ) ;
  mysqli_close ( $DataBase ) ;  //--- Déconnection de la base de données
?>

<!	Envoyer la fin du tableau HTML	!>
</table>
</center>
<br>
<a href='http://localhost/Sequence-PHP/PHP-Exemple-06/Exo-06.html'> Creer nouvelle personne </a>
<hr>
</BODY>
</HTML>

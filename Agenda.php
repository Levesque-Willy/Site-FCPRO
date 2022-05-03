<html>
<head>
  <title>	PHP - Exemple n°6	</title>
    <meta charset="utf-8">
</head>
<body>
<table border>
<caption> <b> Formation </b> </caption>
<tr> <th> DateDebut </th> <th> DateFin </th> <th> NbPlace </th><th> HeureDebut </th> </tr>

<?php
  //--- Connection au SGBDR 
  $DataBase = mysqli_connect ( "localhost" , "root" , "" ) ;

  //--- Ouverture de la base de données
  mysqli_select_db ( $DataBase, "bdagenda" ) ;

  //--- Préparation de la requête
  $Requete = "Select * From formation ;" ;
    
  //--- Exécution de la requête (fin du script possible sur erreur ...)
  $Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;

  //--- Enumération des lignes du résultat de la requête
  while (  $ligne = mysqli_fetch_array($Resultat)  )
  {
    //--- Afficher une ligne du tableau HTML pour chaque enregistrement de la table 
    echo "<tr>\n" ;
    echo "<td>" . $ligne['DateDebut']       . "</td>\n" ;
    echo "<td>" . $ligne['DateFin']    . "</td>\n" ;
    echo "<td>" . $ligne['NbPlace'] . "</td>\n" ;
	echo "<td>" . $ligne['HeureDebut']	  . "</td>\n" ;
    echo "</tr>\n" ;
  }

   
  //--- Libérer l'espace mémoire du résultat de la requête
  mysqli_free_result ( $Resultat ) ;

  //--- Déconnection de la base de données
  mysqli_close ( $DataBase ) ;  
?>
</table>
</center>

<br>

</BODY>
</HTML>

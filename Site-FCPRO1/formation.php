<html>
<head>
  <title>	Afficher	</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="catalogue.css">
</head>
<body>

<h2 align=center> Consultation de la Base de Données des formations <br> </h2>
<center> Cette page est générée par un programme PhP exécuté sur le serveur </center>
<hr><br>

<head><center>
<table border>
<caption> <b> Personnes </b> </caption>
<tr> <th>Code_Forma</th> <th>DateDebut</th> <th>Duree</th> <th>NbPlace</th> 
     <th>HeureDebut</th> <th>NomFormation</th> <th>Lien</th> <th>Presentation</th></tr>

<?php
  //--- Connection au SGBDR 
  $DataBase = mysqli_connect ( "mysql-fcpro.alwaysdata.net" , "fcpro_ndlp" , "fcprondlp" ) ;	

  //--- Ouverture de la base de données
  mysqli_select_db ( $DataBase, "fcpro_bd" ) ;

  //--- Préparation de la requête
  $Requete = "Select * From formation ;" ;
    
  //--- Exécution de la requête (fin du script possible sur erreur ...)
  $Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;

  //--- Enumération des lignes du résultat de la requête
  while (  $ligne = mysqli_fetch_array($Resultat)  )
  {
    //--- Afficher une ligne du tableau HTML pour chaque enregistrement de la table 
    echo "<tr>\n" ;
	  echo "<td>" . $ligne['Code_Forma']          . "</td>\n" ;
    echo "<td>" . $ligne['DateDebut']           . "</td>\n" ;
    echo "<td>" . $ligne['Duree']               . "</td>\n" ;
    echo "<td>" . $ligne['NbPlace']             . "</td>\n" ;
    echo "<td>" . $ligne['HeureDebut']          . "</td>\n" ;
    echo "<td>" . $ligne['NomFormation']        . "</td>\n" ;  
    echo "<td>" . $ligne['Lien']                . "</td>\n" ; 
    echo "<td>" . $ligne['Presentation']        . "</td>\n" ; 
    echo "</tr>\n" ;
  }
  //--- Libérer l'espace mémoire du résultat de la requête
  mysqli_free_result ( $Resultat ) ;
  mysqli_close ( $DataBase ) ;  //--- Déconnection de la base de données
?>
</table>
<br>
<hr>
</body>
</html>

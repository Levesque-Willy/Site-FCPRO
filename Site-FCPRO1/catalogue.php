<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="catalogue.css">
</head>
<body>

<h2 align=center> Consultation des formations <br> </h2>
<hr><br>

<head><center>
<table class='table'>
<tr> <th>Code_Forma</th> <th>DateDebut</th> <th>Duree</th> <th>NbPlace</th> 
     <th>HeureDebut</th> <th>NomFormation</th> <th>Lien</th> <th>Presentation</th></tr>
<?php
$cssFile = "catalogue.css";
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
  echo "<td class='code'>" . $ligne['Code_Forma']          . "</td>\n" ;
  echo "<td class='code'>" . $ligne['DateDebut']           . "</td>\n" ;
  echo "<td class='code'>" . $ligne['Duree']               . "</td>\n" ;
  echo "<td class='code'>" . $ligne['NbPlace']             . "</td>\n" ;
  echo "<td class='code'>" . $ligne['HeureDebut']          . "</td>\n" ;
  echo "<td class='code'>" . $ligne['NomFormation']        . "</td>\n" ;  
  echo "<td class='code'>" . $ligne['Lien']                . "</td>\n" ; 
  echo "<td class='code'>" . $ligne['Presentation']        . "</td>\n" ; 
  echo "</tr>\n" ;
  echo "<body style='background-color:white'>";
}
//--- Libérer l'espace mémoire du résultat de la requête
mysqli_free_result ( $Resultat ) ;
mysqli_close ( $DataBase ) ;  //--- Déconnection de la base de données
?>
</table>
<body>
    
</body>
</html>
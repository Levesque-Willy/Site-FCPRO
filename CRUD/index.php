<html>
<head>
  <title>	PHP - Exemple n°7	</title>
  <meta charset="utf-8">
</head>
<body>
<br><br><h1 align=center> PHP - Exemple n°7 - BDD</h1><br><br>

<?php
//------------------------------------------------------------------------------
//  Consultation de la BD et affichage des enregistrements dans un tableau
//
function  ConsulterBD ()
{
  //--- Début de table en HTML
  echo "<center>" ;
  echo "<table border>" ;
  echo "<caption> <b> Personnes </b> </caption>" ;
  echo "<tr> <th> Id </th> <th> Nom </th> <th> Prénom </th> <th> Téléphone </th> </tr>" ;

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
    echo "<td>" . $ligne['CodeFormation']        . "</td>\n" ;
      echo "<td>" . $ligne['DateDebut']       . "</td>\n" ;
      echo "<td>" . $ligne['NbJours']    . "</td>\n" ;
      echo "<td>" . $ligne['NbStagiaires'] . "</td>\n" ;
    echo "<td>" . "<a href='modifsaisir.php?id=123'> Modifier</a>" . "</td>\n" ; 
    echo "<td>" . "<a href='suppr.php?id=123'> Supprimer</a>" . "</td>\n" ; 
      echo "</tr>\n" ;
  }
  echo "<td>" . "<a href='modifsaisir.php?id=123'> Ajouter</a>" . "</td>\n" ; 
  //--- Libérer l'espace mémoire du résultat de la requête
  mysqli_free_result ( $Resultat ) ;

  //--- Déconnection de la base de données
  mysqli_close ( $DataBase ) ;  
}
//------------------------------------------------------------------------------
//  Programme Principal
//
  //--- Consultation ...
  ConsulterBD();
//------------------------------------------------------------------------------
?>
<form action="ajouter.php">
<tr><td></td>
	<td><input size=9 type=text name=nom value=""></td>
	<td><input size=9 type=text name=prenom value=""></td>
	<td><input size=9 type=text name=tel value=""></td>
	<td colspan=2><input type=submit value='Ajouter' ></td>
</tr>
</form>
</table>
<br>
</center>

	<center>
	<a href="HTTP://Localhost/Sequence-PHP/index.html">Index</a>
	</center>

<hr>
</BODY>
</HTML>

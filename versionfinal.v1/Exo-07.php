<html>
<head>
  <title>	PHP - Exemple n°7	</title>
  <meta charset="utf-8">
</head>
<body>

<center> Cette page est générée par un programme PhP exécuté sur le serveur </center>
<hr><br>

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
  echo "<tr> <th> Nom </th> <th> Prénom </th> <th> Téléphone </th><th>Id</th> </tr>" ;

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
    echo "<td>" . $ligne['Nom']       . "</td>\n" ;
    echo "<td>" . $ligne['Prenom']    . "</td>\n" ;
    echo "<td>" . $ligne['Telephone'] . "</td>\n" ;
    echo "<td>" . $ligne['Id'] . "</td>\n";
    echo "<td><a href='exo-07.php?Id=".$ligne['Id']."'>supre</a>"."</td>\n";
    echo "<td><a href='ModifierSaisir.php?Id=".$ligne['Id']."&Nom=".$ligne['Nom']."&Prenom=". $ligne['Prenom']."&Tel=". $ligne['Telephone'] ."'>modifier</a>";
    echo "</tr>\n" ;
  }

  //--- Libérer l'espace mémoire du résultat de la requête
  mysqli_free_result ( $Resultat ) ;

  //--- Déconnection de la base de données
  mysqli_close ( $DataBase ) ;

  //--- Fin de table en HTML
  echo "</table>" ;
  echo "<br>" ;
  echo "Notez l id de la personne que vous voulez supprimer." ;
  echo "</center>" ;
}
//------------------------------------------------------------------------------
//  Supprimer un enregistrement de la Table Personnes
//
function  SupprimerBD ( $IdRecherche )
{
  echo "<center> <b> Suppression de la personne '" . $IdRecherche ;
  echo "' de la Base de Données </b><br><br>" ;

  //--- Connection au SGBDR
  $DataBase = mysqli_connect ( "localhost" , "root" , "" ) ;

  //--- Ouverture de la base de données
  mysqli_select_db ( $DataBase, "BD_Personnes" ) ;

  //--- Préparation de la requête
  $Requete = "Delete From personne Where Id='". $IdRecherche ."' Limit 1;" ;

  //--- Exécution de la requête (fin du script possible sur erreur ...)
  $Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;

  //--- Libérer l'espace mémoire du résultat de la requête
//  mysql_free_result ( $Resultat ) ;

  //--- Déconnection de la base de données
  mysqli_close ( $DataBase ) ;
}
//------------------------------------------------------------------------------
//  Programme Principal
//
  if (  isset($_GET['Id'])  )
  {
    $Id = $_GET['Id'] ;

    if (  isset($Id)  &&  ($Id!='')  )
    {
      //--- Suppression ...
      SupprimerBD ( $Id ) ;
    }
  }

  //--- Consultation ...
  ConsulterBD();
//------------------------------------------------------------------------------
?>
<a href="HTTP://Localhost/Sequence-PHP/PHP-Exemple-06/Exo6.html">creer des gens</a>
<a href="HTTP://Localhost/Sequence-PHP/afficher.php">retour a afficher</a>

<hr>
</BODY>
</HTML>

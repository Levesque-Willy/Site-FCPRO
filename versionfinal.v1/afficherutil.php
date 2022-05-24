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
<tr> <th>ID</th> <th>Nom</th> <th>Prenom</th> <th>AdresseMail</th>
     <th>MotDePasse</th> <th>Telephone</th> <th>Pseudonyme</th> </tr>

<?php
  //--- Connection au SGBDR
  $DataBase = mysqli_connect ( "mysql-fcpro.alwaysdata.net" , "fcpro_ndlp" , "fcprondlp" ) ;

  //--- Ouverture de la base de données
  mysqli_select_db ( $DataBase, "fcpro_bd" ) ;

  //--- Préparation de la requête
  $Requete = "Select * From utilisateur  ;" ;

  //--- Exécution de la requête (fin du script possible sur erreur ...)
  $Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;

  //--- Enumération des lignes du résultat de la requête
  while (  $ligne = mysqli_fetch_array($Resultat)  )
  {
    //--- Afficher une ligne du tableau HTML pour chaque enregistrement de la table
    echo "<tr>\n" ;
    echo "<td>" . $ligne['IDutilisayeur']               . "</td>\n" ;
    echo "<td>" . $ligne['Nom']               . "</td>\n" ;
    echo "<td>" . $ligne['Prenom']             . "</td>\n" ;
    echo "<td>" . $ligne['AdresseMail']          . "</td>\n" ;
    echo "<td>" . $ligne['MotDePasse']        . "</td>\n" ;
    echo "<td>" . $ligne['Telephone']                . "</td>\n" ;
    echo "<td>" . $ligne['Pseudonyme']        . "</td>\n" ;
    echo "</tr>\n" ;
  }
  //--- Libérer l'espace mémoire du résultat de la requête
  mysqli_free_result ( $Resultat ) ;
  mysqli_close ( $DataBase ) ;  //--- Déconnection de la base de données
?>
</table>
<br>
<hr>
<a href="utilisateur.html"> Ajouter </a>
<br>
<a href="adminpage.php">retour page Accueil</a>
</body>
</html>

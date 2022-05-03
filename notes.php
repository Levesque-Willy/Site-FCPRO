<?php
	$nom  =			$_POST["name"]; 
  $note = 		$_POST["rate"];
	$avis =     $_POST["review"];
	
	echo"<hr>ajout de $nom $note $avis<hr>";
  //--- Connection au SGBDR 
  $DataBase = mysqli_connect ( "localhost" , "root" , "" ) ;

  //--- Ouverture de la base de données
  mysqli_select_db ( $DataBase, "fcpro_ndlp" ) ;

  //--- Préparation de la requête
  $Requete = "INSERT INTO evaluations ( Nom, Eval, Commentaire) VALUES ( '$nom', '$note', '$avis');" ;
    
	echo"$Requete<hr>";
  //--- Exécution de la requête (fin du script possible sur erreur ...)
  $Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;



  //--- Déconnection de la base de données
  mysqli_close ( $DataBase ) ; 


?>



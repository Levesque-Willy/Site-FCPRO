<?php
  $id =       $_POST["id"] ;
	$nom  =			$_POST["name"]; 
  $note = 		$_POST["rate"];
	$avis =     $_POST["review"];
	
	echo"<hr>ajout de $nom $note $avis<hr>";
  //--- Connection au SGBDR 
  $DataBase = mysqli_connect ( "localhost" , "root" , "" ) ;

  //--- Ouverture de la base de données
  mysqli_select_db ( $DataBase, "fcpro_bd" ) ;

  //--- Préparation de la requête
  $Requete = "INSERT INTO evaluations (CodeForma, Nom, Eval, Commentaire) VALUES ('$id', '$nom', '$note', '$avis');" ;
    
	echo"$Requete<hr>";
  //--- Exécution de la requête (fin du script possible sur erreur ...)
  $Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;



  //--- Déconnection de la base de données
  mysqli_close ( $DataBase ) ; 
  //header("Location: Comm.html");
  //die();

  function getIp(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
      $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
      $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
      $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
  }
  echo 'L adresse IP de l utilisateur est : '.getIp();
  header('Location: afficher.php');
?>



<html>
<head> <title>	Saisir une formation	</title> 
<meta charset="UTF-8">
<head>

<body>
<h1 align=center >	Ajouter une formation dans la base de donnée</h1>
<hr>
	<form action="Creer-enregistrer.php" method="post">	
		CodeForma <input name="id" type=text value=""> <br>
		DateDebut : <input name=date type=text value="">	<br>
		Duree : <input name=duree type=text value="">	<br>
		NbPlace : <input name=place type=text value="">	<br>
		HeureDebut : <input name=heure type=text value="">	<br>
		NomFormation : <input name=formation type=text value="">	<br>
		Lien : <input name=lien type=file> <br>
		Presentation : <input name=desc type=text value="">	<br>
		<br>
			<?php
				$DataBase = mysqli_connect( "localhost" , "root" , "" );
				mysqli_select_db ( $DataBase, "fcpro_bd" ) ;

				$Requete = " SELECT * FROM formateur ;" ;

				$Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;
			?>
				<table><tr><td>
				<select name=formateur>
				<option value="">Veuillez choisir le formateur</option>
			<?php
				while ($donnees=mysqli_fetch_array($Resultat))
				{
				echo '<option>'.$donnees['Prenom']." ".$donnees['Nom'].'</option>';	
				}
			?>
			</select></table>	
		<br>	
		<input type=submit value="Ajouter" >
	</form>
<hr>
<li><a href="Afficher.php">Base de données</a></li>
</body>
</html> 
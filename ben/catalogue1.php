<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans titre</title>
</head>
 
<body>
<select name="">
<?php
mysql_connect("{HOST}", "{LOGIN_NAME}", "{PASSWORD}");
mysql_select_db("{DATABASE}");
$reponse = mysql_query("SELECT * FROM `{TABLE}` ");
while ($donnees = mysql_fetch_array($reponse) )
{?>
<option value="<?php echo $donnees['VALEUR']; ?>"><?php echo $donnees['VALEUR']; ?></option>
<?php } ?>
</select>
</input></p>
 
</select>
</FORM>
</select>
 
</form>
</body>
</html>

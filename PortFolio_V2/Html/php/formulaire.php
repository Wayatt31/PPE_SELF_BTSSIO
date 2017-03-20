<?php


	if(isset($_POST['Nom'])) $Nom=$_POST['Nom'];
	else $Nom="";

	if(isset($_POST['Email'])) $Email=$_POST['Email'];
	else $Email="";

	if(isset($_POST['Message'])) $Message=$_POST['Message'];
	else $Message="";


	$db = new PDO('mysql:host=localhost;dbname=portfolio;charset=utf8','root','') or die('erreur de sélection'.mysql_error());
    
	$db->exec("INSERT INTO formulaire(Nom, Email, Message) VALUES('$Nom', '$Email', '$Message')") or die('Erreur SQL'.$sql.'');

?>
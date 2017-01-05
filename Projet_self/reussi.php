<?php
	session_start();
	if(!isset($_SESSION['connexion']))
	{
		Header('Location:connexion.php');
	}
?>

<html>
	<head>
		<meta charset="UTF-8">
		<title> Acceuil </title>
	</head>
	<body>
		Reussi<br>
		
		<!-- Deconnexion -->
		<form method="POST" action="conn/deco.php">
			<input type="submit" name="deconnexion" value="Deconnexion">
		</form>
	</body>
</html>
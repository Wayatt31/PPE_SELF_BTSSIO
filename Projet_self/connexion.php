<html>
	<head>
		<meta charset="UTF-8">
		<title> Page admin </title>
	</head>
	<body>
		<form method="POST" action="conn/checkconn.php">
			<label> Nom utilisateur </label>
			<input type="text" name="log" required><br>
			<label> Mot de passe </label>
			<input type ="text" name="mdp" required><br>
			<input type="submit" name="submit" value="connexion">
		</form>
		</body>
</html>
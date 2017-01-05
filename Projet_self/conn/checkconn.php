<?php
	include '../../include/bdd.inc.php';

	$req = $conn->prepare("SELECT * FROM connexion WHERE log = ? AND mdp = ?");
	$req->execute(array($_POST['log'], $_POST['mdp']));
	$data = $req->fetch();
		if($data)
		{
			session_start();
			$_SESSION['connexion']=true;
			header('Location:../reussi.php');
		}
		else
		{
			header('Location:../connexion.php');
		}
			
?>
<?php
	include 'include/bdd.inc.php';
	$id=$_POST['liste'];
	$SQL="DELETE FROM projet where id='$id'";
	$conn->query($SQL);
	$SQL="DELETE FROM possede where idppe='$id'";
	$conn->query($SQL);
	Header('Location:Projet_creation.php');
?>
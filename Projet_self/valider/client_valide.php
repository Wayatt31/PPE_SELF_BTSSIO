
<?php
	
	include("../include/bdd.inc.php"); //inclus la liaison à la base de donnée
	include("../Classes/Classe_Client.php"); //inclus la classe CLIENT
	
	
	if(isset($_POST['modifier']))
	{
	$oclient = new CLIENT('','','','','','','','','','','','','','');
	$res = $oclient->affiche_CLIENT($conn);
	While($resultat=$res->fetch())
	   {
		  $nameclient='nomclient'.$resultat->idclient;
          $preclient='prenomclient'.$resultat->idclient;
		  $nomclient=$_POST[$nameclient];
		  $prenomclient=$_POST[$preclient];
		  $oclient->update_CLIENT($resultat->idclient, $nomclient, $prenomclient, $conn);
	   }
	}
	
	if(isset($_POST['ajouter']))
	{	
		$oclient = new CLIENT('','','','','','','','','','','','','','');
		$nomclient=$_POST['nom'];
		$prenomclient=$_POST['prenom'];
		$oclient->ajouter_CLIENT($nomclient,$prenomclient,$conn);
	}
	
	if(isset($_POST['supprimer']))
	{
		$oclient = new CLIENT('','','','','','','','','','','','','','');
		$idclient=$_POST['liste'];
		$oclient->supprimer_CLIENT($idclient,$conn);
		
	}
	
	Header('Location:../client.php');
?>

<?php
	include("../include/bdd.inc.php");
	include("../Classes/Classe_Produit.php");
	
	
	if(isset($_POST['modifier']))
	{
		$oproduit = new PRODUITS('','');
		$res = $oproduit->affiche_PRODUITS($conn);
		While($resultat=$res->fetch())
		{
			$namelib='libproduit'.$resultat->idproduit;		
			$lib = $_POST[$namelib];	
			$oproduit->update_PRODUITS($resultat->idproduit,$lib,$conn);
		}
	}
	
	if(isset($_POST['ajouter']))
	{	
		$oproduit = new PRODUITS('','','');
		$lib=$_POST['lib'];
		$oproduit->ajouter_PRODUITS($lib,$conn);
	}
	
	if(isset($_POST['supprimer']))
	{
		$oproduit = new PRODUITS('','','');
		$idproduit=$_POST['liste'];
		$oproduit->supprimer_PRODUITS($idproduit,$conn);
		
	}
	
	Header('Location:../produit.php');
?>
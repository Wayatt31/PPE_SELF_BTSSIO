
<?php
	include("../include/bdd.inc.php");
	include("../Classes/Classe_Categorie.php");
	
	
	if(isset($_POST['modifier']))
	{
		$ocat = new CATEGORIE('','');
		$res = $ocat->affiche_CATEGORIE($conn);
		While($resultat=$res->fetch())
		{
			$namelib='libcat'.$resultat->idcat;		
			$lib = $_POST[$namelib];	
			$ocat->update_CATEGORIE($resultat->idcat,$lib,$conn);
		}
	}
	
	if(isset($_POST['ajouter']))
	{	
		$ocat = new CATEGORIE('','','');
		$lib=$_POST['lib'];
		$ocat->ajouter_categorie($lib,$conn);
	}
	
	if(isset($_POST['supprimer']))
	{
		$ocat = new CATEGORIE('','','');
		$idcat=$_POST['liste'];
		$ocat->supprimer_categorie($idcat,$conn);
		
	}
	
	Header('Location:../gestion.php');
?>
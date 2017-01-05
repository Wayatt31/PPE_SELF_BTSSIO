
<?php
	include("../include/bdd.inc.php");
	include("../Classes/Classe_typetrans.php");
	
	
	if(isset($_POST['modifier']))
	{
		$otypetrans = new typetrans('','');
		$res = $otypetrans->affiche_typetrans($conn);
		While($resultat=$res->fetch())
		{
			$namelib='libtypetrans'.$resultat->idtypetrans;		
			$libtypetrans = $_POST[$namelib];	
			$otypetrans->update_typetrans($resultat->idtypetrans,$libtypetrans,$conn);
		}
	}
	
	if(isset($_POST['ajouter']))
	{	
		$otypetrans = new typetrans('','','');
		$libtypetrans=$_POST['lib'];
		$otypetrans->ajouter_typetrans($libtypetrans,$conn);
	}
	
	if(isset($_POST['supprimer']))
	{
		$otypetrans = new typetrans('','','');
		$idtypetrans=$_POST['liste'];
		$otypetrans->supprimer_typetrans($idtypetrans,$conn);
		
	}
	
	Header('Location:../typetrans.php');
?>
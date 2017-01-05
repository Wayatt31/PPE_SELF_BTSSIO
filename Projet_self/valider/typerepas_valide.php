
<?php
	include("../include/bdd.inc.php");
	include("../Classes/Classe_Type_Repas.php");
	
	
	
	if(isset($_POST['ajouter']))
	{	
		$otyperepas = new typerepas('','','');
		$libtyprep=$_POST['lib'];
		$otyperepas->ajouter_typerepas($libtyprep,$conn);
	}
	
	
	Header('Location:../typerepas.php');
?>
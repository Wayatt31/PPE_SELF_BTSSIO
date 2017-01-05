<?php
include("include/bdd.inc.php");
include("Classes/Classe_Produit.php");
include("Classes/Classe_Tarifs.php");

	$otarif = new tarif('','','','');
	$res = $otarif->affiche_TARIF($conn);
	while($resultat=$res->fetch()) 
{ 
	$tarifN = "tarifN".$resultat->idcat.$resultat->idproduit;
	$tarifF = "tarifF".$resultat->idcat.$resultat->idproduit;
    $tn = $_POST[$tarifN];
    $tf = $_POST[$tarifF];
    
    
    $otarif->maj_TARIF($resultat->idproduit,$resultat->idcat,$tf,$tn,$conn);
}
?>
<?php

include 'include/bdd.inc.php';


$keyword = '%'.$_POST['keyword'].'%';  // récupère la lettre saisie dans le champ texte en provenance de JS 


$sql = "SELECT * FROM produits WHERE libproduit LIKE (:keyword) ORDER BY idproduit ASC LIMIT 0, 10";  // création de la requete avec sélection des résultats sur la lettre 
$query = $conn->prepare($sql);
$query->bindParam(':keyword', $keyword, PDO::PARAM_STR);
$query->execute();
$list = $query->fetchAll();
foreach ($list as $rs) {
	//  affichage
	$libproduit = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $rs['libproduit']);
	// sélection 
    echo '<li onclick="set_item(\''.str_replace("'", "\'", $rs['libproduit']).'\',\''.str_replace("'", "\'", $rs['idproduit']).'\')">'.$libproduit.'</li>';
}	
?>
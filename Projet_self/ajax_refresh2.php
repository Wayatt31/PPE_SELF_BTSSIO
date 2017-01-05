<?php

include 'include/bdd.inc.php';


$keyword = '%'.$_POST['keyword'].'%';  // récupère la lettre saisie dans le champ texte en provenance de JS 


$sql = "SELECT * FROM client WHERE nomclient LIKE (:keyword) ORDER BY idclient ASC LIMIT 0, 10";  // création de la requete avec sélection des résultats sur la lettre 
$query = $conn->prepare($sql);
$query->bindParam(':keyword', $keyword, PDO::PARAM_STR);
$query->execute();
$list = $query->fetchAll();
foreach ($list as $rs) {
	//  affichage
	$nomclient = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $rs['nomclient']." ".$rs['prenomclient']);
	// sélection 
    echo '<li onclick="set_item(\''.str_replace("'", "\'", $rs['nomclient']." ".$rs['prenomclient']).'\',\''.str_replace("'", "\'", $rs['idclient']).'\')">'.$nomclient.'</li>';
}	
?>
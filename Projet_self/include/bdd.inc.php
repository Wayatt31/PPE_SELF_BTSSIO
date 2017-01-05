<?php
$VALEUR_hote='localhost';
$VALEUR_nom_bd='agroself';
$VALEUR_user='root';
$VALEUR_mot_de_passe='';
$conn = new PDO('mysql:host='.$VALEUR_hote.';dbname='.$VALEUR_nom_bd, $VALEUR_user, $VALEUR_mot_de_passe);
	
?>
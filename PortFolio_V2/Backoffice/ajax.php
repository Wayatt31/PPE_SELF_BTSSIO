<?php 

include('include/include.bdd.php');

$idppe = $_POST['idppe'];
$name = $_POST['name'];
$checkbox = $_POST['checkbox'];

$conn->exec("UPDATE possede SET choix=1 WHERE idppe = $idppe AND idcomp= $name ");



?>
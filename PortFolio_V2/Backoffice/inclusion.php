<?php
	include 'bdd.inc.php';

$nom= $_POST['nom'];

$description= $_POST['description'];

$directory = "../img/projet/";
$fichier = $fichier . basename($_FILES["fileToUpload"]["name"]);
$url = "img/projet/" . basename($_FILES["fileToUpload"]["name"]);
$ajout = 1;
$imageFileType = pathinfo($fichier,PATHINFO_EXTENSION);

// Voir si c'est une image

if(isset($_POST["submit"]))
{
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false)
    {
        echo "File is an image - " . $check["mime"] . ".";
        $ajout = 1;
    } 
    else
    {
        echo "File is not an image.";
        $ajout = 0;
    }
}
// Si l'image existe déja alors faire
if (file_exists($fichier)) 
{
    echo "Désolé, l'image est déjà upload.";
    $ajout = 0;
}
// Si l'image est trop grande
if ($_FILES["fileToUpload"]["size"] > 1000000) 
{
    echo "Désolé, l'image est trop volumineuse.";
    $ajout = 0;
}
// Si la variable ajout est à 0
if ($ajout == 0) 
{
    echo "Désolé, votre image n'a pu être upload.";
// Si tout est bon (=1) alors
} 
else
{
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $fichier)) 
    {
        echo "Votre image ". basename( $_FILES["fileToUpload"]["name"]). " a été ajouter à la base de donnée.";
    }
    else
    {
        echo "Désolé, nous n'avons pas pu traîter votre demande.";
    }
}

$req="INSERT INTO projet (libelle, description, photo) 
        VALUES ('$nom','$description', '$url')";



?>
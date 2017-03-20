<?php

session_start();

if(isset($_POST['Ajouter'])){
    include "bdd.inc.php";
        
    $content_dir = '../img/'; // dossier où sera déplacé le fichier
    
    $tmp_file = $_FILES['photo']['tmp_name'];
    
    // on vérifie maintenant l'extension
    $type_file = $_FILES['photo']['type'];

    if(!strstr($type_file, 'png') && !strstr($type_file, 'jpg') && !strstr($type_file, 'jpeg'))
    {
        exit("L'image doit être au format PNG, JPG ou JPEG.");
    }

    // on copie le fichier dans le dossier de destination
    $name_file = $_FILES['photo']['name'];

    if( !move_uploaded_file($tmp_file, $content_dir . $name_file) )
    {
        exit("Impossible de copier le fichier dans $content_dir");
    }

    echo "Le fichier a bien été uploadé !";
    
    
    $answer = $conn->exec("INSERT INTO projet(libelle, description, photo) VALUES ('
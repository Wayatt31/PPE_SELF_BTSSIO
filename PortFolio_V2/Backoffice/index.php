<?php


session_start();

$motdepasse = 'wayatt';
$_SESSION['log'] = 'N';
if(isset($_POST['envoi']))
{
    if(isset($_POST['mdp']) AND !empty($_POST['mdp']))
    {
    
            if($_POST['mdp'] == $motdepasse)
            {
                $_SESSION['log']='O';
                header('location: admin.php');

            }
    }  
    
    
}
?>
    <form action="" method="post">
        Veuillez entrez le mot de passe ci-dessous :
        <br/> Mot de passe :
        <input type="password" name="mdp" />
        <input type="submit" name="envoi" value="Entrer" />
    </form>
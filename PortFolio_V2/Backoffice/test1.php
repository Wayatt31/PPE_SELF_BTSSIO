IDEE FORMLAIRE AVEC UN FOREACH :


foreach()

<?php
error_reporting(E_ALL);

error_reporting(E_ALL);
if(!empty($_POST['choix']))
{
echo 'Les valeurs des cases cochées sont :<br />';
foreach($_POST['choix'] as $val)
{
echo $val,'<br />';
}
echo '<br />
Faire un autre test : <a href="checkbox3.php">Tester à nouveau</a>';
}
else
{
echo 'Test de récupération dans le cas de checkbox multiple
<br /><br />
<form method="POST" action="MESCHECKBOXS.php">
    <input type="checkbox" name="choix[]" value="1"> A.1.1<br>
    <input type="checkbox" name="choix[]" value="2"> A.1.2<br>
    <input type="checkbox" name="choix[]" value="3"> A.1.3<br>
    <input type="checkbox" name="choix[]" value="4"> A.1.4<br>
    <input type="checkbox" name="choix[]" value="5"> A.1.5<br>
    <input type="submit" value="test">
</form>';
}
?>



<?php

$conn -> exec($SQL)

$SQL = "INSERT INTO PPE (lib, des, CPA)

VALUES( $lib, $des, $CPA)

£SQL = "SELECT * FROM Competences";
$Resultat = $conn -> QUERY ($SQL);
$Resulatat 6> SetFetchMode ( PDO :: FETCH !)

WHILE ($unres = $Resultat 6> Fetch ())

$idc = $unres -> id
$sql + 3iNSERT into Possede (numppe, ) VALUESs ($idppe, $ide, 'n');
$conn -> exec($SQL);

?>


cours 2 :

$idppe = $_POST ['idppe'];
$lib = $_POST ['nomppe'];
$ch = $_POST [ch];

<input type = "checkbox" name = "<?php echo $idcomp ?>"


    
    BDD importée, sur cette BDD contient une nomanclature dans la table port_activité. Cette même table contient toutes les compétences.
        
        Le but de ce TP est de pouvoir ajouter des compétences à mon PPE précedemment créé.
        Pour ce faire, au niveau de mon backoffice il faut qu au moment ou j ajoute des projets (image description et titre) à mon PPE 
        je dois rediriger vers la même page en changeant simplement l id et pour afficher les 57 compétences qui seront des checks boxs
        Ensuite, il faudra pouvoir en cocher au max 50 au min 0 puis envoyer les données.
        Prendre en compte que si je veux modifier ce que j ai déja fais, il faut un mode "Editer" dans le PPE, dans ces cas là il faut
        refaire une page pour pouvoir cocher ou décocher les checkboxs ou pouvoir modifier la description.

                    
                    http://www.agoravox.fr/tribune-libre/article/singularite-technologique-ou-s-154858
                    http://www.fypeditions.com/la-singularite-technologique/
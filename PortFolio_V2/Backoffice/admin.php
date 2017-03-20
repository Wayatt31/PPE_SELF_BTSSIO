<?php

usleep(500000);
session_start();

	if($_SESSION['log']  != 'O')
		{
    		header('location: index.php');
		}

?>

    <DOCTYPE HTML>
		<html>

		<head>
		    <meta charset="UTF-8">
		</head>
			<body>
    			<P>

					Welcome to the BackOffice

    			</P>
				<h3>

    				Ajouter un projet à votre Portfolio :

				</h3>
					<div class = "formulaire_ajout">

						<form method="post" action="projet_add.php" enctype='multipart/form-data'>

            				<input type='text' name="libelle" placeholder="Libellé">
            				<input type='text' name="description" placeholder="Description">
							<input type='file' name="photo">
							<input type='submit' name="Ajouter" value="Ajouter">

						</form>

					</div>
				
				<h4>
				
					Ajouter une description au portfolio

				</h4>

    			<div class = "formulaire_description">

        			<form method="post" action="">

						<P>
                			Titre
						</P>

            			<input type='text' name="titre">
            			<P>
							Description
            			</P>

            			<input type='text' name="texte">
						<input type='submit' name="Ajouter" value="Ajouter">
					</form>

    			</div>

				<h3>
				        Ajouter les compétences acquises durant le projet :	
				</h3>

 <?php
        echo $resa->lien;
    ?>
		
    <form method="POST" action="Projet_traitement.php?id=<?php echo $id; ?>" id="formulaire" enctype="multipart/form-data">

	<?php
			
        $SQL="SELECT * FROM possede where idppe='$id'";
        $resultat=$conn->query($SQL);
        $resultat->setFetchMode(PDO::FETCH_OBJ);

        While ($unres=$resultat->fetch())

        {
            ?><label><?php echo $unres->idcomp;?>
            <input type="checkbox" name="checkbox[]" id="checkbox" value="<?php echo $unres->idcomp;?>" <?php if($unres->choix==1)
							{
							echo "checked";
							}
            ?>/></label><br>
        <?php
        }
        ?>
				
			<input type="hidden" name="idproj" value="<?php echo "$id" ?>">
			<input type="submit" name="valider" value="Valider">
		</form>
	
	
</body>
		</html>
</DOCTYPE>
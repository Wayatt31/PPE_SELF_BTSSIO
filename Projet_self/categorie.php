<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Aggroself</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="css/pe-icon-7-stroke.css" rel="stylesheet" />
	
	
</head>
<body>

	

<?php
	include("include/bdd.inc.php");
	include("Classes/Classe_Categorie.php");
?>

	<form action="cat_valide.php" method="POST" class="formulaire">
	<label for="nom_salle"><strong> Catégorie : </strong></label>
<?php	
		$ocat = new categorie ('','');
		$res = $ocat -> affiche_CATEGORIE($conn);
		while ($resultat=$res->fetch())
		{
			$namelib= 'libcat'.$resultat->idcat;
?>					
	<p>
		<span><input type="text" name="<?php echo $namelib ?>" value="<?php echo $resultat->idcat ?>"></span>	
		<span><input type="text" name="<?php echo $namelib ?>" value="<?php echo $resultat->libcat ?>"></span>
	</p>
		<?php 
		} 
		?>
						
		<span><button name="modifier" type="submit" value="modifier">Modifier</button></span>
		
	</form>
	
</body>
</html>
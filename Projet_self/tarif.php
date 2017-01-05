<html lang="fr">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Aggroself</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <!--<link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <!--<link href="css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <!--<link href="css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <!--<link href="css/demo.css" rel="stylesheet" /> -->


    <!--     Fonts and icons     -->
    <!--<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />
    <!--<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css' />
    <link href="css/pe-icon-7-stroke.css" rel="stylesheet" />-->
	
</head>

	<body>
		<?php
			include("include/bdd.inc.php");
			include("Classes/Classe_Categorie.php");
			include("Classes/Classe_Produit.php");
			include("Classes/Classe_Tarifs.php");
		?>
		
		<form action="tarif_valide.php" method="POST" >
		
		<table>
		<tr>
			<th>Libellé Tarif</th>
			<th>Tarif Non Fidélisé</th>
			<th>Tarif Fidélisé</th>
		</tr>
		<?php	
			$otarif = new tarif ('','','','');
			$res = $otarif -> affiche_TARIF($conn);
			while ($resultat=$res->fetch())
			{
				$tn = "tarifN".$resultat->idcat.$resultat->idproduit;
				$tf = "tarifF".$resultat->idcat.$resultat->idproduit;
		?>
			<tr>
				<td>
         			<?php echo $resultat->tarifN; ?>	
         		</td>                
                <td>
					<input type="text" name="<?php echo $tn; ?>" value="<?php echo $resultat->tarifN; ?>">
                </td>
				<td>
					<input type="text" name="<?php echo $tf; ?>" value="<?php echo $resultat->tarifF; ?>">
				</td>
			 </tr>
			
		<?php
			}
		?>
		</table>
		
		<input type="submit" name="modifier" value="Modifier">
		</form>

		
	</body>
</html>
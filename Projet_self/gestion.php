<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Light Bootstrap Dashboard by Creative Tim</title>

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
	
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	
	
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="assets/img/sidebar-6.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    AgroSelf
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a id="acceuil">
                        <i class="pe-7s-graph"></i>
                        <p>Acceuil</p>
                    </a>
                </li>
                <li>
                    <a id="passage">
                        <i class="pe-7s-user"></i>
                        <p>Passage</p>
                    </a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="pe-7s-note2"></i>
                        <p>Tarifs</p>
                    </a>
                </li>
                <li>
                    <a href="typography.html">
                        <i class="pe-7s-news-paper"></i>
                        <p>Comptabilité</p>
                    </a>
                </li>
                <li>
                    <a href="icons.html">
                        <i class="pe-7s-science"></i>
                        <p>Gestion</p>
                    </a>
                </li>
                <li>
                    <a href="maps.html">
                        <i class="pe-7s-map-marker"></i>
                        <p>Stats</p>
                    </a>
                </li>
                <li>
                    <a href="notifications.html">
                        <i class="pe-7s-bell"></i>
                        <p>Profil</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="collapse navbar-collapse">
                    

                    <ul class="nav navbar-nav navbar-right">
                        
                        <li>
                            <a href="#">
                                Déconnexion
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
		
		<?php
			include("include/bdd.inc.php");
			include("Classes/Classe_Categorie.php");
		?>

	
        <div id="case_accueil" class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-13">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Gestion</h4>
                                <p class="category">Page de gestion</p>
                            </div>
							<div class="content">
							
							<!-- Ajouter catégorie -->
							<form name="insertion" action="valider/cat_valide.php" method="POST" enctype = "multipart/form-data"><br>
								<label for="nom_salle"><strong>Ajouter catégorie </strong></label><br>
								<input type="text" name="lib">
								<script>
								$(function() {
									$( "#datepicker" ).datepicker({
										altField: "#datepicker",
										closeText: 'Fermer',
										prevText: 'Précédent',
										nextText: 'Suivant',
										currentText: 'Aujourd\'hui',
										monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
										monthNamesShort: ['Janv.', 'Févr.', 'Mars', 'Avril', 'Mai', 'Juin', 'Juil.', 'Août', 'Sept.', 'Oct.', 'Nov.', 'Déc.'],
										dayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
										dayNamesShort: ['Dim.', 'Lun.', 'Mar.', 'Mer.', 'Jeu.', 'Ven.', 'Sam.'],
										dayNamesMin: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
										weekHeader: 'Sem.',
										dateFormat: 'yy-mm-dd'
									});
								});
								</script>
								<input name="ajouter" type="submit" value="Ajouter">	
							</form><br>
							
							
							<!-- Modifier catégorie -->
								<form action="valider/cat_valide.php" method="POST" class="formulaire">
								<br>
								<label for="nom_salle"><strong> Modifier Catégories : </strong></label>
							<?php	
									$ocat = new categorie ('','');
									$res = $ocat -> affiche_CATEGORIE($conn);
									while ($resultat=$res->fetch())
									{
										$namelib= 'libcat'.$resultat->idcat;
							?>					
								<p>
									<span><input type="text" name="<?php echo $namelib ?>" value="<?php echo $resultat->idcat ?>" disabled="disabled"></span>	
									<span><input type="text" name="<?php echo $namelib ?>" value="<?php echo $resultat->libcat ?>"></span>
								</p>
									<?php 
									} 
									?>
													
									<span><button name="modifier" type="submit" value="modifier">Modifier</button></span>
								</form><br>
							
							<!-- Supprimer catégorie -->
							<form method="post" action="valider/cat_valide.php">
							<label for="nom_salle"><strong> Supprimer Catégories : </strong></label><br>
								<select name="liste">
								<?php
								$res = $ocat -> affiche_CATEGORIE($conn);
								while($resultat=$res->fetch())
								{
								?>
									<option value="<?php echo $resultat->idcat?>"><?php echo $resultat ->libcat?></option>
								<?php
								}
								?>
								</select>
							<input type="submit" name="supprimer" value="supprimer">
							</form>
							
								
                            
                                                            
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>


	
</body>

	
    <!--   Core JS Files   -->
    <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="js/demo.js"></script>
	
	<script type="text/javascript" src="js/jquery-1.3.2.js"></script>
	<script src="js/jquery.js"></script>




</html>

<?php
include 'include/bdd.inc.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Autocompletion</title>
<link rel="stylesheet" href="css/style.css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/script2.js"></script>
</head>

<body>


        <div class="content">
            <form method="POST" >
                <div class="label_div">Saisir une lettre: </div>
                <div class="input_container">
                    <input type="text" id="client"  name="nomclient" onkeyup="autocomplet()">
					<input type="hidden" id="idclient" name="idcli" onkeyup="autocomplet()" >
                    <ul id="nomclient_list"></ul>
					<input type="submit" name="valider" value="valider">
					<input type="submit" name="ajouter" value="ajouter">
                </div>				
			 </form>
			 
        </div><!-- content -->    
		<div class="content">
			<?php
				
			
				if(isset($_POST['valider']))
				{
					$nomclient=$_POST["nomclient"];
					$idcli=$_POST["idcli"];
					$SQL="SELECT * FROM repas WHERE valide=1 AND idclient=$idcli";
					$res=$conn->query($SQL);
					
					
			?>
					
			<table border=1 cellspacing=0 width="500px" >
				<caption> Liste des Repas de <b><?php echo $nomclient ?></b></caption>
					<tr>
						<th> Date repas </th>
						<th> Prix </th>
						<th> Note </th>
					</tr>
			<?php
					while ($resultat = $res->fetch())
					{
						
			?>
					<tr>
						<td> 
							<?php echo $resultat['daterepas']; ?> 
						</td>
						<td> 
							<?php echo $resultat['prix']; ?> 
						</td>
						<td> 
							<?php 
								for ($i = 0; $i <= 5; $i++)
								{
									echo $i;
							?>
									<input type="radio" name="<?php echo $resultat['idrepas'] ?>" id="radio" value="<?php echo $i ?>">
									
							<?php
								}
							 ?> 
						</td>
					</tr>
			<?php
					}
			?>
			</table>
			<?php
				}
			?>
			
		</div>
		
		<div class="content">

			<?php 
				if(isset($_POST['ajouter']))
				{
					
				}
			?>
		</div>
		
		
		
        <div class="footer">
          
        </div><!-- footer -->

</body>
</html>

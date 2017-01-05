<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Autocompletion</title>
<link rel="stylesheet" href="css/style.css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</head>

<body>
    <div class="container">
        <div class="header">
          
        </div><!-- header -->
        <h1 class="main_title">Autocomplétion</h1>
        <div class="content">
            <form>
                <div class="label_div">Saisir une lettre: </div>
                <div class="input_container">
                    <input type="text" id="produit" onkeyup="autocomplet()">
					<input type="text" id="idproduit" onkeyup="autocomplet()">
                    <ul id="libproduit_list"></ul>
                </div>
            </form>
			<div>
				<?php 
				//if(isset($nomclient!=""))
				//{
					echo "1";
					//$SQL="SELECT * FROM tarif WHERE idproduit=$rs['idproduit']"
				}
				?>
			</div>
        </div><!-- content -->    
        <div class="footer">
          
        </div><!-- footer -->
    </div><!-- container -->
</body>
</html>

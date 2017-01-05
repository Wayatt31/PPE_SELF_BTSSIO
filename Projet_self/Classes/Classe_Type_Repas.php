<?php
    // création de la classe TYPE_REPAS

class   typerepas
{

    Private $idtyperepas;
    Private $libtyperepas;
    
    //constructeur de la classe TYPE_REPAS
    
        Public function typerepas ($idtyprep, $libtyprep)
    
            {
                $this -> id_typerepas = $idtyprep;
                $this -> lib_typerepas = $libtyprep;
            }
    
    // getter de la classe TYPE_REPAS
    
        Public function get_id_typerepas()
            
            {
                Return $this -> id_typerepas;
            }
        
        Public function get_lib_typerepas()
            
            {
                Return $this -> lib_typerepas;
            }
            
    // setter de la classe TYPE_REPAS
    
        Public function set_lib_typerepas($libtyprep)
            
            {
                $this -> lib_typerepas = $libtyprep;
            } 
			
		public function ajouter_typerepas($libtyprep,$conn)
		{
			$SQL = "INSERT INTO `type_repas`(`id_typerepas`, `lib_typerepas`, `valide`) VALUES (NULL,'$libtyprep', 'oui')";
			$resultat = $conn -> query($SQL);
		}
		
		function affiche_typerepas($conn) // Fonction pour afficher la table CATEGORIE
            {
                $SQL = "SELECT * FROM typerepas WHERE valide='oui'"; 
                $req = $conn -> query($SQL); //executer dans la base de donnée
				$req->setFetchMode(PDO::FETCH_OBJ);
                Return $req; // on fait un return car on doit afficher qqc sinon pas de return
            }
}
<?php
    // création de la classe CATEGORIE

class   CATEGORIE
{

    Private $idcat;
    Private $libcat;
    
    //constructeur de la classe CATEGORIE
    
        Public function CATEGORIE ($c, $l)
    
            {
                $this -> idcat = $c;
                $this -> libcat = $l;
            }
    
    // getter de la classe CATEGORIE
    
        Public function get_idcat()
            
            {
                Return $this -> idcat;
            }
        
        Public function get_libcat()
            
            {
                Return $this -> libcat;
            }
		
		public function get_valide()
			
			{	
				Return $this -> valide;
			}
            
    // setter de la classe CATEGORIE
    
        Public function set_libcat($l)
            
            {
                $this -> libcat = $l;
            }
			
		public function ajouter_categorie($l,$conn)
		{
			$SQL = "INSERT INTO `categorie`(`idcat`, `libcat`, `valide`) VALUES (NULL,'$l', 'oui')";
			$resultat = $conn -> query($SQL);
		}


        function affiche_CATEGORIE($conn) // Fonction pour afficher la table CATEGORIE
            {
                $SQL = "SELECT * FROM CATEGORIE WHERE valide='oui'"; //selectionne les données de la table CATEGORIE
                $req = $conn -> query($SQL); //executer dans la base de donnée
				$req->setFetchMode(PDO::FETCH_OBJ);
                Return $req; // on fait un return car on doit afficher qqc sinon pas de return
            }
    
    
        function update_CATEGORIE($idcat, $libcat, $conn) // fonction permettant de modifier la table CATEGORIE
            {
                $SQL="UPDATE CATEGORIE SET libcat = '$libcat' WHERE idcat ='$idcat'"; //va chercher la table CATEGORIE, la modifier
                $req = $conn -> query($SQL);
				$req->setFetchMode(PDO::FETCH_OBJ); 
                $this-> libcat = $libcat;
            }
			
			
		public function supprimer_categorie($idcat,$conn)
		
		{
			$resa = $conn->query("UPDATE categorie SET valide='non' WHERE idcat='$idcat'");
			$resa->setFetchMode ( PDO::FETCH_OBJ );
		}
    
}
?>
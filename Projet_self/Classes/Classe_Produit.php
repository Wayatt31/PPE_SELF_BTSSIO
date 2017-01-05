<?php
    // création de la classe PRODUITS

class   PRODUITS
{

    Private $idproduit;
    Private $libproduit;
    
    //constructeur de la classe PRODUITS
    
        Public function PRODUITS ($idproduit, $libproduit)
    
            {
                $this -> idproduit = $idproduit;
                $this -> libproduit = $libproduit;
            }
    
    // getter de la classe PRODUITS
    
        Public function get_idproduit()
            
            {
                Return $this -> idproduit;
            }
        
        Public function get_libproduit()
            
            {
                Return $this -> libproduit;
            }
            
    // setter de la classe PRODUITS
    
        Public function set_libproduit($linproduit)
            
            {
                $this -> libproduit = $libproduit;
            }
		
		
		public function ajouter_PRODUITS($libproduit,$conn)
			{
			$SQL = "INSERT INTO `produits`(`idproduit`, `libproduit`, `valide`) VALUES (NULL,'$libproduit', 'oui')";
			$resultat = $conn -> query($SQL);
			}
			
		function affiche_PRODUITS($conn) // Fonction pour afficher la table PRODUITS
            {
                $SQL = "SELECT * FROM produits WHERE valide='oui'"; //selectionne les données de la table PRODUITS
                $req = $conn -> query($SQL); //executer dans la base de donnée
				$req->setFetchMode(PDO::FETCH_OBJ);
                Return $req; // on fait un return car on doit afficher qqc sinon pas de return
            }
			
		function update_PRODUITS($idproduit, $libproduit, $conn)
		{
			$SQL="UPDATE produits
                  SET libproduit= '$libproduit'
                  WHERE idproduit = '$idproduit'";
            
			$req = $conn -> query($SQL);
            $req->setFetchMode(PDO::FETCH_OBJ);
			$this-> libproduit = $libproduit;
			
		}	
			
		public function supprimer_PRODUITS($idproduit,$conn)
			{
			$resa = $conn->query("UPDATE produits SET valide='non' WHERE idproduit='$idproduit'");
			$resa->setFetchMode ( PDO::FETCH_OBJ );
			}
}
<?php


class   typetrans
{

    Private $idtypetrans;
    Private $libtypetrans;
    

    
        Public function typetrans ($idtypetrans, $libtypetrans)
    
            {
                $this -> idtypetrans = $idtypetrans;
                $this -> libtypetrans = $libtypetrans;
            }
    

    
        Public function get_idtypetrans()
            
            {
                Return $this -> idtypetrans;
            }
        
        Public function get_libtypetrans()
            
            {
                Return $this -> libtypetrans;
            }
		

    
        Public function set_libtypetrans($libtypetrans)
            
            {
                $this -> libtypetrans = $libtypetrans;
            }
			
		public function ajouter_typetrans($libtypetrans,$conn)
		{
			$SQL = "INSERT INTO `typetrans`(`idtypetrans`, `libtypetrans`, `valide`) VALUES (NULL,'$libtypetrans','oui')";
			$resultat = $conn -> query($SQL);
		}


        function affiche_typetrans($conn)
            {
                $SQL = "SELECT * FROM typetrans WHERE valide='oui'"; 
                $req = $conn -> query($SQL); 
				$req->setFetchMode(PDO::FETCH_OBJ);
                Return $req; 
            }
    
    
        function update_typetrans($idtypetrans, $libtypetrans, $conn) 
            {
                $SQL="UPDATE typetrans SET libtypetrans = '$libtypetrans' WHERE idtypetrans ='$idtypetrans'"; 
                $req = $conn -> query($SQL);
				$req->setFetchMode(PDO::FETCH_OBJ); 
                $this-> libtypetrans = $libtypetrans;
            }
			
			
		public function supprimer_typetrans($idtypetrans,$conn)
		
		{
			$resa = $conn->query("UPDATE typetrans SET valide='non' WHERE idtypetrans='$idtypetrans'");
			$resa->setFetchMode ( PDO::FETCH_OBJ );
		}
    
}
?>
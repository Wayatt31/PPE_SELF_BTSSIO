<?php
class tarif{
	
	private $idproduit;
	private $idcat;
	private $tarifN;
	private $tarifF;
	
	public function tarif($idp,$idc,$tn,$tf){
		$this -> idproduit = $idp;
		$this -> idcat = $idc;
		$this -> tarifN = $tn;
		$this -> tarifF = $tf;
	}
	
	public function get_idproduit(){
		return $this -> idproduit;
	}
	
	public function get_idcat(){
		return $this ->idcat;
	}
	
	public function get_tarifN(){
		return $this -> tarifN;
	}
	
	public function set_tarifN($tn){
		$this -> tarifN = $tn;
	}
	
	public function get_tarifF(){
		return $this -> tarifF;
	}
	
	public function set_tarifF($tf){
		$this -> $tarifF = $tf;
	}
	
	public function ajouter_TARIF($tf,$tn,$conn){
		$this -> tarifF($tf);
		$this -> tarifN($tn);
		$SQL = "INSERT INTO `tarif`(`idproduits`, `idcat`, `tarifN`, `tarifF`, `valide`) VALUES (NULL,NULL,'$tf','$tn',1)";
		$resultat = $conn -> query($SQL);
	}
	
	public function affiche_TARIF($conn){
		$resa = $conn->query ( "SELECT * FROM tarif" );
		$resa->setFetchMode ( PDO::FETCH_OBJ );
		return $resa;
	}
	
	public function maj_TARIF($idp,$idc,$tf,$tn,$conn){
		
		$SQL="UPDATE tarif SET tarifN=$tn,tarifF=$tf WHERE idcat=$idc AND idproduit=$idp";
		$resultat = $conn -> query ($SQL);
	}
	
	public function update_valide($idp,$idcat,$conn){
		$resa = $conn->query("UPDATE tarif SET valide=0 WHERE idproduit=$idp AND idcat=$idc");
		$resa->setFetchMode ( PDO::FETCH_OBJ );
	}
    
    public function select_TARIF($conn,$idp){
        $resa = $conn->query("SELECT * FROM tarif,categorie 
                              WHERE tarif.idcat = categorie.idcat
                              AND tarif.valide='1'
                              AND tarif.idproduits= '$idp'");
		$resa->setFetchMode ( PDO::FETCH_OBJ );
        return $resa;
    }
}
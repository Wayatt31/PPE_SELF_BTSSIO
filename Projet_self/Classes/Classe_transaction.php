<?php
class transaction{
	
	private $idtrans;
	private $idclient;
	private $idtypetrans;
	private $datetrans;
	private $montant_trans;
	
	public function transaction($idt,$idc,$idtypetrans,$d,$mt){
		$this -> idtrans = $idp;
		$this -> idclient = $idc;
		$this -> idtypetrans = $idtypetrans;
		$this -> datetrans = $d;
		$this -> montant_trans = $mt;
	}
	
	//getter
	public function get_idtrans(){
		return $this -> idtrans;
	}
	
	public function get_idclient(){
		return $this ->idclient;
	}
	
	public function get_idtypetrans(){
		return $this -> idtypetrans;
	}
	
	public function get_datetrans(){
		return $this-> datetrans
	}
	
	public function get_montant_trans(){
		return $this -> montant_trans;
	}
	
	//setter
	public function set_datetrans($d){
		$this -> $datetrans = $dt;
	}
	public function set_montant_trans($mt){
		$this -> $montant_trans = $mt;
	}
	
	//fonctions
	
	public function affiche_transaction($conn){
		$resa = $conn->query ( "SELECT * FROM transaction WHERE valide='oui'" );
		$resa->setFetchMode ( PDO::FETCH_OBJ );
		return $resa;
	}
		
	public function supprimer_transaction($idt,$conn){
		$resa = $conn->query("UPDATE transaction SET valide='non' WHERE idtransaction=$idt");
		$resa->setFetchMode ( PDO::FETCH_OBJ );
	}
	
	public function modifier_transaction($idt,$conn)
    
 
}
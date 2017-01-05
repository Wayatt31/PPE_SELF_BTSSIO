<?php
    // création de la classe CLIENT
class   CLIENT
{
    Private $idclient;
    Private $nomclient;
    Private $prenomclient;
    Private $lm;
    Private $ls;
    Private $mam;
    Private $mas;
    Private $mem;
    Private $mes;
    Private $jm;
    Private $js;
    Private $vm;
    Private $vs;
    Private $id_typeclient;
    
    //constructeur de la classe CLIENT
    
        Public function CLIENT ($idcli, $nomcli, $precli, $lm, $ls, $mam, $mas, $mem, $mes, $jm, $js, $vm, $vs, $idtypecli)
    
            {
                $this -> idclient = $idcli;
                $this -> nomclient = $nomcli;
                $this -> prenomclient = $precli;
                $this -> lm = $lm;
                $this -> ls = $ls;
                $this -> mam = $mam;
                $this -> mas = $mas;
                $this -> mem = $mem;
                $this -> mes = $mes;
                $this -> jm = $jm;
                $this -> js = $js;
                $this -> vm = $vm;
                $this -> vs = $vs;
                $this -> id_typeclient = $idtypecli;
            }
    
    // getter de la classe CLIENT
    
        Public function get_idclient() 
            
            {
                Return $this -> idclient;
            }
        
        Public function get_nomclient() 
            
            {
                Return $this -> nomclient;
            }
    
        Public function get_prenomclient() 
            
            {
                Return $this -> prenomclient;
            }
    
         Public function get_lm() 
             
            {
                Return $this -> lm;
            }
        Public function get_ls() 
            
            {
                Return $this -> ls;
            }
        
        Public function get_mam() 
            
            {
                Return $this -> mam;
            }
    
        Public function get_mas() 
            
            {
                Return $this -> mas;
            }
    
         Public function get_mem() 
             
            {
                Return $this -> mem;
            }
    
        Public function get_mes() 
            
            {
                Return $this -> mes;
            }
        
        Public function get_jm() 
            
            {
                Return $this -> jm;
            }
    
        Public function get_js()
            
            {
                Return $this -> js;
            }
    
         Public function get_vm()
             
            {
                Return $this -> vm;
            }
    
        Public function get_vs()
            
            {
                Return $this -> vs;
            }
        
        Public function get_id_typeclient() 
            
            {
                Return $this -> id_typeclient;
            }
            
            
    // setter de la classe CLIENT
    
        Public function set_nomclient($nomcli)
            
            {
                $this -> nomclient = $nomcli;
            }
            
        Public function set_prenomclient($precli)
            
            {
                $his -> prenomclient = $precli;
            }
    
        Public function set_lm($lm)
            
            {
                $this -> lm = $lm;
            }
            
        Public function set_ls($ls)
            
            {
                $his -> ls = $ls;
            }
    
        Public function set_mam($mam)
            
            {
                $this -> mam = $mam;
            }
            
        Public function set_mas($mas)
            
            {
                $his -> mas = $mas;
            }
    
        Public function set_mem($mem)
            
            {
                $this -> mem = $mem;
            }
            
        Public function set_mes($mes)
            
            {
                $his -> mes = $mes;
            }
        Public function set_jm($jm)
            
            {
                $this -> jm = $jm;
            }
            
        Public function set_js($js)
            
            {
                $this -> js = $js;
            }
    
        Public function set_vm($vm)
            
            {
                $this -> vm = $vm;
            }
    
    // Fonction pour envoyer les données en base
    
        function affiche_CLIENT($conn) //fonction pour afficher la table CLIENT
            {
                $SQL = "SELECT * FROM client WHERE valide='oui'";
                $req = $conn -> query($SQL);
                $req->setFetchMode(PDO::FETCH_OBJ);
				return $req;
            }
			
		public function ajouter_CLIENT($nomclient,$prenomclient,$conn)
			{
			$SQL = "INSERT INTO `client`(`idclient`, `nomclient`, `prenomclient`, `valide`) VALUES (NULL,'$nomclient','$prenomclient', 'oui')";
			$resultat = $conn -> query($SQL);
			}
			
        function update_CLIENT($idclient, $nomclient, $prenomclient, $conn)
            {
                $SQL ="UPDATE client
                       SET nomclient = '$nomclient', prenomclient = '$prenomclient'
                       WHERE idclient ='$idclient'";
            
            
                $conn -> query($SQL);
                $this -> nomclient = $nomclient;
                $this -> prenomclient = $prenomclient;
            }
		
		public function supprimer_PRODUITS($idproduit,$conn)
			{
			$resa = $conn->query("UPDATE produits SET valide='non' WHERE idproduit='$idproduit'");
			$resa->setFetchMode ( PDO::FETCH_OBJ );
			}
}
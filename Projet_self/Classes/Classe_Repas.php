<?php
    // création de la classe REPAS

class   REPAS
{

    Private $idrepas;
    Private $daterepas;
    Private $heurepas;
    Private $prix;
    Private $id_typerepas;
    Private $idclient;
    
    //constructeur de la classe REPAS
    
        Public REPAS ($idrep, $daterep, $hpas, $prix, $idtyperepas, $idcli)
    
            {
                $this -> idrepas = $idrep;
                $this -> daterepas = $daterep;
                $this -> heurepas = $hpas;
                $this -> prix = $prix;
                $this -> id_typerepas = $idtyperepas;
                $this -> idclient = $idcli;
            }
    
    // getter de la classe REPAS
    
        Public function get_idrepas(): int
            
            {
                Return $this -> idrepas;
            }
        
        Public function get_daterepas(): date
            
            {
                Return $this -> daterepas;
            }
            
        Public function get_heurepas(): time
            
            {
                Return $this -> heurepas;
            }
        
        Public function get_prix(): float
            
            {
                Return $this -> prix;
            }
            
        Public function get_id_typerepas(): int
            
            {
                Return $this -> id_typerepas;
            }
        
        Public function get_idclient(): int
            
            {
                Return $this -> idclient;
            }
            
    // setter de la classe PRODUITS
    
        Public void set_daterepas($daterep)
            
            {
                $this -> daterepas = $daterep;
            }

        Public void set_heurepas($hpas)
            
            {
                $this -> heurepas = $hpas;
            }
    
        Public void set_prix($prix)
            
            {
                $this -> prix = $prix;
            }
}
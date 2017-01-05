<?php
    // création de la classe TYPE_CLIENT

class   TYPE_CLIENT
{

    Private $id_typeclient;
    Private $lib_typeclient;
    Private $idcat;
    
    //constructeur de la classe TYPE_CLIENT
    
        Public TYPE_CLIENT ($idtypcli, $libtypcli, $c)
    
            {
                $this -> id_typeclient = $idtypcli;
                $this -> lib_typeclient = $libtypcli;
                $this -> idcat = $c;
            }
    
    // getter de la classe TYPE_CLIENT
    
        Public function get_id_typeclient(): int
            
            {
                Return $this -> id_typeclient;
            }
        
        Public function get_lib_typeclient(): varchar
            
            {
                Return $this -> lib_typeclient;
            }
    
        Public function get_idcat(): int
            
            {
                Return $this -> idcat;
            }
            
    // setter de la classe TYPE_CLIENT
    
        Public void set_lib_typeclient($libtypcli)
            
            {
                $this -> lib_typeclient = $libtypcli;
            } 
}
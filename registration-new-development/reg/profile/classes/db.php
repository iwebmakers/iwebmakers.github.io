<?php

class db {

    
    protected $con;
    public function __construct(){
      

        
        try {
           
           $this->con = new PDO("mysql:host=" . HOST . ";dbname=" . DB, USER, PASSWORD ); 

        } catch(PDOException $e){
           echo "Connection Error: " . $e->getMessage();

        }

    }

}


?>
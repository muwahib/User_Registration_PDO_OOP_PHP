<?php
//database connection
require_once('config/db_connection.php');


class crud_contoller extends db_class{
    private $dbh;
    private $stmt;

    //private varible data
    public function create(){
        $conn = $this->connect();  
    }    
}

?>
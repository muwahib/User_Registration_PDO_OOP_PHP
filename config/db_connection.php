<?php

class db_class{
    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $charset;

    public function connect(){
        $this->servername = "localhost";
        $this->username = "Muwahib";
        $this->password = "Muwahib@521409";
        $this->dbname = "login";
        $this->charset = "utf8mb4";

        try{
        //*data/database source name:s a string that has an associated data 
        //structure used to describe a connection to a data source.
        //The term often overlaps with "connection string". 
        //Most systems do not make a distinction between DSNs or connection strings and 
        //the term can often be used interchangeably.
        $dsn = "mysql:host=".$this->servername.";dbname=".$this->dbname.";charset=".$this->charset;
        $pdo = new PDO($dsn, $this->username, $this->password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
        } catch(PDOException $e){
        echo "Connection failed: ".$e->getMessage();
        }
    }

}

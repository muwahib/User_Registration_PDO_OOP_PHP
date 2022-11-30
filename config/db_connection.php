<?php

class db_class{
    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $charset;

    public function __construct()
    {
        $this->servername = "localhost";
        $this->username = "Muwahib";
        $this->password = "Muwahib@521409";
        $this->dbname = "login";
        $this->charset = "utf8mb4";
    }

    public function connect(){

        try{
        //*data/database source name:is a string that has an associated data 
        //structure used to describe a connection to a data source.
        //The term often overlaps with "connection string". 
        //Most systems do not make a distinction between DSNs or connection strings and 
        //the term can often be used interchangeably.

        $sqlconn = "mysql:host=".$this->servername.";dbname=".$this->dbname.";charset=".$this->charset;
        $conn = new PDO($sqlconn, $this->username, $this->password);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $conn;
        } catch(PDOException $e){
        echo "Connection failed: ".$e->getMessage();
        }
        
    }
    public function query($sql_query){
        $conn = $this->connect();
        $sql_query="SELECT * FROM `user_login`";
        $prepare_stmt= $conn->prepare($sql_query);
        $executed_stmt=$prepare_stmt->execute();
        $results=$prepare_stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
        
    }

    // public function prepare_query($sql_query){
    //     $sql_query = $this->query($sql_query);
    //     $sql_query->execute();
    // }

    // public function query(){
    //     $conn = $this->connect();
    //     $sql = "SELECT * FROM `user_login`";
    //     $sth = $conn->prepare($sql);
    //     $sth->execute();
    //     $result = $sth->fetchAll(PDO::FETCH_OBJ);
    //     return $result;
    // }


}

//create
//read 
//update 
//delete
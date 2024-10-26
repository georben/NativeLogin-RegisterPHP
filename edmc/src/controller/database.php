<?php
class database
{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $dbname = "datakoni";

    public function initDatabase(){
        try {
            $con = new PDO("mysql:host=$this->host;dbname=".$this->dbname, 
            $this->user, 
            $this->pass);
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $con;
        } catch (PDOException $th) {
            echo $th;
            return null;
        }
    }
}
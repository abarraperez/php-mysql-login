<?php
class Database
{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $dbname = "test";


    function __construct()
    { 
        $this->conn = null;
        try
        {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->user, $this->pass);
            $this->conn->exec("set names utf8");
        }
        catch(PDOException $exception)
        {
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }

    function getConnection()
    {
        return $this->conn;
    }
    function __destruct()
    {
        $this->conn = null;
    }
}

?>
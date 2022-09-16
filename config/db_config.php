<?php

class db_config
{
    private $servername = "localhost";
    private $dbname = "cware_db";
    private $username = "root";
    private $password = "";
    protected $isConnected = false;
    private $conn = null;

    function __construct()
    {
        $this->connect();
    }

    function connect()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname;charset=utf8", $this->username, $this->password, array(
                PDO::MYSQL_ATTR_LOCAL_INFILE => true,
            ));
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->isConnected = true;
        } catch (PDOException $e) {
            $this->isConnected = false;
            echo "Connection failed: " . $e->getMessage();
            exit;
        }
    }

    function execute($sql)
    {
        try {
            return $this->conn->query($sql);
        } catch (Exception $e) {
            echo $e->GetMessage();
            exit;
        }
    }
}

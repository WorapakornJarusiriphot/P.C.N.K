<?php
class ConDB {
    private $host, $user , $pass, $db;
    public $conn;

    public function ConDB(){
        $this->host = 'localhost';
        $this->user = 'root';
        $this->pass = '';
        $this->db = 'tourist4community';
    }

    public function connect() {
        try {
            $this->conn = new PDO("mysql:host=localhost;dbname=tourist4community","root", "");
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}

    $conn = new ConDB();
    $conn->connect();
?>
<?php
class Database {
    private $host = '127.0.0.1:3307';
    private $db_name = 'youcode';
    private $username = 'root';
    private $password = '';
    private $conn;

    public function getConnect() {
        try {
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->db_name}",$this->username, $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo 'conencted';
            
        } catch (PDOException $exception) {
            echo 'error de conection: ' . $exception->getMessage();
        }

        return $this->conn;
    }
}



?>
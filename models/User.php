<?php
require_once 'config/Database.php';

class User {
    private $connection;

    public function __construct() {
        $database = new Database();
        $this->connection = $database->getConnect();
    }

    public function getUsers() {
        $query = 'SELECT * FROM utilisateurs
         WHERE id_role = 3';
        $stmt = $this->connection->query($query);
         return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    
}
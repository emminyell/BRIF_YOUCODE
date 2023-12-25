<?php
require_once 'config/Database.php';

class User {
    private $connection;

    public function __construct() {
        $database = new Database();
        $this->connection = $database->getConnect();
    }

    class User {

        private $db;
    
        public function __construct(){
            $this->db = new Database;
        }
    
        //Find user by email or username
        public function findUserByEmailOrUsername($email, $username){
            $this->db->query('SELECT * FROM `utilisateurs` WHERE nom = :username OR email = :email');
            $this->db->bind(':username', $username);
            $this->db->bind(':email', $email);
    
            $row = $this->db->single();
    
            //Check row
            if($this->db->rowCount() > 0){
                return $row;
            }else{
                return false;
            }
        }
    
        //Register User
        public function register($data){
            $this->db->query('INSERT INTO `utilisateurs`(`id_user`, `nom`, `email`, `mot_de_passe`) 
                VALUES (:id, :name, :email, :password)');
            // Bind values
            $this->db->bind(':id', $data['usersUid']);
            $this->db->bind(':name', $data['usersName']);
            $this->db->bind(':email', $data['usersEmail']);
            $this->db->bind(':password', $data['usersPwd']);
        
            // Execute
            if($this->db->execute()){
                // Redirect after successful registration
                header('location: signup.php');
                exit(); // Terminate script execution after the redirect
            } else {
                echo "Error";
            }
        }
        
    
        //Login user
        public function login($nameOrEmail, $password){
            $row = $this->findUserByEmailOrUsername($nameOrEmail, $nameOrEmail);
    
            if($row == false) return false;
    
            $hashedPassword = $row->usersPwd;
            if(password_verify($password, $hashedPassword)){
                return $row;
            }else{
                return false;
            }
        }
    
    
    }

    public function getUsers() {
        $query = 'SELECT * FROM utilisateurs
         WHERE id_role = 3';
        $stmt = $this->connection->query($query);
         return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    
}
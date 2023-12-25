<?php
include_once 'header.php'
include 'controllers/UserController.php';

$UserController = new UserController();

if (isset($_GET['action'])) {
    $submit= $_GET['action'];
    switch ($submit) {
        case 'listFormateurs':
            $UserController->listFormateurs();
            break;


        case 'ajouterFormateur': 
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                $nom = $_POST['nom'];
              
                $prenom = $_POST['prenom'];
                $email =$_POST['email'];
                $password = $_POST['password'];
                $id_class= $_POST['id_class'];

                $UserController->ajouterFormateur($nom, $prenom,$email, $password,$id_class);
            }
            break;
        case 'updateFormateur':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $id_utilisateur =$_POST['id_utilisateur'];
                $nom =$_POST['nom'];
                $prenom =$_POST['prenom'];
                $email= $_POST['email'];
                $password = $_POST['password'];
                $id_class = $_POST['id_class'];

                $UserController->updateFormateur($id_utilisateur, $nom, $prenom, $email, $password,$id_class);
            }
            break;
        default:
            $UserController->listUsers();
            break;
    }
} else {
    $UserController->listUsers();
}
<?php

require_once 'models/User.php';

class UserController {
  

    public function listUsers() {
        $user =new User();
        $users = $user->getUsers();
    }

  
    

}

<?php
class UserController extends UserModel {
    
    public function getUsers() 
    {
        return $this->findAll();
    }

    public function getUserById($id) 
    {
        if (!isset($_GET['id'])) {
            return "ID parameter is missing.";
        }
        $onlyId = $_GET['id'];
        return $this->findById($onlyId);
    }
}




?>
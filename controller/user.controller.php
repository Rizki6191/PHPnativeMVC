<?php
class UserController extends UserModel {

    public function getUsers() {
        return $this->findAll();
    }

    public function getUserById($id) {
        return is_numeric($id) ? $this->findById($id) : null;
    }
}

?>
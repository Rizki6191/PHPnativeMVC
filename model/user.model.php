<?php
class UserModel extends Connection {

    public function findAll() {
        $result = $this->connect()->query("SELECT * FROM users");
        $users = [];

        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }

        return $users;
    }

    public function findById($id) {
        $result = $this->connect()->query("SELECT * FROM users WHERE id = $id");
        return $result->fetch_assoc();
    }
}
?>
<?php
class UserModel extends Connection {
    
    protected $username;
    protected $email;
    protected $password;

    public function findAll() 
    {
        $result = $this->connect()->query("SELECT * FROM users");
        $users = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $users[] = $row;
            }
        }

        return $users;
    }

    public function findById($id) 
    {
        $result = $this->connect()->query("SELECT * FROM users WHERE id = $id");
        $users = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $users[] = $row;
            }
        }

        return $users;
    }
}
?>
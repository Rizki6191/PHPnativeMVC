<?php
class UserView extends UserController {
    
    public function show()
    {
        $users = $this->getUsers();

        if (empty($users)) {
            echo "No users found.";
            return;
        }

        foreach ($users as $user) {
            echo "ID: " . $user['id'] . "<br>";
            echo "Username: " . $user['username'] . "<br>";
            echo "Email: " . $user['email'] . "<br>";
            echo "Password: " . $user['password'] . "<br>";
            echo "-----------------------<br>";
        }
    }

    public function find()
    {
        if (!isset($_GET['id'])) {
            echo "ID parameter is missing.";
            return;
        }

        $id = $_GET['id'];
        $user = $this->getUserById($id);

        if (empty($user)) {
            echo "User not found.";
            return;
        }

        foreach ($user as $detail) {
            echo "ID: " . $detail['id'] . "<br>";
            echo "Username: " . $detail['username'] . "<br>";
            echo "Email: " . $detail['email'] . "<br>";
            echo "-----------------------<br>";
        }
    }
}





?>
<?php
class UserView extends UserController {

    public function show() {
        $users = $this->getUsers();
        include 'view/user/userTable.view.php';
    }

    public function find($id) {
        $user = $this->getUserById($id);
        include 'view/user/userDetail.view.php';
    }
}

?>
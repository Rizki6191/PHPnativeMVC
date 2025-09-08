<?php
<<<<<<< HEAD
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
=======
class UserView
{
    public function showTable($users)
    {
        include 'view/user/user.view.table.php';
    }

    public function showDetail($user)
    {
        include 'view/user/user.view.detail.php';
    }
}
>>>>>>> f263d78 (f)

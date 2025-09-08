<?php
<<<<<<< HEAD
class UserController extends UserModel {

    public function getUsers() {
        return $this->findAll();
    }

    public function getUserById($id) {
        return is_numeric($id) ? $this->findById($id) : null;
    }
}

?>
=======
class UserController extends UserModel
{
    public function show($id = null)
    {
        $view = new UserView();
        if (isset($_GET['id']) && $_GET['id'] != "")
        {
            $id = $_GET['id'];
            $user = $this->getUserById($id);
            $view->showDetail($user);
        }
        else
        {
            $users = $this->getUsers();
            $view->showTable($users);
        }
    }
}
>>>>>>> f263d78 (f)

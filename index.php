<?php
<<<<<<< HEAD
require_once 'connection.php';
require_once 'model/user.model.php';
require_once 'controller/user.controller.php';
require_once 'view/user/user.view.php';

$userView = new UserView();

$id = $_GET['id'] ?? null;

$id ? $userView->find($id) : $userView->show();
=======
include 'connect.php';
include 'model/user.model.php';
include 'view/user/user.view.php';
include 'controller/user.controller.php';

$show = new UserController();
$show->show();

>>>>>>> f263d78 (f)

?>
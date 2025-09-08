<?php
include 'connect.php';
include 'model/user.model.php';
include 'view/user/user.view.php';
include 'controller/user.controller.php';

$show = new UserController();
$show->show();

?>
<?php
require_once 'connection.php';
require_once 'model/user.model.php';
require_once 'controller/user.controller.php';
require_once 'view/user/user.view.php';

$userView = new UserView();

$id = $_GET['id'] ?? null;

$id ? $userView->find($id) : $userView->show();

?>
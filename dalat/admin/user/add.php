<?php
session_start();

if(!isset($_SESSION['user'])){
    header('location:login.php');
}

require '../../configs/config.php';
require '../../libraries/connect.php';
require '../../models/user.php';

if($_POST){
    $data = array(
        'username' => $_POST['username'],
        'password' => $_POST['password'],
        'fullname' => $_POST['fullname'],
        'email' => $_POST['email'],
        'status' => isset($_POST['status']) ? 1 : 0,
        'created' => date('Y-m-d H:i:s'),
        'modified' => date('Y-m-d H:i:s')
    );

    if(add_user($db, $data)){
        $_SESSION['success'] = true;

        header('location:add.php');
    }
}

require '../../views/admin/user/add.tpl.php';
?>
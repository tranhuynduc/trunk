<?php
session_start();

if(!isset($_SESSION['user'])){
    header('location:login.php');
}

require '../../configs/config.php';
require '../../libraries/connect.php';
require '../../models/user.php';

$user_id = $_GET['user_id'];

if($_POST){
    $data = array(
        'username' => $_POST['username'],
        'password' => empty($_POST['password']) ? null : md5($_POST['password']),
        'fullname' => $_POST['fullname'],
        'email' => $_POST['email'],
        'status' => isset($_POST['status']) ? 1 : 0,
        'modified' => date('Y-m-d H:i:s')
    );

    if(edit_user($db, $data, $user_id)) {
        $_SESSION['success'] = true;

        header('location:edit.php?user_id=' . $user_id);
    }
}
$user = get_user_by_id($user_id);

require '../../views/admin/user/edit.tpl.php';
?>
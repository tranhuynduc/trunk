<?php

session_start();


require ('../../configs/config.php');
include ('../../libraries/connect.php');
require ('../../models/user.php');

if(isset($_POST['username'])  && !empty($_POST['username']) &&  isset($_POST['password']) && !empty($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo $username . $password;
    $user = get_user_by_username($db, $username);
    echo $user;
    if($user){
        $_SESSION['user'] = $user;
        header('location:../home/home.php');
    }
    else {

        $error = true;
    }
}


require '../../views/admin/user/login.tpl.php';
?>
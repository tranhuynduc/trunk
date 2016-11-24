<?php
session_start();

if(!isset($_SESSION['user'])){
    header('location:login.php');
}

require '../../configs/config.php';
require '../../libraries/connect.php';
require '../../models/user.php';

$user_id = $_GET['user_id'];

delete_user($db, $user_id);

header('location:list.php');
?> 
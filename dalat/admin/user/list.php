<?php
session_start();
if(!isset($_SESSION['user'])){
	header('location:login.php');
}

require '../../configs/config.php';
require '../../libraries/connect.php';
require '../../models/user.php';

$user_list = get_user_list($db);

require '../../views/admin/user/list.tpl.php';
?>

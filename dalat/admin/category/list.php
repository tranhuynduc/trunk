<?php

session_start();
if(!isset($_SESSION['user'])){
    header('location:../user/login.php');
}

require '../../configs/config.php';
require '../../libraries/connect.php';
require '../../models/category.php';

$category_list = get_category_list($db);

require '../../views/admin/category/list.tpl.php';
?>
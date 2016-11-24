<?php
session_start();

if(!isset($_SESSION['user'])){
    header('location:../user/login.php');
}

require '../../configs/config.php';
require '../../libraries/connect.php';
require '../../models/category.php';

$category_id = $_GET['category_id'];

if($_POST){
    $data = array(
        'name' => $_POST['name'],
        'status' => isset($_POST['status']) ? 1 : 0,
        'modified' => date('Y-m-d H:i:s')
    );

    if(edit_category($db, $data, $category_id)){
        $_SESSION['success'] = true;

        header('location:edit.php?category_id=' . $category_id);
    }
}

$category = get_category_by_id($db, $category_id);

//Require file giao diện (View)
require '../../views/admin/category/edit.tpl.php';
?> 
<?php
session_start();

if(!isset($_SESSION['user'])){
    header('location:../user/login.php');
}

require '../../configs/config.php';
require '../../libraries/connect.php';
require '../../models/category.php';
require '../../models/product.php';

if($_POST){
    if(($image = $_FILES['image']['name']) != null){
        move_uploaded_file($_FILES['image']['tmp_name'], 'userfiles/' . $image);
    }else{
        $image = '';
    }

    $data = array(
        'category_id' => $_POST['category_id'],
        'name' => $_POST['name'],
        'detail' => $_POST['detail'],
        'image' => $image,
        'price' => $_POST['price'],
        'status' => isset($_POST['status']) ? 1 : 0,
        'created' => date('Y-m-d H:i:s'),
        'modified' => date('Y-m-d H:i:s')
    );

    if(add_product($db, $data)){
        $_SESSION['success'] = true;

        header('location:add.php');
    }
}

$category_active_list = get_category_active_list($db);

require '../../views/admin/product/add.tpl.php';
?> 
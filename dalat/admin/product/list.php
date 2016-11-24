<?php
session_start();

if(!isset($_SESSION['user'])){
    header('location:../user/login.php');
}

require '../../configs/config.php';
require '../../libraries/connect.php';
require '../../models/product.php';

$product_list = get_product_list($db);

require '../../views/admin/product/list.tpl.php';
?> 
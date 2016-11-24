<?php

session_start();

if(!isset($_SESSION['user'])){
    header('location:../user/login.php');
}


require '../../configs/config.php';
require '../../libraries/connect.php';
require '../../models/product.php';


$product_id = $_GET['product_id'];


delete_product($db, $product_id);


header('location:list.php');
?> 
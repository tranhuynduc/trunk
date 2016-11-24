<?php
//Require các file cần thiết
require 'configs/config.php';
require 'libraries/connect.php';
require 'models/category.php';
require 'models/product.php';

//Lấy product_id từ URL
$product_id = isset($_GET['product_id']) ? ((int)$_GET['product_id']) : 0;

//Lấy thông tin sản phẩm
$product_active = get_product_active_by_id($db, $product_id);

//Require file giao diện (View)
$category_active_list = get_category_active_list($db);
require 'views/front/product/detail.tpl.php';
?>
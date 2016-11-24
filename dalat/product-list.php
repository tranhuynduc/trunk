<?php
//Require các file cần thiết
require 'configs/config.php';
require 'libraries/connect.php';
require 'models/category.php';
require 'models/product.php';

//Lấy category_id từ URL (Nếu có)
$category_id = isset($_GET['category_id']) ? ((int)$_GET['category_id']) : null;

//Lấy danh sách sản phẩm
$product_active_list = get_product_active_list($db, $category_id);

//Require file giao diện (View)
$category_active_list = get_category_active_list($db);
require 'views/front/product/list.tpl.php';
?>
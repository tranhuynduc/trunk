<?php

require 'configs/config.php';
require 'libraries/connect.php';
require 'models/category.php';
require 'models/product.php';

$product_latest_list = get_product_latest_list($db,4);

$category_active_list = get_category_active_list($db);
require 'views/front/home/index.php';

//require 'views/front/home/home.tpl.php';
?>



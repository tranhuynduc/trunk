<?php
session_start();

if(!isset($_SESSION['user'])){
    header('location:../user/login.php');
}

require '../../configs/config.php';
require '../../libraries/connect.php';
require '../../models/category.php';
require '../../models/product.php';

//Get product_id from URL
$product_id = $_GET['product_id'];
echo "here";

$msg = "";

if($_POST){
//Upload

    $target = "../../userfiles/".basename($_FILES['image']['name']);

    if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
        $_SESSION['success'] = true;
    }
    $msg = $target;
    $image = $_FILES['image']['name'];




//Nhận dữ liệu từ form và gán vào một mãng
    $data = array(
        'category_id' => $_POST['category_id'],
        'name' => $_POST['name'],
        'detail' => $_POST['detail'],
        'image' => $image,
        'price' => $_POST['price'],
        'status' => isset($_POST['status']) ? 1 : 0,
        'modified' => date('Y-m-d H:i:s')
    );

//Cập nhật
    if(edit_product($db, $data, $product_id)){
        echo "go edit";
//Tạo session để lưu cờ thông báo thành công
        $_SESSION['success'] = true;

//Tải lại trang (Mục đích là để tải lại thông tin mới)
        header('location:edit.php?product_id=' . $product_id);
    }
}
echo $msg;

//Lấy thông tin sản phẩm để trình bày trên form
$product = get_product_by_id($db, $product_id);

//Lấy danh sách danh mục sản phẩm có trạng thái kích hoạt (Status = 1)
$category_active_list = get_category_active_list($db);

//Require file giao diện (View)
require '../../views/admin/product/edit.tpl.php';
?>
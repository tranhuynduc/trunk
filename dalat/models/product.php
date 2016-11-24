<?php
function get_product_list($db){
    $sql = "SELECT * FROM tbl_product ORDER BY product_id DESC";

    return mysqli_query($db, $sql);
}

function add_product($db, $data){
    $sql  = "INSERT INTO tbl_product(category_id, name, detail, image, price,  status, created, modified) VALUES({$data['category_id']},  '{$data['name']}', '{$data['detail']}', '{$data['image']}',  {$data['price']}, {$data['status']}, '{$data['created']}',  '{$data['modified']}')";

    return mysqli_query($db, $sql);
}

function get_product_by_id($db, $product_id){
    $sql = "SELECT * FROM tbl_product WHERE product_id = $product_id";

    $query = mysqli_query($db, $sql);

    return mysqli_fetch_assoc($query);
}

function edit_product($db, $data, $product_id){
    $sql  = "UPDATE tbl_product SET category_id = {$data['category_id']}, name =  '{$data['name']}', detail = '{$data['detail']}', price =  {$data['price']}, status = {$data['status']}, modified =  '{$data['modified']}'";


    if($data['image'] != null){
        $sql .= ", image = '{$data['image']}'";
}
    $sql .= " WHERE product_id = $product_id";

    return mysqli_query($db, $sql);
}

function delete_product($db, $product_id){
    $sql = "DELETE FROM tbl_product WHERE product_id = $product_id";

    return mysqli_query($db, $sql);
}

function get_product_latest_list($db, $limit = 6){
//SQL
    $sql = "SELECT * FROM tbl_product ORDER BY product_id DESC LIMIT 0, $limit";

    return mysqli_query($db, $sql);
}

function get_product_active_list($db, $category_id){
//SQL
    $sql = "SELECT * FROM tbl_product WHERE status = 1";

    if($category_id != null){
        $sql .= " AND category_id = $category_id";
    }

    $sql .= " ORDER BY product_id DESC";


    return mysqli_query($db, $sql);
}

function get_product_active_by_id($db, $product_id){
//SQL
    $sql = "SELECT * FROM tbl_product WHERE status = 1 AND product_id = $product_id";

//Query
    $query = mysqli_query($db,$sql);

//Fetch và return
    return mysqli_fetch_assoc($query);
}
?>
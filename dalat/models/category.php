<?php
function get_category_list($db){

    $sql = "SELECT * FROM tbl_category ORDER BY category_id DESC";

    return mysqli_query($db,$sql);
}

function add_category($db, $data){

    $sql  = "INSERT INTO tbl_category(name, status, created, modified)  VALUES('{$data['name']}', {$data['status']}, '{$data['created']}',  '{$data['modified']}')";

    return mysqli_query($db, $sql);
}

function get_category_by_id($db, $category_id){
    $sql = "SELECT * FROM tbl_category WHERE category_id = $category_id";

    $query = mysqli_query($db, $sql);

    return mysqli_fetch_assoc($query);
}

function edit_category($db, $data, $category_id){
    $sql  = "UPDATE tbl_category SET name = '{$data['name']}', status =  {$data['status']}, modified = '{$data['modified']}' WHERE category_id =  $category_id";

    return mysqli_query($db, $sql);
}

function delete_category($db, $category_id){

    $sql = "DELETE FROM tbl_category WHERE category_id = $category_id";

    return mysqlu_query($db, $sql);
}

function get_category_active_list($db){
    $sql = "SELECT * FROM tbl_category WHERE status = 1 ORDER BY category_id ASC";

    return mysqli_query($db, $sql);
}
?>
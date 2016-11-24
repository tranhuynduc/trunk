<?php

function get_user_by_username($db,$username){

	$sql = "SELECT * FROM tbl_user WHERE username = '$username' AND status = 1";

	//Query
	$query = mysqli_query($db,$sql);
	//Fetch v� return
	return mysqli_fetch_assoc($query);
}

function get_user_list($db){

	$sql = "SELECT * FROM tbl_user ORDER BY user_id DESC ";

	return mysqli_query($db,$sql);

}

function add_user($db, $data){
//SQL
	$sql  = "INSERT INTO tbl_user(username, password, fullname, email, status,  created, modified) 
VALUES('{$data['username']}', '{$data['password']}',  '{$data['fullname']}', '{$data['email']}', {$data['status']},  '{$data['created']}', '{$data['modified']}')";

//Query và return
	return mysqli_query($db, $sql);
}

function get_user_by_id($user_id){
//SQL
	$sql = "SELECT * FROM tbl_user WHERE user_id = $user_id";

//Query
	$query = mysql_query($sql);

//Fetch và return
	return mysql_fetch_assoc($query);
}

function edit_user($db, $data, $user_id)
{
	$sql = "UPDATE tbl_user SET username = '{$data['username']}', fullname =  '{$data['fullname']}', email = '{$data['email']}', status =  {$data['status']}, modified = '{$data['modified']}'";

//If change password
	if ($data['password'] != null) {
		$sql .= "fullname =  '{$data['password']}'";

	}
//Condition
	$sql .= " WHERE user_id = $user_id";

	return mysql_queryi($db, $sql);
}

function delete_user($db, $user_id){
	$sql = "DELETE FROM tbl_user WHERE user_id = $user_id";

	return mysqli_query($db, $sql);
}
?>
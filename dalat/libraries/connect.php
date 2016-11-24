<?php
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABSE);

if(mysqli_connect_error()){
	echo 'Failed to connect to MySQL with reason: '.mysqli_connect_error();
}
?>
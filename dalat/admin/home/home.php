<?php
if(isset($_SESSION['user'])){
    header('Location:../user/login.php');
}

header('Location:../user/list.php');
?>
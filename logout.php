<?php
ob_start();
session_start();

if($_SESSION['admin_id'] AND $_SESSION['admin_nama']){
	unset($_SESSION['admin_id']);
	unset($_SESSION['admin_nama']);
	session_destroy();
	header('location:login.php');
}


ob_end_flush();
mysqli_close($conn);
?>
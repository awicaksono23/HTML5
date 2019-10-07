<?php

ob_start();
session_start();
include "config.php";
if(isset($_SESSION['admin_nama'])){
	header('location:index.php');
}

if(isset($_POST['submit'])){
	$nama = $_POST['nama'];
	$password = $_POST['password'];
	$sql = mysqli_query($conn,"SELECT * FROM login WHERE nama='$nama' AND password='$password'");

	if(mysqli_num_rows($sql) > 0){
		$row = mysqli_fetch_array($sql);
		$_SESSION['admin_id'] = $row['id'];
		$_SESSION['admin_nama'] = $row['nama'];
		header('location:index.php');
	}
}

?>

<!DOCTYPE html>
<!-- http://html5doctor.com/ -->
<html> 
<head>
	<title>	HTML5</title>
	<style>
		body{
			font-family: Verdana,sans-serif;
			font-size: 12px; 
			margin: auto;
		}
		header, nav, main, aside, footer {
			border:1px solid grey;
			margin:5px;
			padding: 4px;
		}
 
		main{
			float: left;
			width: 60%;
		}

		aside{
			float:left;
			width: 30%;
		}

		footer{
			clear: both;
		}
	</style>
</head>
<body>
		<form method="post">
			<input type="name" name="nama" placeholder="cari...">
			<input type="password" name="password" placeholder="email">	 
			<input type="submit" name="submit">
		</form>
</body>
</html>

<?php
ob_end_flush();
mysqli_close($conn);
?>
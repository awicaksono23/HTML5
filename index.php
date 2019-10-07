<?php


ob_start();
session_start();

if(!isset($_SESSION['admin_id'])){
	header('location:login.php');
}

?>
<!DOCTYPE html>
<!-- http://html5doctor.com/ -->
<!-- caniuse.com apakah support browser -->
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
		<header>	
				<h1>Belajar Programming</h1>
				<h2>Bersama</h2>
		</header>

		<nav>
			<ul>
				<li><a href="logout.php">LOGOUT</a></li>
				<li><a href="#">Profil</a></li>
				<li><a href="#">Kontak</a></li>
			</ul>
		</nav>	

		<main>	
			<article>

				<video width="300" height="300" controls autoplay muted>	
					<source src="vdeo.mp4" type="video/mp4">
				</video>

				<audio controls loop muted>	
					<source src="" type="">
						data
				</audio>

				<form method="post">
					<input type="search" name="search" placeholder="cari...">
					<input type="email" name="email" placeholder="email">	
					<input id="stardate" name="stardate" min="2012-01-01" max="2013-01-01" type="date">
					<input type="submit" name="submit">
				</form>
				
				<figure>	
					<img src="meja.jpg" width="200px" height="200px">
					<figcaption>	
						Meja makan murah
						<a href="#">HTML</a>
					</figcaption>
				</figure>

				<dialog open>
					Ini website tutorial
				</dialog>

				<details>	
					<summary>
						info sekolah web
					</summary>
					<p>Info PHP</p>
					<p>Info HTML</p>
				</details>

				<h1>Daftar Perjalanan</h1>
				<section>	
					<h2>HTML</h2>
					<p>Membuat struktur Web</p>
				</section>
				<section>	
					<h2>CSS</h2>
					<p>Membuat struktur CSS</p>
				</section>
			</article>
	    </main>	

		<aside>	
			<h2>Artikel</h2>
			<a href="#">Intro</a><br>
			<a href="#">Belajar</a><br>
			<a href="#">Berguru</a>
		</aside>	

		<footer>	
			<p>&copy; 2017 Agung</p>
		</footer>	
</body>
</html>

<?php
ob_end_flush();
mysqli_close($conn);
?>
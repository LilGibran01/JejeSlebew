<?php
session_start();
if (!isset($_SESSION['role'])) {
	include 'template/header.php'; // menampilkan header
?>

	<!-- Navigasi Bar -->
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link active text-white" href="#">Beranda</span></a>
		</li>
		<li class="nav-item">
			<a class="nav-link text-white" href="kursus/">Materi Kursus</a>
		</li>
	</ul>
	<ul class="navbar-nav ml-auto">
		<li class="nav-item">
			<a href="login.php"><button type="button" class="btn btn-light">Login</button></a>
		</li>
	</ul>
	</div>
	</nav>
	
	<div class="container bg-light">
		<?php include 'template/dashboard.php'; // menampilkan dashboard
		} else {
			header("Location: home.php"); // jika sudah login maka membuka home.php
		} ?>
	</div>

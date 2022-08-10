<?php
include '../template/header.php'; // import header
include '../db_conn.php'; // memanggil database
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
?>

<!-- Navigasi Bar -->
<div class="navbar-collapse collapse justify-content-stretch" id="collapsibleNavbar">
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link text-white" href="../">Beranda</span></a>
		</li>
		<li class="nav-item">
			<a class="nav-link text-white" href="../kursus/">Materi Kursus</a>
		</li>
		<?php if (isset($_SESSION['role'])) { ?>
			<!-- Tambahan menu pada role admin dan peserta -->
			<li class="nav-item">
				<a class="nav-link text-white" href="../jadwal/">Jadwal Kursus</a>
			</li>
			<li class="nav-item">
				<a class="nav-link active text-white" href="#">Pendaftaran</a>
			</li>
		<?php }
		if ($_SESSION['role'] == 'admin') { ?>
			<!-- Tambahan menu pada role admin -->
			<li class="nav-item">
				<a class="nav-link text-white" href="../mahasiswa/">Mahasiswa</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-white" href="../pengguna/">Pengguna</a>
			</li>
		<?php } ?>
	</ul>

	<ul class="navbar-nav ml-auto">
		<?php if ($_SESSION['role'] == 'admin') { ?>
			<!-- Jika role admin maka menampilkan nama admin -->
			<span class="navbar-text text-secondary">
				Admin: <?php echo $_SESSION['name']; ?>
			</span>
		<?php } elseif ($_SESSION['role'] == 'peserta') { ?>
			<!-- Jika role peserta maka menampilkan nama peserta -->
			<span class="navbar-text text-secondary">
				<?php echo $_SESSION['id'] . ' ' . $_SESSION['name'] . ' ' . $_SESSION['kelas']; ?>
			</span>
		<?php } ?>
		<li class="nav-item ml-3">
			<button type="button" class="btn btn-light" data-toggle="modal" data-target="#modalLogout">Logout</button>
		</li>
	</ul>
</div>
</nav>
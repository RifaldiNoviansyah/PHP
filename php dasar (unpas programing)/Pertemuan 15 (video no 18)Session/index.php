<?php 
	session_start();
	//cek ada sessionya apa engga
	if (!isset($_SESSION["Login"])) {
			header("Location: Login.php");
			exit;
		}	





	//hubungkan dengan file function.php
		require 'functions.php';
	//buat query
	$mahasiswa = query("SELECT * FROM data_mahasiswa");
	//cari data
	if (isset($_POST['Cari'])) {
		$mahasiswa = cari($_POST["keyword"]);
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>daftar mahasiswa</title>
		<style type="text/css">
		.photo {
			border : 3px solid red;
			width: 100px; /* lebar */
			height: 100px; /* tinggi */
		}
	</style>
</head>
<body>
	<a href="Logout.php">Logout</a>
	<h1>Daftar Mahasiswa</h1>
	<a href="tambah.php">Tambah Data Mahasiswa</a>
	<br>
	<!-- pencarian data -->
	<form action="" method="POST">
		<input type="text" name="keyword" size="40" autofocus="" placeholder="Masukan keyword pencarian!" autocomplete="OFF">
		<button type="submit" name="Cari">Cari!</button>
	</form>
	<br>
	<table border="1" cellpadding="10" cellspacing="0" >
		<tr>
			<th>No</th>
			<th>Aksi</th>
			<th>Nrp</th>
			<th>Nama</th>
			<th>Jurusan</th>
			<th>Email</th>
			<th>Gambar</th>
		</tr>
			<?php $i = 1; ?>
			<?php foreach ($mahasiswa as $mhs) : ?>
		<tr>
			<td><?= $i; ?></td>
			<td>
				<!-- yang jadi patokan hapus dan edit adalah primery key nya yaitu <?= $mhs["Nrp"];?> -->
				<a href="hapus.php?Nrp=<?= $mhs["Nrp"]; ?>" onclick="return confirm('yakin');">hapus</a> 
				<a href="edit.php?Nrp=<?= $mhs["Nrp"]; ?>" onclick="return confirm('yakin');">edit</a>
			</td>
			<td><?= $mhs["Nrp"];  	 ?></td>
			<td><?= $mhs["Nama"]; 	 ?></td>
			<td><?= $mhs["Jurusan"]; ?></td>
			<td><?= $mhs["Email"];   ?></td>
			<td><img class="photo" src="Photo/<?= $mhs["Gambar"] ?>"></td>
		</tr>
			<?php $i++; ?>
			<?php endforeach; ?>
			
	</table>
</body>
</html>
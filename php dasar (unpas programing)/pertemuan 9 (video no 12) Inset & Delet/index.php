<?php 
	//hubungkan dengan file function.php
		require 'functions.php';
	//buat query
	$mahasiswa = query("SELECT * FROM data_mahasiswa");
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
	<h1>Daftar Mahasiswa</h1>
	<a href="tambah.php">Tambah Data Mahasiswa</a>
	<br>
	<table border="1" cellpadding="10" cellspacing="0" >
		<tr>
			<th>No</th>
			<th>Aksi</th>
			<th>Gambar</th>
			<th>Nrp</th>
			<th>Nama</th>
			<th>Jurusan</th>
			<th>Email</th>
		</tr>
			<?php $i = 1; ?>
			<?php foreach ($mahasiswa as $mhs) : ?>
		<tr>
			<td><?= $i; ?></td>
			<td>
				<!-- yang jadi patokan hapus adalah primery key nya yaitu <?= $mhs["Nrp"];?> -->
				<a href="hapus.php?Nrp=<?= $mhs["Nrp"]; ?>" onclick="return confirm('yakin');">hapus</a> 
				<a href="edit.php">edit</a>
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
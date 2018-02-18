<?php 
	//hubungkan dengan file function
		require 'function.php';
	//buat query
	$mahasiswa = query("SELECT * FROM data_mahasiswa");
?>
<!DOCTYPE html>
<html>
<head>
	<title>halaman admin</title>
	<style type="text/css">
		.photo {
			border : 3px solid red;
			width: 100px; /* lebar */
			height: 100px; /* tinggi */
		}
	</style>
</head>
<body>
	<h1>Daftar Admin</h1>

	<table border="1" cellspacing="0" cellpadding="10"> 
		<!-- label -->
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Nrp</th>
			<th>Gambar</th>
			<th>Nama</th>
			<th>Jurusan</th>
			<th>Email</th>
		</tr>
		<!-- untuk no urut -->
		<?php $i = 1; ?>
		<!-- isi -->
		<?php foreach ($mahasiswa as $row) : ?>
		<tr>
			<td><?= $i; ?></td>
			<td>
				<a href="">Edit</a> <a href="">Hapus</a>
			</td>
			<td><?= $row["Nrp"]; ?></td>
			<td><img class="photo" src="photo/<?= $row["Gambar"]; ?>"></td>
			<td><?= $row["Nama"]; ?></td>
			<td><?= $row["Jurusan"]; ?></td>
			<td><?= $row["Email"]; ?></td>
		</tr>
	<?php $i++; ?>
	<?php endforeach; ?>


	</table>
</body>
</html>
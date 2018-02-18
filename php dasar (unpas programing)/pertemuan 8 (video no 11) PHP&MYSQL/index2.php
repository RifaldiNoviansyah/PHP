<?php 
	//koneksi ke databases
	$conn= mysqli_connect("localhost","root","","mahasiswa");
	//mysqli_connect("localhost","root","password xamppnya","mahasiswa");
	
	//ambil data dari table data_mahasiswa / quer data mahasiswa
	$result = mysqli_query($conn, "SELECT * FROM data_mahasiswa");


	//ambil data(fetc) mahasiswa dari object result

	//mysqli_fetch_row(); //mengembalikan array numerik
	// $mhs = mysqli_fetch_row($result);
	// //var_dump($mhs);
	//var_dump($mhs[3]);

	// //mysqli_fetch_assoc();//mengembalikan array associative
	// $mhs = mysqli_fetch_assoc($result);
	// var_dump($mhs["Jurusan"]);

	//mysqli_fetch_array(); //mengembalikan numerik dan associative
    //    $mhs = mysqli_fetch_array($result);
	//   var_dump($mhs);

	//mysqli_tetch_objec();
	 //$mhs = mysqli_fetch_object($result);
	//   var_dump($mhs => Email);


	//yang dipake
	//  while ($mhs = mysqli_fetch_assoc($result)){
	//   var_dump($mhs); 
	// }


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
		<?php while ($row = mysqli_fetch_assoc($result)) : ?>
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
	<?php endwhile; ?>


	</table>
</body>
</html>
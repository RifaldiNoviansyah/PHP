<?php 
 require 'functions.php';
//cek apakah tombol submit sudah di tekan apa belum
if (isset($_POST["submit"])) {
	//cek apakah data berhasil ditambahkan apa tidak?
	if (tambah($_POST)>0) {
		echo "
			<script>
				alert('data berhasil di tambahkan');
				document.location.href = 'index.php'
			</script>";
	}else{
		echo "
				<script>
					alert('data gagal di tambahkan');
					document.location.href = 'index.php'
				</script>";
	}		
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Mahasiswa</title>
</head>
<body>
	<!-- required untuk data jadi tidak boleh kosong -->
	<h1>Tambah Data Mahasiswa</h1>
		<!-- enctype="" untuk memisahkan antara string dan gambar syarta untuk bisa upload file   -->
	<form action="" method="POST" enctype="multipart/form-data">
		<ul>
			<li>
				<label for ="Nrp">Nrp : </label>
				<input type="text" name="Nrp" id="Nrp" required>
			</li>
			<li>
				<label for ="Nama">Nama : </label>
				<input type="text" name="Nama" id="Nama" required>
			</li>
			<li>
				<label for ="Jurusan">Jurusan : </label>
				<input type="text" name="Jurusan" id="Jurusan" required>
			</li>
			<li>
				<label for ="Email">Email : </label>
				<input type="text" name="Email" id="Email" required>
			</li>
			<li>
				<label for ="Gambar">Gambar : </label>
				<input type="file" name="Gambar" id="Gambar">
			</li>
			<li>
				<button type="submit" name="submit">Tambah Data!</button>
			</li>
		</ul>
	</form>
</body>
</html>
<?php 
 require 'functions.php';
 //ambil data di url 
 $Nrp = $_GET["Nrp"];
 //query data mahasiswa berdasarkan Nrp yaitu Primary key nya
 $mhs = query("SELECT *FROM data_mahasiswa WHERE Nrp = $Nrp")[0];

//cek apakah tombol submit sudah di tekan apa belum
if (isset($_POST["submit"])) {
	//cek apakah data berhasil diubah apa tidak?
	if (ubah($_POST)>0) {
		echo "
			<script>
				alert('data berhasil di ubah');
				document.location.href = 'index.php'
			</script>";
	}else{
		echo "
				<script>
					alert('data gagal di ubah');
					document.location.href = 'index.php'
				</script>";
			
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data Mahasiswa</title>
</head>
<body>
	<!-- required untuk data jadi tidak boleh kosong -->
	<h1>ubah Data Mahasiswa</h1>

	<form action="" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="GambarLama" value="<?= $mhs['Gambar']; ?>">
		<ul>
			<li>
				<label for ="Nrp">Nrp : </label>
				<input type="text" name="Nrp" id="Nrp" required value="<?= $mhs["Nrp"]; ?>">
			</li>
			<li>
				<label for ="Nama">Nama : </label>
				<input type="text" name="Nama" id="Nama" required value="<?= $mhs["Nama"]; ?>">
			</li>
			<li>
				<label for ="Jurusan">Jurusan : </label>
				<input type="text" name="Jurusan" id="Jurusan" required value="<?= $mhs["Jurusan"]; ?>">
			</li>
			<li>
				<label for ="Email">Email : </label>
				<input type="text" name="Email" id="Email" required value="<?= $mhs["Email"]; ?>">
			</li>
			<li>
				<label for ="Gambar">Gambar : </label>
				<br>
				<img src="photo/<?= $mhs['Gambar']; ?>" width="100">
				<input type="file" name="Gambar" id="Gambar">
			</li>
			<li>
				<button type="submit" name="submit">Ubah Data!</button>
			</li>
		</ul>
	</form>
</body>
</html>
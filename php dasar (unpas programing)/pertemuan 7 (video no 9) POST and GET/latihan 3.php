  <?php
  //cek apakah tidak ada data di $_GET 
if (!isset($_GET["nama"])  ||
	!isset($_GET["nrp"])  ||
	!isset($_GET["jurusan"])  ||
	!isset($_GET["Email"])    ||
	!isset($_GET["gambar"]) 
	) {
		//redierect
		header("location: latihan 2_GET.php");
		exit;
	}
 ?>


  <!DOCTYPE html>
 <html>
 <head>
 	<title>get</title>
 	 <style type="text/css">
 		.photo{
			border : 3px solid red;
			width: 100px; /* lebar */
			height: 100px; /* tinggi */
		}
 	</style>
 </head>
 <body>
 	<h1>Daftar Mahaiswa</h1>
 	<ul>
 			<li><?= $_GET["nama"]; ?></li>	
 			<li><?= $_GET["nrp"]; ?></li>
 			<li><?= $_GET["jurusan"]; ?></li>
 			<li><?= $_GET["Email"]; ?></li>
 			<li><img class="photo" src="photo/<?= $_GET["gambar"]; ?>" ></li>
 	</ul>
 	<a href="latihan 2_GET.php">kembali ke daftar mahasiswa</a>

 
 </body>
 </html>
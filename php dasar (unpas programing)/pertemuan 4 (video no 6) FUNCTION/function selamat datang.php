<?php
	//default digunakan jika user tidak memasukan nama adan waktu
	//function salam($waktu = "datang", $nama = "admin") 
	function salam($waktu, $nama){
		if (isset($_POST['submit'])) {
 			//tampilkan nama
 			$nama = $_POST['nama'];

 			//tampilkan waktu
 			date_default_timezone_set("Asia/Jakarta");
 			$time  = time();
 			$waktu = date("G",$time);

 			if ($waktu>=00 && $waktu<=05) {
 				echo "Selamat Begadang";
 			}elseif ($waktu>=05 && $waktu<=10) {
 				echo "Selamat Pagi";
 			}elseif ($waktu>=10 && $waktu<=15) {
 				echo "Selamat Siang";
 			}elseif ($waktu>=15 && $waktu<=17) {
 				echo "Selamat sore";
 			}elseif ($waktu>=17 && $waktu<=18) {
 				echo "Selamat Petang";
 			}elseif ($waktu>=18 && $waktu<=00) {
 				echo "Selamat Malam";
 			}

 			return "$waktu, $nama";
 		}
	}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>latihan function</title>
 </head>
 <body>
 	<form method="POST">
 		masukan nama  : <input type="text" name="nama">
 		<br>
 		<button type="submit" name="submit">masuk</button>
 		<button type="reset">ulangi</button>

 	<h1><?php
 			if (isset($_POST['submit'])) {
 			echo salam(" "," ");
 			}
 	  	?> 	
 	 </h1>
 	</form>
 </body>
 </html>
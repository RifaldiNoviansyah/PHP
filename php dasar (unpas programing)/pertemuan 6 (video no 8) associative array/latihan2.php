<?php 
// $mahasiswa = [
// 				["mobley",  "1", "teknik penggorangan", "mobley@mobile.legends"],
// 				["trenton", "2", "teknik pencucian",    "trenton@mobile.legends"]
// 			 ];
 
//array associative
//definisinya sama seperti array numerik, kecuali
//key-nya adalah string yang kita buat

$mahasiswa =[ //array paling luar adalah array numerik 
				[ //array indeks ke 1 yang berisi arrai associative
 					"nama" => "mobley", 
 					"nrp"  => "1",
 					"jurusan"=>"teknik penggorangan",
 					"Email"  =>"mobley@mobile.legends",
 					"gambar" => "1.png"
 			 	],
 			 	[
 			 		"nama" => "trenton", 
 					"nrp"  => "2",
 					"jurusan"=>"teknik pencucian",
 					"Email"  =>"trenton@mobile.legends",
 			 		"gambar" => "2.png"
 			 	]
 			 	
 			 	// [ //indeks 3
 			 	// 	"nama" => "trenton", 
 					// "nrp"  => "2",
 					// "jurusan"=>"teknik pencucian",
 					// "Email"  =>"trenton@mobile.legends",
 					// "tugas"  => [80,90,89] 
 			 	// ]
 			 ];

 //cara memanggil array numeri yang isinya array associative
 // echo $mahasiswa[1]["jurusan"];
 //indeks 3
 //cara memanggil array numeri yang isinya array associative dan dilamnya ada array lagi
 // echo $mahasiswa[2]["tugas"][1];
 ?>

  <!DOCTYPE html>
 <html>
 <head>
 	<title>latihan 3</title>
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
 		<!-- 
 			<?php foreach ($mahasiswa as $mhs) { ?>
 				<li><?php echo $mhs ?></li>
 			<?php  } ?> 
 		-->

 		<?php foreach ($mahasiswa as $mhs) { ?>
 			<ul>
 				<li>nama : 	  <?= $mhs["nama"]; ?></li>
 				<li>nrp  : 	  <?= $mhs["nrp"]; ?></li>
 				<li>jurusan : <?= $mhs["jurusan"]; ?></li>
 				<li>email   : <?= $mhs["Email"]; ?></li>
 				<li> <img class="photo" src="photo/<?= $mhs ["gambar"]; ?>" > </li>
 			</ul>
 			<br>
 		<?php  } ?>

 	</ul>
 
 </body>
 </html>

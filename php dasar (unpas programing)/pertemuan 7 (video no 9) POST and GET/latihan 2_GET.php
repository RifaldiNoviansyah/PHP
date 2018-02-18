<?php 

// $_GET["nama"] = "mobley";
// $_GET["nrp"] = "1";
// var_dump($_GET);
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
 			 	],
 			 	[
 			 		"nama" => "cisco", 
 					"nrp"  => "3",
 					"jurusan"=>"teknik pengelapan",
 					"Email"  =>"cisco@mobile.legends",
 			 		"gambar" => "3.png"
 			 	],
 			 	[
 			 		"nama" => "qwerty", 
 					"nrp"  => "4",
 					"jurusan"=>"teknik persapuan",
 					"Email"  =>"qwertry@mobile.legends",
 			 		"gambar" => "4.jpg"
 			 	],
 			 	[
 			 		"nama" => "lolipop", 
 					"nrp"  => "5",
 					"jurusan"=>"teknik pergulaan",
 					"Email"  =>"lolipop@mobile.legends",
 			 		"gambar" => "5.jpg"
 			 	]
];
 ?>

  <!DOCTYPE html>
 <html>
 <head>
 	<title>get</title>
 </head>
 <body>
 	<h1>Daftar Mahaiswa</h1>
 	<ul>
 		<?php foreach ($mahasiswa as $mhs) { ?>
 			<ul>
 				<li>
 					 <a href="latihan 3.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&Email=<?= $mhs["Email"]; ?>&gambar=<?= $mhs["gambar"]; ?>">	  
 					 	<?= $mhs["nama"]; ?>
 					</a>
 				</li>
 			</ul>
 			<br>
 		<?php  } ?>

 	</ul>
 
 </body>

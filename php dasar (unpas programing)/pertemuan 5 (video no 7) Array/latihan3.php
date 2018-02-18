<?php 
$mahasiswa = [
				["mobley",  "1", "teknik penggorangan", "mobley@mobile.legends"],
				["trenton", "2", "teknik pencucian",    "trenton@mobile.legends"]
			 ];
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>latihan 3</title>
 </head>
 <body>
 	<h1>Daftar MAhsiswa</h1>
 	<ul>
 		<!-- 
 			<?php foreach ($mahasiswa as $mhs) { ?>
 				<li><?php echo $mhs ?></li>
 			<?php  } ?> 
 		-->

 		<?php foreach ($mahasiswa as $mhs) { ?>
 			<ul>
 				<li>nama : <?php echo $mhs[0]; ?></li>
 				<li>nrp  : <?php echo $mhs[1]; ?></li>
 				<li>jurusan : <?php echo $mhs[2]; ?></li>
 				<li>email   : <?php echo $mhs[3]; ?></li>
 			</ul>
 			<br>
 		<?php  } ?>

 	</ul>
 
 </body>
 </html>
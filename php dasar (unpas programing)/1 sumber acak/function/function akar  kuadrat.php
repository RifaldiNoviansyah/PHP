<?php 
if (isset($_POST['submit'])) {
	$akar = $_POST['akar'];
	$akar_kuadrat  = sqrt($akar);
}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>
 		membuat function dari akar kuadrat
 	</title>
 </head>
 <body>
 	<center>
 	<h1>function akar kuadarat</h1>
 		<form method="POST">
 				masukan angka  <input type="text" name="akar">
 			<br><br>
 				<button type="submit" name="submit">Hitung</button> 
 				<button type="reset">Reset</button>
 			<br><br><br>
 				<?php if(isset($_POST['submit'])){ 
 					print ("HASIL PEMBULATAN <br>");
				 	echo "HASIL AKAR KUADRAT $akar adalah = ".ceil($akar_kuadrat); //ceil  function pembulatan
				 	print("<br><br><br>");
				 	print ("HASIL TIDAK PAKAI PEMBULATAN <br>");
				 	echo "HASIL AKAR KUADRAT $akar adalah = ".($akar_kuadrat); //ceil  function pembulatan

					}
				?>
 		</form>

 	</center>
 
 </body>
 </html>
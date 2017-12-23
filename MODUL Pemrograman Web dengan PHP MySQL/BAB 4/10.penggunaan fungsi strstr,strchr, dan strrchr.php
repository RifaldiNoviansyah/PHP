<?php
	$file = "test.this.txt";
	$ext1 = strstr($file,".");
	$ext2 = strchr($file,".");
	$ext3 = strrchr($file,".");

	echo $ext1. "<br>"; //.this.txt
	echo $ext2. "<br>"; //.this.txt
	echo $ext3;
	echo "<br>Fungsi strstr dan strchr mengambil string setelah karakter titik (.) dimana pencarian dilakukan
dari awal string Sedangkan fungsi strrchr, akan mengambil string setelah
karakter titik (.) yang mana pencarian dilakukan dari akhir string.";
?>
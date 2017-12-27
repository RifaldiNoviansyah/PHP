<?php
	$file = "data.txt";
	$filebaru = "databaru.txt";
	$filebaru2 = "databaru2.txt";
	if(copy($file, $filebaru)){
		echo "file <b>$file</b> berhasil di copy menjadi <b>$filebaru</b>. <br>";
	} if (rename ($filebaru, $filebaru2)){
		echo "file <b>$filebaru</b>berhasil di rename menjadi</b>$filebaru2</b>.<br>";
	} /* if (unlink($filebaru2)){ //unlink berfungsi untuk menghapus file.txt nya
		echo "file <b>$filebaru2</b> berhasil di buat <br>";
	} */
?>
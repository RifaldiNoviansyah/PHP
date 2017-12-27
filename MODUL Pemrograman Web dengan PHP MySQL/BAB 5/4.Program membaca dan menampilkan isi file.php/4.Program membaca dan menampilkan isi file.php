<?php
	$namafile = "data.txt";
	$handle = fopen($namafile, "r");
	if(!$handle){
		echo "<b>file tidak dapat dibuka atau belum ada</b>";
	}else {
		$isi = fgets ($handle, 2048);
		//$isi2 = fread ($handle, 20);
		echo "isi 1 : $isi<br>";
		//echo "isi 2 : $isi2<br>";
	}
	fclose($handle);
?>
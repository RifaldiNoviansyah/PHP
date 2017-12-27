<?php
	$namafile = "data.txt";
	$handle = fopen($namafile, "w");
		if(!$handle){
		echo "<b>file tidak dapat dibuka atau belum ada</b>";
	}else{
		echo "<b>file berhasil dibuka</b>";
	}
	fclose($handle);
?>
<?php
	$namafile = "data.txt";
	$handle = fopen($namafile, "r");
	if(!$handle){
		echo "<b>file tidak dapat di buka atau belum ada </b>";
	}else {
		echo "<b>isi file :</b><br>";
		while ($isi = fgets ($handle, 2048)){
			echo "$isi<br>";
		}
	}
	fclose($handle);
?>
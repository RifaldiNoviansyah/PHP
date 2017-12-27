<?php
	$namafile = "data.txt";
	$handle = fopen($namafile, "w");
	$nama = "mobley";
	if(!$handle){
		echo "<b>file tidak dapat dibuka atau belum ada</b>";
	}else{
		fwrite ($handle, "Fakultas Teknologi Informasi \n");
		fputs  ($handle, "Univeritas Sambil Ngopi \n");
		fwrite ($handle, $nama); 
		//file_put_contents ($namafile,"jakarta");
		echo "<b>file berhasil ditulis</b>";
	}
	fclose($handle);
?>
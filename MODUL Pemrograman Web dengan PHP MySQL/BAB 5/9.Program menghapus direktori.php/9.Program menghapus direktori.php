<?php
	//buat direktori
	$dir ="include"; //nama direktori
	$cek = mkdir($dir);
	if($cek){
		echo "Direktori <b>$dir</b> berhasil dibuat";
	} else{
		echo "Direktori <b>$dir</b> gagal dibuat";
	}

	//hapus direktori
	$del = rmdir ($dir); //fungsi rmdir() hanya bisa mengahapus direktori kosong
	if($del){
		echo "<br>Direktori <b>$dir</b>berhasil di hapus";
	}else{
		echo "<br>Direktori <b>$dir</b>gagal di hapus";
	}
?>
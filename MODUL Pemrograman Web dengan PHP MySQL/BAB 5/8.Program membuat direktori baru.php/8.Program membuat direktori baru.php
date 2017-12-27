<?php
	$dir = "images";
	$cek = mkdir($dir);
	if($cek){
		echo "Direktor <b>$dir</b> berhasil dibuat";
	}else {
		echo "Direktur <b>$dir</b> gagal di buat ";
	}
?>
<?php
	$file ="data.txt";

	if(is_file($file)){
		echo "file <b>$file</b> adalah file<br>";
		if (is_Executable($file)){
			echo "file <b>$file</b> bisa di jalankan secara langsung(executable)<br>";
		}else{
			echo "file <b>$file</b> tidak executable<br>";
		}

		if(is_writable($file)){
			echo "file <b>$file</b> bisa ditulis/diedit<br>";
		}else {
			echo "file <b>$file</b> tidak bisa ditulis atau di edit<br>";
		}

		//
			if(is_Readable($file)){
				echo "File <b>$file</b> bisa dibaca<br>";
			}else {
				echo "File <b>$file</b> tidak bisa dibaca<br>";
			}
		//
		echo "akses terakhir file <b>$file</b> = ".date("d-m-Y H:i:s.",fileatime($file))."<br>";


		echo "modifikasi terakhir file <b>$file</b> = ".date("d-m-Y H:i:s.",filemtime($file))."<br>";

		echo "file <b>$file</b> dibuat = ".date("d-m-Y H:i:s.",filectime($file))."<br>";

		echo "Ukuran File <b>$file</b> = ".filesize($file)."byte<br>";
		echo "Jenis File <b>$file</b>  = ".filetype($file)."<br>";
	}else if (is_dir($file)){
		echo "file <b>$file</b> adalah Direktori<br>";
	}else {
		echo "file <b>$file</b> tidak dikenal<br>";
	}
?>
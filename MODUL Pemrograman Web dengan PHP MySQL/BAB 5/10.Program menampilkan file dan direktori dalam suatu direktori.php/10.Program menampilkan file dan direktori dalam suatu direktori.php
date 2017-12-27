<?php
	$dir ="images";
	if($handle = opendir($dir)){ //opendir() berguna untuk membuka direktori
		while (false !== ($file = readdir($handle))){ //readir() berguna untuk membaca file dalam direktori satu per satu
			if($file !="." && $file != ".."){
				echo "direktori berhasil di buka, direktori bernama $dir <br>";
				echo "$file<br>";
			}
		}
		closedir($handle);
	}
?>
<?php
	$filename ="data.txt";

	if(file_Exists($filename)){
		echo "file $filename ada";
	}else{
		echo "file $filename tidak ada";
	}
?>
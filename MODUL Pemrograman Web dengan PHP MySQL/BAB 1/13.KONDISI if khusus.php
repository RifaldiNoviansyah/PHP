<?php
	$tahun = date ("Y");
	$kabisat = ($tahun%4 == 0)? "Kabisat" : "bukan kabisat";
	echo "tahun <b>$tahun</b> $kabisat";
?>
<?php
	function luas_lingkaran($jari){
		return 3.14 * $jari * $jari;
	}
	//pemanggilan function
	$r = 10;
	echo "luas lingkaran dengan jari-jari $r = ";
	echo luas_lingkaran($r);
?>
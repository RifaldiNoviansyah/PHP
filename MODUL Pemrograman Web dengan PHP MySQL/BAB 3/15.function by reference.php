<?php
	function tambah_string (&$str){
		$str = $str . ", jakarta ";
		return $str; 
	}
	
	$str = "unversitas sambil ngopi";
	echo "\$str = $str<br>";
	echo tambah_string ($str)."<br>";
	echo "\$str = $str<br>";
?>
<?php
	$arr= array ("ani" => 80, "Otim" => 90, "ana" => 75, "budi" => 85);
	/*
		untuk memasukana nilai 80 (integer) ke "ani" (string) di array menggunakan => kalo hanya pake =  akan error
	*/
	echo $arr['ani'];
	echo "<br>";
	echo $arr['Otim'];
	echo "<br>";

	$arr = array();
	$arr['ani'] = 80;
	$arr['asma'] = 95;
	$arr['sri'] = 77;

	echo $arr['asma'];
	echo "<br>";
	echo $arr['sri'];
?>
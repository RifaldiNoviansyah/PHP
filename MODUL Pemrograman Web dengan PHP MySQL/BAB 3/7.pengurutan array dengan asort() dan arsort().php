<?php
	$arr = array ("ani" => 80, "otim" => 90,"sri" => 75, "budi" => 85);
	echo	"<b>Array Sebelum pengurutan</b>";
	echo	"<pre>";
	print_r ($arr);
	echo	"</pre>";
	//print_r untuk menampilkan struktur array
	asort($arr);
	reset($arr);
	echo "<b>array seteleh pengurutan dengan asort()</b>";
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	echo "<br>";
	echo "pengurutan asort() yaitu pengurutan dengan berdasarkan value secara ascending";
	echo "<br>";

	arsort($arr);
	reset($arr);
	echo "<b>array setelah pengurutan dengan arsort()</b>";
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	echo "<br>";
	echo "pengurutan arsort() yaitu pengurutan dengan berdasarkan value secara descending";
	echo "</br>";
?>

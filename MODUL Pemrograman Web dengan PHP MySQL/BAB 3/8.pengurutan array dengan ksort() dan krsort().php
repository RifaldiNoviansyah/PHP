<?php
	$arr = array ("ani" => 80, "otim" => 90,"sri" => 75, "budi" => 85);
	echo	"<b>Array Sebelum pengurutan</b>";
	echo	"<pre>";
	print_r ($arr);
	echo	"</pre>";
	//print_r untuk menampilkan struktur array
	ksort($arr);
	reset($arr);
	echo "<b>array seteleh pengurutan dengan ksort()</b>";
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	echo "<br>";
	echo "pengurutan ksort() yaitu pengurutan dengan berdasarkan index/key (huruf) secara ascending";
	echo "<br>";

	krsort($arr);
	reset($arr);
	echo "<b>array setelah pengurutan dengan krsort()</b>";
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	echo "<br>";
	echo "pengurutan krsort() yaitu pengurutan dengan berdasarkan index/key (huruf) secara descending";
	echo "</br>";
?>

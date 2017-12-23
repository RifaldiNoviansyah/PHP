<?php
	$arr = array ("ani" => 80, "otim" => 90,"sri" => 75, "budi" => 85);
	echo	"<b>Array Sebelum pengurutan</b>";
	echo	"<pre>";
	echo ($arr);
	echo	"</pre>";

	sort($arr);
	reset($arr);
	echo "<b>array seteleh pengurutan dengan sort()</b>";
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	echo "<br>";
	echo "pengurutan sort() yaitu pengurutan dengan berdasarkan value secara ascending";
	echo "<br>";

	rsort($arr);
	reset($arr);
	echo "<b>array setelah pengurutan dengan rsort()</b>";
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	echo "<br>";
	echo "pengurutan rsort() yaitu pengurutan dengan berdasarkan value secara descending";
	echo "</br>";
?>


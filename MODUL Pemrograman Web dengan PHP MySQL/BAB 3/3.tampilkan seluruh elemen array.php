<?php
	$arr = array ("blue","black","red","yellow","green");

	echo "menampilkan isi array denga for : <br>";

	for($i = 0; $i < count($arr); $i++){
		echo "do you like <font color=$arr[$i]>". $arr[$i]."</font>? <br>";
	}
	/*
 		count() digunankan untuk mencari jumlah elemen dari array $arr
	*/

	echo "<b>menampilkan isi array dengan for each : <br>";

	foreach($arr as $warna){
		echo "do you like <font color=$warna>".$warna."</font>? <br>";
	}
?>

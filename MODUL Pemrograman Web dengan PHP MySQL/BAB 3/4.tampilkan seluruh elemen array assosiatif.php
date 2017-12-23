<?php
	$arr = array ("ani" => 80, "Otim" => 90, "ana" => 75, "budi" => 85);

	echo "menampilkan isi array dengan forech : <br>";

	foreach ($arr as $nama => $nilai){
		echo "nilai $nama= $nilai<br>";
	}

	reset ($arr);
	echo "<br>menampilkan isi array dengan while dan list : <br>";
	while (list($nama,$nilai)=each($arr)){
		echo "nilai $nama = $nilai <br>";
	}
?>

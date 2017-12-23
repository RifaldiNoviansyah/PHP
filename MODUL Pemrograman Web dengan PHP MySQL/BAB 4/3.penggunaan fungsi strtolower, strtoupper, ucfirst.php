<?php
	$str ="everything i do, i do it for you";

	echo "<b>string asli</b> : $str";
	echo "<br><b>strtolower()</b>: ".strtolower($str);
	echo "<br><font color='red'> strtolower, untuk mengubah string menjadi lower-case<br></font>";
	echo "<br><b>strtoupper()</b>: ".strtoupper($str);
	echo "<br><font color='red'>strtoupper, untuk mengubah string menjadi uppper case<br></font>";
	echo "<br><b>ucfirst()</b>: ".ucfirst($str);
	echo "<br><font color='red'>ucfirst untuk mengubah huruf pertama string menjadi upper case</font><br>";
	echo "<br><b>ucwords()</b>: ".ucwords($str);
	echo "<br><font color='red'>ucwords untuk mengubah huruf pertama tiap kata string menjadi upper case</font><br>";
	echo "<br><b>strrev()</b>: ".strrev($str);
	echo "<br><font color='red'>untuk membalikan string<br></font>";
	echo "<br>Jumlah Karakter</b>: ".strlen($str);

?>
	
	
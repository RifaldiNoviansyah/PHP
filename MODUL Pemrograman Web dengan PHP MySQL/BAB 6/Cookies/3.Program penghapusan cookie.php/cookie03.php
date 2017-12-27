<?php
	//set expiration to one hour ago
	setcookie ("username","",time() - 3600);
	setcookie ("namalengkap","", time() -3600);
	echo "<h1>cookie berhasil dihapus.<h1>";
	echo "<h2>klik <a href='cookie02.php'>disini</a>untuk pemeriksaan cookie</h2>";
?>
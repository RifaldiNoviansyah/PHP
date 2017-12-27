<?php
	if(isset($_COOKIE['username'])){
		echo "<h1>cookie 'username' ada. isinya :".$_COOKIE['username'];
	}else{
		echo "<h1>cookie 'username' TIDAK ada.</h1>";
	}

	if(isset($_COOKIE['namalengkap'])){
		echo "<h1>cookie 'namalengkap' ada. Isinya : ".$_COOKIE['namalengkap'];
	}else{
		echo "<h1> Cookie 'namalengkap' TIDAK ada.</h1>";
	}

	echo "<h2>klik <a href='cookie01.php'>di sini</a> untuk penciptaan cookie</h2>";
	echo "<h2>klik <a href='cookie03.php'>di sini</a> untuk penghapusan cookie</h2>";
?>
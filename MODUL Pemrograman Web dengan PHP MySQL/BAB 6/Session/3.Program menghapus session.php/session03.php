<?php	
/**************************************************************
Halaman ini merupakan halaman logout, dimana kita menghapus
session yang ada
***************************************************************/
session_start();
if(isset($_SESSION['Login'])){
	unset($_SESSION);
	session_destroy();
	//
	echo "<h1>Anda Sudah Berhasil LOGOUT</h1>";
	echo "<H2>klik <a href='session01.php>di sini</a>untuk LOGIN kembali</h2>";
	echo "<h2>anda sekarang tidak bisa masuk ke halaman <a href='session02.php'>session02.php</a>lagi</h2>";
}
?>
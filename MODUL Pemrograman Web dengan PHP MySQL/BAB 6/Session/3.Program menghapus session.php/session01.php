<?php
/***************************************************************
Nama File  : session01.php
halaman ini merupakan halaman contoh penciptaan session.
perintah session_start() harus ditaruh di perintah pertama 
tanpa spasi di depannya. perintah session_Start() harus ada
pada setiap halaman yang berhunbungan dengan session
***************************************************************/
session_Start();
	if(isset($_POST['Login' ])){
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		//periksa login
		if($user == "Mobley" && $pass = "1933"){
			//menciptakan session 
			$_SESSION['Login'] = $user;
			//menuju ke halaman pemeriksaan 
			echo "<h1>Anda Berhasil Login</h1>";
			echo "<h2>Klik <a href='session2.php'>di sini (session2.php)</a> untuk menuju ke halaman pemeriksaan session</h2>";
		}else {
		echo "anda salah";
		}
	}
?>
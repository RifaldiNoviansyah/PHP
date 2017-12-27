<?php
/************************************************************
Halaman Ini merupkan contoh halaman pemeriksaaan session.
pemriksaan session biasanya dilakukan jika suatu halaman
memiliki akses terbatas. misalnya harus login terlebih dahulu
*************************************************************/
session_start();
//pemeriksaan session
if(isset($_SESSION['Login'])){
	//jika sudah login menapilkan isi session ini
	echo "<h1>Selamat Datang".$_SESSION['Login']."</h1>";
	echo "<h2>Halaman ini hanya bisa diakses jika anda sudah login</h2>";
	echo "<h2>klik <a href ='session03.php'>di sini (session3.php)</a> untuk LOGOUT</h2>";
}else{
		//session belum ada artinya belum login
		die("Anda belum login! anda tidak punya hak masuk ke halaman ini.silahkan login <a href='session01.php'>di sini</a>");
		/*
			Fungsi die() pada baris 17 digunakan untuk menampilkan
suatu pesan sekaligus men-terminate program, artinya perintah selain die() akan
diabaikan.
		*/
}
?>
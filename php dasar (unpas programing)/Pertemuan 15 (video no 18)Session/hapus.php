<?php 
session_start();
	//cek ada sessionya apa engga
	if (!isset($_SESSION["Login"])) {
			header("Location: Login.php");
			exit;
		}	

require 'functions.php';

$Nrp = $_GET["Nrp"];

if (hapus($Nrp)>0){
	echo "
			<script>
				alert('data berhasil di hapus');
				document.location.href = 'index.php'
			</script>";
}else{
	echo "
			<script>
				alert('data gagal di hapus');
				document.location.href = 'index.php'
			</script>";
}
?>
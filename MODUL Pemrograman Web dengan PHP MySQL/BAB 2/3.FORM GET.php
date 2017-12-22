<html>
	<head>
		<title>Pengolahan form</title>
	</head>
	<body>
		<form action="" method="GET" name="input">
			Nama Anda : <input type="text" name="nama"><br>
				<input type="submit" name="input" value="input">
		</form>
	</body>
</html>

<?php
	if (isset($_GET['input'])){
		$nama = $_GET['nama'];
			echo "Nama Anda : <b>$nama</b>"; 
	}
?>
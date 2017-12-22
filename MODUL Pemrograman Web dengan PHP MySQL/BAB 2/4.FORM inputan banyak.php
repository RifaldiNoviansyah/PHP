<html>
	<head>
		<title>FROM INPUTAN TEXT BANYAK</title>
	</head>
	<body>
		<form action="" Method="POST" name="input">
			Nama Buah - Buahan <br>
			<input type = "text" name="nama1"><br>
			<input type = "text" name="nama2"><br>
			<input type = "text" name="nama3"><br>
			<input type = "text" name="nama4"><br>
				<input type="submit" name="input" value="input">
		</form>
	</body>
</html>

<?php 
	if (isset($_POST['input'])){
		$nama1 = $_POST['nama1'];
		$nama2 = $_POST['nama2'];
		$nama3 = $_POST['nama3'];
		$nama4 = $_POST['nama4'];

		echo "<b> Tampilkan nama buah buahan : </b> <br>";
		echo $nama1."<br>";
		echo $nama2."<br>";
		echo $nama3."<br>";
		echo $nama4."<br>";
	}
?>

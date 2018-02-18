<!DOCTYPE html>
<html>
<head>
	<title>POST</title>
</head>
<body>
	<!-- jika mau di satu halaman pakai ini -->
	<!-- 
		<?php if (isset($_POST["submit"])) : ?>
			<h1>selamat datang, <?= $_POST["nama"]; ?></h1>
		<?php endif; ?>
 	-->

	<form action="latihan 5.php" method="POST">
		Masukan nama anda : <input type="text" name="nama">
		<br>
		<button type="submit" name="submit">kirim</button> <button type="reset">reset</button>
	</form>
</body>
</html>
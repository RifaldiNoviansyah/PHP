<?php
if(isset($_POST['submit'])){
	$angka1 = $_POST['angka1'];
	$angka2 = $_POST['angka2'];
	$hasil  = pow($angka1, $angka2); 
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>membuat function pangkat</title>
</head>
<body>
	<center>
	<h1>function pangkat</h1>
	<form method="POST">
		masukan angka pertama <input type="text" name="angka1">
		<br>
		masukan angka kedua   <input type="text" name="angka2">
		<br>
		<button type="submit" name="submit">Hitung</button>
		<button type="reset">ulangi</button>
		<br>
	</form>
	<?php if (isset($_POST['submit'])) {
		echo "hasil pangkat antara $angka1 pangkat $angka2 adalah ".$hasil; 
	} ?>
	</center>
</body>
</html>
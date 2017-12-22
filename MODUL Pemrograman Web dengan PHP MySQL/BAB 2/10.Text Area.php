<html>
	<head>
		<title>Type Text Area</title>
	</head>
	<body>
		<form action="" Method="POST" name="input">
			<h2>Iput Kritik/Saran</h2>
			<textarea name="saran" cols="40" rows="5"></textarea> <br>
			<input type="submit" name="pilih" value="pilih">
		</form>
	</body>
</html>
<?php
	if(isset($_POST['pilih'])){
		$saran = $_POST['saran'];
		echo "<font color='blue' <b>$saran</b></font";
	}
?>
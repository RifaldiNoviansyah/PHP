<?php 
	require 'functions.php';
	if (isset($_POST['Register'])) {
		if (registrasi($_POST)>0) {
			// > 0 berarti ada user baru yang berhasil daftar
			echo "<script>
					alert ('user baru berhasil di tambahkan')
				  </script>";
		}else{
			echo mysqli_error($conn);
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Registrasi</title>
	<style type="">
		label {
			display: block; /*biar turun kebawah  kata dan kotak nya*/
		}
	</style>
</head>
<body>

	<h1>Halaman Registrasi</h1>
	<form action="" method="POST">
		
		<ul>
			<li>
				<label for="Username">Username : </label>
				<input type="text" name="Username" id="Username">
			</li>

			<li>
				<label for="Password">Password : </label>
				<input type="Password" name="Password" id="Password">
			</li>

			<li>
				<label for="ConfrimPassword">ConfrimPassword : </label>
				<input type="Password" name="ConfrimPassword" id="ConfrimPassword">
			</li>
			<li>
				<button type="submit" name="Register">Register</button>
			</li>
		</ul>
	</form>

</body>
</html>
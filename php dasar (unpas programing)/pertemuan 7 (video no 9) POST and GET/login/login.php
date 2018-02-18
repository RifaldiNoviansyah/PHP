<?php 
//cek apakah tombol submit sudah di tekan atau belum
 if (isset($_POST["submit"]) ) {
 	//cek username & password
 		if ($_POST["Username"] == "Mobley" && $_POST["Password"] == "123") {
 		//jika benar, redirect ke halaman admin
 			header("location: admin.php");
 		}else{
 			//jika salah, tampilkan pesan kesalahan
 			$error = true;
 		}
 }
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h1>Login Admin</h1>
	
	<?php if (isset($error)) :?>
		<p style="color=red; font-style:italic;" >Username / Password salah</p>
	<?php endif; ?>

	<ul>
		<form action="" method="POST">
			<li>
				<label for="Username">Username : </label>
				<input type="text" name="Username" id="Username">
			</li>
			<li>
				<label for="Password">Password : </label>
				<input type="Password" name="Password" id="Password">
			</li>
			<button type="submit" name="submit">Submit</button>
			<button type="text">Reset</button>
		</form>
	</ul>
</body>
</html>
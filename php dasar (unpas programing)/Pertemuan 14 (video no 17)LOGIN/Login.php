<?php 
	require 'functions.php';

//cek apakah tombol submt saudah di tekan apa belum
if (isset($_POST['Login'])) {
	$Username = $_POST["Username"];
	$Password = $_POST["Password"];


	$result = mysqli_query($conn, "SELECT * FROM users WHERE Username = '$Username' ");

	//cek username
	if (mysqli_num_rows($result) === 1 ) {
		//cek password
		$row = mysqli_fetch_assoc($result);
		if (Password_verify($Password, $row["Password"]) )  //untuk mengecik string apakah sama dengan hash apa engga 
		{
			header("Location: index.php");
			exit;
		}
	}

	$error = true; //pass dan username salah
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
</head>
<body>

	<h1>Halaman Login</h1>
	<?php if (isset($error)) : ?>
		<p style="color: red; font-style: italic;">Username / Password Salah</p>
	<?php endif; ?>

	<form action="" method="POST">
		<li>
			<label for="Username">Username</label>
			<input type="text" name="Username" id="Username">
		</li>
		<li>
			<label for="Password">Password</label>
			<input type="Password" name="Password" id="Password">
		</li>
		<li>
			<button type="Submit" name="Login">Login</button>
		</li>
	</form>

</body>
</html>
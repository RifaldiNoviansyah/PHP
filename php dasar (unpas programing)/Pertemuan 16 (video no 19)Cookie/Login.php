<?php 
//cek jika udah login gak udah tampilkan halaman loginnya
session_start();
require 'functions.php';
//cek cookie
if (isset($_COOKIE['ID']) && isset($_COOKIE['key'])) {
	$ID = $_COOKIE['ID'];
	$key = $_COOKIE['key'];

	//ambil username berdasarkan ID
	$result = mysqli_query($conn, "SELECT Username FROM users WHERE ID = $ID"); 
	$row = mysqli_fetch_assoc($result);

	//cek cookie dan username
	if($key === hash('sha256',$row['Username'])){
		$_SESSION['Login'] = true;
	}
}


	//cek ada sessionya apa engga
	if (isset($_SESSION["Login"])) {
			header("Location: index.php");
			exit;
		}	

//cek apakah tombol submt saudah di tekan apa belum
if (isset($_POST['Login'])) {
	$Username = $_POST["Username"];
	$Password = $_POST["Password"];


	$result = mysqli_query($conn, "SELECT * FROM users WHERE Username = '$Username' ");

	//cek username
	if (mysqli_num_rows($result) === 1 ) {
		//cek password
		$row = mysqli_fetch_assoc($result); //row menyimpan data users yang login
		if (Password_verify($Password, $row["Password"]) )  //untuk mengecik string apakah sama dengan hash apa engga 
		{
			//set session
			$_SESSION["Login"] = true;

			//cek remember me 
			if (isset($_POST['Remember'])) {
				//buat cookie

				setcookie('ID',$row['ID'],time()+60);
				setcookie('key',hash('sha256', $row['Username']),time()+60);
			}

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
	<center>
	<h1>Halaman Login</h1>
	<!-- peringatan jika password dan username salah -->
	<?php if (isset($error)) : ?>
		<p style="color: red; font-style: italic;">Username / Password Salah</p>
	<?php endif; ?>

	<form action="" method="POST">
		<table>
			<tr>
				<td><label for="Username">Username</label></td>
				<td><input type="text" name="Username" id="Username"></td>
			</tr>
			<tr>
				<td><label for="Password">Password</label></td>
				<td><input type="Password" name="Password" id="Password"></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="checkbox" name="Remember" id="Remember">
				   	<label for="Remember">Remember me</label>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><button type="Submit" name="Login">Login</button></td>
			</tr>
		</table>
	</form>
</center>
</body>
</html>
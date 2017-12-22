<html>
	<head>
		<title>Password</title>
	</head>
	<body>
		<form action="" method="POST" name="input">
		<h2>Login here</h2>
			username : <input type="text" name="username"> <br>
			Password : <input type="text" name="password"> <br>
			<input type="submit" name="login" value="login">
			<input type="reset" name="reset" value="reset">
		</form>
	</body>
</html>

<?php
	if(isset($_POST['login'])){
	$user = $_POST['username'];
	$pass = $_POST['password'];
		if($user == "rifaldi" && $pass == "1933"){
			echo "Login berhasil";
		} else{
				echo "login gagal";
			}
	}
?>
<?php 
	function masukan(){
		if (isset($_POST['nama'])) {
			$nama  = $_POST['nama'];
			$emai = $_POST['email'];
			
			echo "nama Anda  : ".$nama;
			print "<br>";
			echo "email Anda : ".$emai;
		}

		if(empty($nama)){
			die("maaf anda belum memasukan nama anda");
		}elseif (is_numeric($nama)) {
			die("maaf nama harus berupa huruf");
		}
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>isset dan empty</title>
</head>
<body>
	<form method="POST">
		masukan nama <input type="text" name="nama"> <br>
		email	<input type="text" name="email"><br>
		<button type="submit" name="submit">Submit</button>
		<button type="reset">ulangi</button>
	</form>
	<?php 
		echo masukan();
	?>
</body>
</html>
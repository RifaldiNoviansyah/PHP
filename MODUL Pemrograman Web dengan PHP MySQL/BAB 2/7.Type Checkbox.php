<html>
	<head>
		<title>Type Check box</title>
	</head>
	<body>
		<form action="" METHOD="POST" name="input">
		<h2>pilih band favorit anda</h2>
		<input type="checkbox" name="band1" value="padi" >Padi<br>
		<input type="checkbox" name="band2" value="ungu" >Ungu<br>
		<input type="checkbox" name="band3" value="Burgerkill" >Burgerkill<br>
		<input type="checkbox" name="band4" value="Paramore" >Paramore<br>
		<input type="submit" name="pilih" value="pilih">
		</form>
	</body>
</html>

<?php
	if(isset($_POST['pilih'])){
	echo "Band favorit anda : <br>";
		if(isset($_POST['band1'])){
			echo "+ ".$_POST['band1']."<br>";
		}

		if(isset($_POST['band2'])){
			echo "+ ".$_POST['band2']."<br>";
		}

		if(isset($_POST['band3'])){
			echo "+ ".$_POST['band3']."<br>";
		}

		if(isset($_POST['band4'])){
			echo "+ ".$_POST['band4']."<br>";
		}
	}
?>
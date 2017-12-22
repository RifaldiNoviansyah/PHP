<html>
	<head>
		<title>Type Combo box</title>
	</head>
	<body>
		<form action="" Method="POST" name="input">
			<h2>PILIH FILIM KARTUN FAVORIT</h2>
			<select name="kartun">
				<option>----------</option>
				<option value ="Sponegbob">Spongebob</option>
				<option value ="Naruto">Naruto</option>
				<option value ="One Piece">One Piece</option>
				<option value ="Doraemon">doraemon</option>
				<option value ="Sinchan">Sinchan</option>
			</select>
				<input type="submit" name="pilih" value="pilih">
		</form>
	</body>
</html>
<?php
 if(isset($_POST['pilih'])){
 	$film=$_POST['kartun'];
 		echo "kartun favorit anda adalah <b>$film</b>";
 }
?>
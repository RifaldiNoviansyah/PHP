<form action="" method="POST">
	NIM anda : 
		<input type="text" name="txtnim"><br>
		<input type="submit" name="submit" value="Proses">
</form>
<?php
	if(isset($_POST['submit'])){

		$nim = $_POST['txtnim'];
		$a = substr ($nim, 2, 2);
		switch($a){
			case '11' : $jurusan  = "teknik informatika";
						break;
			case '22' : $jurusan  = "Sistem Informasi";
						break;
			case '33' : $jurusan  = "Kompeterisasi Akuntansi";
					    break;
			case '44' : $jurusa   = "Sistem Komputer";
						break;
			default	  : $jurusan = "salah jurusan";
		}
		echo "nim anda : $nim<br>";
		echo "jurusan anda : $jurusan";  
		echo "<br>substr berfungsi untuk memtong string dan disini nim akan di potong mulai dari index ke 2";
	}
?>
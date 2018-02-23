<?php 
	//sambungkan dengan databases
	$conn = mysqli_connect("localhost","root","","mahasiswa");


	//function query ini akan menerima sintak query dari halaman index.php
	function query($query){
		global $conn; //ambil variabel conn yang ada di luar function
		$result = mysqli_query($conn,$query); //ambil koneksi dan string queynya
		$rows = []; //buat variabel penampung
		while ($row = mysqli_fetch_assoc($result)) {
			$rows[]= $row;
		}
		return $rows;  
	}

	function tambah($data){
		global $conn;
		//ambil data dari tiap elemen form
		$Nrp     = htmlspecialchars($data['Nrp']);
		$Nama    = htmlspecialchars($data['Nama']);
		$Jurusan = htmlspecialchars($data['Jurusan']);
		$Email   = htmlspecialchars($data['Email']);
		$Gambar  = htmlspecialchars($data['Gambar']);
		

		//query insert data
		$queryTambahData = "INSERT INTO data_mahasiswa VALUES ('$Nrp','$Nama','$Jurusan','$Email','$Gambar')";
		mysqli_query($conn,$queryTambahData);

		return mysqli_affected_rows($conn);

	}

	function hapus($Nrp){
		global $conn;
		mysqli_query($conn, "DELETE FROM data_mahasiswa WHERE Nrp =$Nrp");
		return mysqli_affected_rows($conn);
	}

	function ubah($data){
		global $conn;
		//ambil data dari tiap elemen form
		$Nrp     = htmlspecialchars($data['Nrp']);
		$Nama    = htmlspecialchars($data['Nama']);
		$Jurusan = htmlspecialchars($data['Jurusan']);
		$Email   = htmlspecialchars($data['Email']);
		$Gambar  = htmlspecialchars($data['Gambar']);
		

		//query edit data
		$queryEditData = "UPDATE data_mahasiswa SET 
							Nrp = '$Nrp',
							Nama = '$Nama',
							Jurusan = '$Jurusan',
							Email = '$Email',
							Gambar = '$Gambar'
						 WHERE Nrp= $Nrp";
		mysqli_query($conn,$queryEditData);

		return mysqli_affected_rows($conn);

	}
	function Cari($key){
		$query = "SELECT * FROM data_mahasiswa 
			WHERE 
		Nrp 		LIKE '%$key%' OR
		Nama 		LIKE '%$key%' OR
		Jurusan 	LIKE '%$key%' OR
		Email  		LIKE '%$key%'
		";

		return query($query);
	}
 ?>
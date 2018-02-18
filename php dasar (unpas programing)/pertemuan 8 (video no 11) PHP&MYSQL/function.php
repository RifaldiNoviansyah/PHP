<?php 
    //koneksi ke databases
		$conn= mysqli_connect("localhost","root","","mahasiswa");
	//mysqli_connect("localhost","root","password xamppnya","mahasiswa");
	
	//function query ini akan menerima sintak query dari halaman index.php
	function query($query){
		global $conn; //ambil variabel con di luar function
		$result = mysqli_query($conn, $query); //ambil koneksi dan string queynya
		$rows = [];
		while ($row = mysqli_fetch_assoc($result)){
			$rows[] = $row;
		}
		return $rows;
	}
 ?>
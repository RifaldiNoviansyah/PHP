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

		//upload gambar 
		$Gambar = upload();
		if (!$Gambar) {
			//jika gagal ngirim gambar akan di berhentikan jadi insert nya gak di jalankan
			//kenpad false kare false kurang dari 0
			return false; 
		}
		

		//query insert data
		$queryTambahData = "INSERT INTO data_mahasiswa VALUES ('$Nrp','$Nama','$Jurusan','$Email','$Gambar')";
		mysqli_query($conn,$queryTambahData);

		return mysqli_affected_rows($conn);

	}

	function upload(){
		$namaFile   = $_FILES['Gambar']['name'];
		$ukuranFile = $_FILES['Gambar']['size'];	
		$error  	= $_FILES['Gambar']['error'];
		$tmpName	= $_FILES['Gambar']['tmp_name'];

		//cek apakah tidak ada gambar yang di upload
		if($error === 4){
			echo "<script>
					alert('Pilih Gambar terlebih dahulu');
				 </script>";
				return false;
		}

		//cek apakah yang di upload itu gambar atau bukan
		$ekstensiGambarValid = ['jpg','jpeg','png'];

		//mengambil ekstensi gambar
		//explode(delimiter, string); ini fungsi untuk memecah sebuah string  jadi array dengan delimiter 
		$ekstensiGambar = explode('.',$namaFile); //1.png berubah jadi 1.png = ['1','png']
		$ekstensiGambar = strtolower(end($ekstensiGambar)); //end untuk mengambil extensinya di paling belakang //strtolower memaksa untuk huruf file jadi kecil

		//pengecekan ekstensi gambar
		if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
				echo "<script>
					alert('Yang anda upload bukan gambar');
				 	</script>";
				return false;
		}

		//cek jika ukuran gambar terlalu besar
		if ($ukuranFile > 1000000) {
				echo "<script>
					alert('Ukuran gambar Terlalu besar');
				 </script>";
				return false;
		}

		//generate nama gambar baru ini berfungsi untuk menghindari nama fil yang sama 
		$namaFileBaru = uniqid();
		$namaFileBaru .= '.';
		$namaFileBaru .= $ekstensiGambar;

		//lolos pengecekan, gambar siap di upload //buat mindahin file 
		move_uploaded_file($tmpName,'photo/'.$namaFileBaru);

		return $namaFileBaru;
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
		$GambarLama  = htmlspecialchars($data['GambarLama']);
		
		//cek apakah user pilih gambar baru atau tidak
		if ($_FILES['Gambar']['error'] === 4) {
			$Gambar = $GambarLama; //tidak pilih gambar baru 
		}else {
			$Gambar = upload();
		}

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

	function registrasi($data){
		global $conn;

		$Username = strtolower(stripcslashes($data["Username"])); 
				// strtolower(str) untuk mengecilkan huruf stripcslashes(str) untuk menghilangkan karakter seperti /
		$Password = mysqli_real_escape_string($conn,$data["Password"]);
		$ConfrimPassword = mysqli_real_escape_string($conn,$data["ConfrimPassword"]);

		//cek username udah ada apa belum
		$result = mysqli_query($conn, "SELECT Username FROM users WHERE Username = '$Username'");
		if (mysqli_fetch_assoc($result)) {
			echo "<script>
					alert('username sudah ada!');
				  </script>";
				  return false;
		}

		//cek ConfrimPassword
		if ($Password !== $ConfrimPassword) {
			echo "<script>
						alert('konfirmasi Password tidak sesuai ');
				  </script>";
				  return false;
		}

		//enkripsi password
		$Password = Password_hash($Password, PASSWORD_DEFAULT); //PASSWORD_DEFAULT UNTUK MENGACAK PASSWORD MEMAKAI ALGORITMA DARI PHP

		//tambahkan user baru ke databases
		mysqli_query($conn,"INSERT INTO users VALUES('', '$Username','$Password')");
		return mysqli_affected_rows($conn); 

	}
 ?>
<?php
	class mobil{
		var $warna;
		var $merk;
		var $harga;

		//pembuatan construct
		function __construct(){
			$this->warna = "Biru";
			$this->merk  = "BMW";
			$this->harga = "10000"; 
		}

		//pembuatan method
		function gantiwarna($warnabaru){
			$this->warna = $warnabaru;
		}

		//pembuatan method
		function tampilwarna(){
			echo "warna mobilnya : ".$this->warna;
		}
	} // tutup class

$a = new mobil(); //pembuatan objek baru dari class mobil
$b = new mobil(); 
	echo "<b>Mobil pertama </b><br>";
	 	$a -> tampilwarna();
	echo "<br>mobil pertama ganti warna<br>";
		$a -> gantiwarna("merah");
		$a -> tampilwarna();

	//
	echo "<br><b>Mobil Kedua</b><br>";
		$b->gantiwarna("hijau");
		$b->tampilwarna();
?>
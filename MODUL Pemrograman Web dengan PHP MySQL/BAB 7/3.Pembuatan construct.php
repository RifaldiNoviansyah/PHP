<?php	
	class mobil{
		var $warna;
		var $merk;
		var $harga;

		//pembuatan construct
		function __construct(){
			$this->warna = "biru";
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
	}
?>
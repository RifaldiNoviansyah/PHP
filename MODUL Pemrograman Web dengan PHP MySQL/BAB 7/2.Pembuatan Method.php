<?php
	class Mobil{
		var $warna = "biru";
		var $merk  = "BMW";
		var $harga = "1000000";

		//method gantiwarna
		function gantiwarna ($warnabaru){
			$this ->warna = $warnabaru;
		}

		//method tampilkan is variabel warna
		function tampilwarna(){
			echo "warna mobilnya setelah di ganti : ".$this ->warna;
		}
	}
?>
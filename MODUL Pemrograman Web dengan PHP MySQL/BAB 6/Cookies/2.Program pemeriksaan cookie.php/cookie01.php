<?php
	$value  = "Mobley";
	$value2 = "Trenton";

	setcookie("username",$value);
	setcookie("namalengkap",$value2, time()+3600); /*expire in 1 hour */

	echo "<h1>ini halaman pengesetan cookie</h1>";
	echo "<h2>klik <a href='cookie02.php'>disni </a> untuk pemriksaan cookies</h2>";
?>
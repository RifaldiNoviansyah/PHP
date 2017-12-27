<?php
	include "5.Program class untuk membuat sebuah form inputan sederhana.php";

	echo "<html>
			<head>
				<title>Mahasiswa</title>
			</head>
				<body>";
					$form = new form("","input form");
					$form->addField ("txtnim","nim");
					$form->addField ("txtnama","nama");
					$form->addField ("txtalamat","alamat");

					echo "<h3>Silahkan isi form berikut ini :</h3>";
					$form->displayform();
				

				echo "</body></html>";
?>
<?php
	$number = 1234.56;
	echo "number format berfungsi untuk mengatur tampilan angka<br><br>";
	//englis notation(default)
	$englis_format_number = number_format($number);
	echo "<br>".$englis_format_number; //1,235

	//french notation
	$nombre_format_francis = number_format($number, 2, ',','');
	echo "<br>".$nombre_format_francis; //1 234,56

	//indonesia notation
	$format_indonesia = number_format($number, 2, ', ', '.');
	echo "<br>".$format_indonesia; //1.234,56

	$number = 1234.5678;
	//english notation without thousands seperator
	$englis_format_number = number_format($number,2,'.', '');
	echo "<br>".$englis_format_number; //123.57

?>
<?php
	$str  ="is youre name O'mobley ?";
	$str2 =addslashes($str);
	$str3 =stripslashes($str2);

	echo "<b>String aslis</b>.$str";
	echo "<br><b>addslashes()</b> : $str2";
	echo "<br><font color='red'>menambahkan backslashes (\) di setiap tanda kutip (quote)dalam string.<br></font>";
	echo "<br><b>stripslashes()</b> : $str3";
	echo "<br><font color='red'>menghilangkan backslashes (\) dalam string.</font>";
?>

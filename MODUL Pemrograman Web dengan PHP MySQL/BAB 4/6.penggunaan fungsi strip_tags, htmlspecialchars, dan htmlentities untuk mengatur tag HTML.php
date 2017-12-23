<?php
	$str = "<b><u>everything i do, i do it for you</u></b>";

	echo $str."<br>";
	//no tag html
	echo strip_tags ($str)."<br>";
	echo "fungsi strip_tags akan menghilngkan semua tag HTML <br>";
	//allow tag <u>
	echo strip_tags ($str,"<u>")."<br>";
	echo "fungsi strip_tags dengan tambahan parameter u akan menghilangkan semua tag HTML kecuali tag u <br>"; 
	//tampil apa adanya
	echo htmlspecialchars ($str)."<br>";
	echo "htmlspecialchars dan htmlentities berfungsi memunculkan tag html <br>";
	//tampil apa adanya
	echo htmlentities($str);
?>
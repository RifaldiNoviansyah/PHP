<?php
	$text = "teh quick brown fox jumped over the lazy dog.";
	$newtext = wordwrap($text, 15, "<br>");

	echo $text."<br><br>";
	echo $newtext;
	echo "<br>fungsi wordwrap adalah untuk memotong sejumlah karakter string disini di set setiap 15 karakter";
?>
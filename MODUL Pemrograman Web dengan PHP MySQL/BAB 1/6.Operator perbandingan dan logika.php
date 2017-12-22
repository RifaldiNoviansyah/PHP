<?php
	$a = 5;
	$b = 4;

	echo "$a == $b : ".($a == $b); //sama dengan 
	echo "<br> $a != $b : ".($a != $b); //tidak sama dengan
	echo "<br> $a >  $b : ".($a > $b); // lebih besar
	echo "<br> $a <  $b : ".($a < $b); //lebih kecil
	echo "<br> ($a != $b) &&  ($a >  $b) : ".(($a != $b) && ($a >  $b)); //TRUE jika $a dan $b TRUE
	echo "<br> ($a != $b) ||  ($a >  $b) : ".(($a != $b) || ($a >  $b)); //TRUE jika $a dan/atau $b TRUE
?>
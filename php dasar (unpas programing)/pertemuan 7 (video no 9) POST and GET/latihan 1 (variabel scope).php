<?php 
//variabel scope /lingkup variabel

$x = 5;  //varaibel local
//echo  $x; //tampilkan variabel local

function tampilx(){
	//echo $x; //x tidak bisa di panggil karena di luar function 
	
	//maka untuk bisa memanggil variabel x di gunakan gloab
	global $x;
	echo $x;
}
tampilx();


//superglobal semuanya merupakan array associatve
echo "<br>";
var_dump($_GET); 
echo "<br>";
var_dump($_POST);
echo "<br>";
var_dump($_REQUEST);
echo "<br>";
var_dump($_SESSION);
echo "<br>";
var_dump($_COOKIE);
echo "<br>";
var_dump($_SERVER);	
echo "<br>";
var_dump($_ENV);
?>



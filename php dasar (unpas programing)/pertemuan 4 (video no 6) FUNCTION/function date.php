<?php 
	echo "HARI";
	print("<br>");
	echo date("l"); //hari dalam karta
	echo date("d"); //hari dalam angka
 	print("<br>");
 	print("<br>");
 	echo "BULAN";
 	print("<br>");
	echo date("m"); //bulan dalam angka
	echo date("M"); //bulan dalam kata
	print("<br>");
	print("<br>");
	echo "GABUNGAN";
	print("<br>");
	echo date("l, d-M-Y");

	print("<br>");
	echo "Waktu UNIX pertama kali waktu dimulai sampai sekarang dengan derik = ".time();

	print("<br>");
	echo "100 hari ke depan ".date("d M Y", time()+60*60*24*100); //60 detik 60 menit 24 jam  100 hari);
 	print("<br>");
	echo "100 hari ke belakang ".date("d M Y", time()-60*60*24*100); //60 detik 60 menit 24 jam  100 hari);
 	print("<br>");
 	//mktime(0,0,0,0,0,0);
 	//(jam,menit,detik,bulan,tanggal,tahun);
 	echo "hari saya lahir = ".date("l M Y", mktime(0,0,0,11,10,1997));
 ?>
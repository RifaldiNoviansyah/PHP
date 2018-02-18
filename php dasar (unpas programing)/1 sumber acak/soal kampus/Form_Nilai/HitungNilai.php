<!DOCTYPE html>
<html>
<head>
	<title>Perhitungan Nilai</title>
</head>
<body>
	<?php 
		//AWAL VALIDASI
		$ada_error=false;
		$pesan_error="Kesalahan Yang Terjadi : <br>";

		$nim=trim($_POST["nim"]);
		$nama=trim($_POST["nama"]);
		$tanggal=trim($_POST["tanggal"]);
		$bulan=trim($_POST["bulan"]);
		$tahun=trim($_POST["tahun"]);
		$tugas=trim($_POST["tugas"]);
		$uts=trim($_POST["uts"]);
		$uas=trim($_POST["uas"]);

		//strln digunakan untuk menghitung jumlah string atau karakter
		if (strlen($nim)<8) {
			$pesan_error=$pesan_error."- Panjang NIM harus 8 huruf<br>";
			$ada_error=true;
		}
		if (!mb_ereg("[0-9]{8}",$nim)) {
			$pesan_error.="- NIM Hanya boleh angka<br>";
			$ada_error=true;
		}
		$jenjang=substr($nim,0,3);
		if (($jenjang!="101")and($jenjang!="107")and($jenjang!="122")) {
			$pesan_error=$pesan_error."-3 huruf pertama unutk IF harus 101 [S1], 107[D3], 122[d1]<br>";
			$ada_error=true;
		}
		$nama=trim($nama);
		if (strlen($nama)<2) {
			$pesan_error.=$pesan_error."- Nama Minimal 2 Huruf<br>";
			$ada_error=true;
		}
		if (($tanggal==0)or($bulan==0)or($tahun==0)) {
			$pesan_error.=$pesan_error."- Tanggal Lahir Harus Di isi lengkap<br>";
			$ada_error=true;
		}
		if (!checkdate($bulan,$tanggal,$tahun)) {
			$pesan_error.="- Tanggal Lahir tidak sah<br>";
			$ada_error=true;
		}
		if (!mb_ereg("[0-9]{0,3}",$tugas)) {
			$pesan_error.="- Nilai Tugas Hanya  boleh angka<br>";
			$ada_error=true;
		}
		if (($tugas<0)||($tugas>100)) {
			$pesan_error.="- Nilai Tugas Harus 0 s/d 100<br>";
			$ada_error=true;
		}
		if (!mb_ereg("[0-9]{1,3}",$uts)) {
			$pesan_error.="- Nilai Uts hanya boleh angka<br>";
			$ada_error=true;
		}
		if(($uts<0)||($uts>100)){
			$pesan_error.="- Nilai Uts Harus 0 s/d 100<br>";
			$ada_error=true;
		}
		if (!mb_ereg("[0-9]{1,3}",$uas)) {
			$pesan_error.="- Nilai Uas hanya boleh angka<br>";
			$ada_error=true;
		}
		if(($uas<0)||($uas>100)){
			$pesan_error.="- Nilai Uas Harus 0 s/d 100<br>";
			$ada_error=true;
		}
		if ($ada_error) {
			echo "Proses Perhitungan dibatalkan. Data yang and isikan 
			      tidak valid.<br>$pesan_error<br>
			      <a href='javascript:history.back();'>kembali</a>";
		}
	?>
	<table border="1">
		<tr>
			<td colspan="2"  align="center" bgcolor="silver">Perhitungan Silver</td>
		</tr>
		<tr>
			<td>nim</td>
			<td><?= $nim; ?></td>
		</tr>
		<tr>
			<td>nama</td>
			<td><?= $nama; ?></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td><?= "$tanggal - $bulan - $tahun"; ?></td>
		</tr>
		<tr>
			<td colspan="2" align="center" bgcolor="silver">Nilai</td>
		</tr>
		<tr>
			<td>Tugas</td>
			<td><?= number_format($tugas,2); ?></td>
		</tr>
		<tr>
			<td>uts</td>
			<td><?= number_format($uts,2); ?></td>
		</tr>
		<tr>
			<td>uas</td>
			<td><?= number_format($uas,2); ?></td>
		</tr>
		<tr>
			<td>Nilai Akhir</td>
			<td><?php 
				 	$na =0.2*$tugas+0.3*$uts+0.5*$uas;
				 	echo number_format($na,2);
				 ?>		 
			</td>
		</tr>
	</table>
</body>
</html>

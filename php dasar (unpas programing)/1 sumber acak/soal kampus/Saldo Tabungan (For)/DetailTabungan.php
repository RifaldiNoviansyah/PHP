<!DOCTYPE html>
<html>
<head>
	<title>Tabungan</title>
</head>
<body>
	<form method="POST" action="<?= $_SERVER['PHP_SELF']; ?>">
	<center>
	<table border="1">
		<tr>
			<td>Saldo awal</td>
			<td><input type="text" name="Saldo"></td>
		</tr>
		<tr>
			<td>Bunga(%)</td>
			<td><input type="text" name="Bunga"></td>
		</tr>
		<tr>
			<td>Jangka Waktu</td>
			<td>
				<input type="text" name="JangkaWaktu">
			</td>
		</tr>
		<tr>
			<td>
				<center>
					<button type="submit" name="submit">submit</button>
					<button type="reset">reset</button>
				</center>
		    </td>
		</tr>
	</table>

		</form>
	</center>
</body>
</html>

<?php 
	if (isset($_POST['submit'])) {
		//deklarasi variabel
		$Saldo_Awal = 0;
		$Bunga = 0;
		$JangkaWaktu = 0;
		$hasil_Bunga = 0;

			//AWAL VALIDASI
		$ada_error=false;
		$pesan_error="Kesalahan Yang Terjadi : <br>";

		//input atau ambil data dari html
		$Saldo_Awal =trim($_POST['Saldo']);
		$Bunga_Awal =trim($_POST['Bunga']);
		$JangkaWaktu =trim($_POST['JangkaWaktu']);
		$Bunga = $Bunga_Awal / 100;
		//buat inisiali variabel kesalahan
		if (!mb_ereg("[0-9]",$Saldo_Awal)) {
			$pesan_error.="- Saldo_Awal Hanya boleh angka<br>";
			$ada_error=true;
		}
		// if (!mb_ereg("[0-9]",$Bunga)) {
		// 	$pesan_error.="- Bunga Hanya boleh angka<br>";
		// 	$ada_error=true;
		// }
		if (!mb_ereg("[0-9]",$JangkaWaktu)) {
			$pesan_error.="- JangkaWaktu Hanya boleh angka<br>";
			$ada_error=true;
		}
		if ($ada_error) {
			echo "Proses Perhitungan dibatalkan. Data yang and isikan 
			      tidak valid.<br>$pesan_error<br>";
		}

	}
?>

<?php if (isset($_POST['submit'])) { ?>
		
		<center>
			<h2>Detail Tabungan</h2>
			<table border="1">
			<tr>
				<th>Bulan</th>
				<th>Saldo</th>
			</tr>
			<?php 
				$Saldo = $Saldo_Awal;
				for ($i=1; $i < $JangkaWaktu+1; $i++) { 
					$hasil_Bunga = $Bunga * $Saldo;
					$Saldo = $Saldo + $hasil_Bunga;
			 ?>
			 <tr>
			 	<td><?php echo $i; ?></td>
			 	<td align="right">Rp. <?= number_format($Saldo,0,",",".") ?></td>
			 </tr>
			 <?php } //tutup for ?>
			</table>
		</center>
<?php } ?>

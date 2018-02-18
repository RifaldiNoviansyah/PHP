<!DOCTYPE html>
<html>
<head>
	<title>Perhitungan Nilai</title>
</head>
<body>
	<form method="POST" action="HitungNilai.php">
		<table border="1">
			<tr>
				<td colspan="2" align="center" bgcolor="silver">
					Perhitungan Nilai
				</td>
			</tr>
			<tr>
				<td>Nim</td>
				<td><input type="text" name="nim" size="9" maxlength="8"></td>
			</tr>
			<tr>
				<td>nama</td>
				<td><input type="text" name="nama" size="25" maxlength="30"></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>
					<select name="bulan">
						<option value="0">Pilih</option>
						<option value="1">Januari</option>
						<option value="2">Feruari</option>
						<option value="3">Maret</option>
						<option value="4">April</option>
						<option value="5">Mei</option>
						<option value="6">Juni</option>
						<option value="7">Juli</option>
						<option value="8">Agustus</option>
						<option value="9">september</option>
						<option value="10">Oktober</option>
						<option value="11">November</option>
						<option value="12">Desember</option>
					</select>
					<select name="tanggal">
						<option value="0">pilih</option>
						<?php 
							for ($tanggal=30;$tanggal>=1;$tanggal--)
						 	echo "<option>$tanggal</option>";
						 ?>
					</select>
					<select name="tahun">
						<option value="0">pilih</option>
						<?php 
							for ($thn=2000;$thn>=1950;$thn--)
						 	echo "<option>$thn</option>";
						 ?>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center" bgcolor="silver">Nilai</td>
			</tr>
			<tr>
				<td>Tugas</td>
				<td><input type="text" name="tugas" size="4" maxlength="3"></td>
			</tr>
			<tr>
				<td>UTS</td>
				<td><input type="text" name="uts" size="4" maxlength="3"></td>
			</tr>
			<tr>
				<td>UAS</td>
				<td><input type="text" name="uas" size="4" maxlength="3"></td>
			</tr>
			<tr bgcolor="silver">
				<td>&nbsp;</td>
				<td><input type="submit" name="submit" value="Hitung"></ins></td>
			</tr>
		</table>
	</form>

</body>
</html>
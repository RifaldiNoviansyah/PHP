<!DOCTYPE html>
<html>
<head>
  <title>Penyelesaian Studi Kasus 11d</title>
</head>
<body>
  <center>
  <h1>Hitung Barang</h1>
  <form name="ProsesHitung" method="POST" action="Hitung_Barang.php">
    <table  border="1" align="center">
      <tr>
        <td>Kode Barang</td>
        <td><select name="Pilihan" id="Pilihan">
            <option> --  SILAHKAN PILIH BARANG -- </option>
            <option value="A01">Speaker</option>
            <option value="B02">Mouse</option>
            <option value="C03">Harddisk</option>
            <option value="D04">Mouse Pad</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>Jumlah Beli</td>
        <td><input type="text" name="JumlahBeli" id="JumlahBeli"></td>
      </tr>
      <tr>
        <td>Status</td>
        <td>
          <input type="radio" name="Status" id="Member"     value="Member">Member <br>
          <input type="radio" name="Status" id="Non_Member" value="Non_Member">Bukan Membar
        </td> 
      </tr>
      <tr>
        <td>Kota Kirim</td>
        <td>
            <select name="Kota" id="Kota">
              <option> --  SILAHKAN PILIH KOTA -- </option>
              <option value="Jakarta">Jakarta</option>
              <option value="Bandung">Bandung</option>
              <option value="Padang">Padang</option>
              <option value="Yogyakarta">Yogyakarta</option>
            </select>
        </td>
      </tr>
      <tr>
        <td>
          <button type="submit" name="submit">Hitung</button>
        </td>
        <td>
          <button type="reset">Reset</button>
        </td>
      </tr>
    </table>
  </form>
    <br>
    <br>
    <!-- PROSES HITUNG -->
    <?php 
    if (isset($_POST["submit"])) {
       $Pilihan          = $_POST["Pilihan"];
        $jumlah          = $_POST["JumlahBeli"];
        $Kota            = $_POST["Kota"];
        $Status          = $_POST["Status"];
        $DiskonMember    =0.1;

      //harga ongkos kirim
      if ($Kota=="Jakarta") {
          $NamaKota = "Jakarta";
          $OngkosKirim= 10000;
      }elseif ($Kota=="Bandung") {
          $NamaKota = "Bandung";
          $OngkosKirim = 12500; 
      }elseif ($Kota=="Padang") {
          $NamaKota = "Padang";
          $OngkosKirim = 30000; 
      }elseif ($Kota=="Yogyakarta") {
          $NamaKota = "Yogyakarta";
          $OngkosKirim = 20000; 
      }

      //harga barang
      if ($Pilihan=="A01") {
          $NamaBarang = "Speaker";
          $HargaBarang= 50000;
      }elseif ($Pilihan=="B02") {
          $NamaBarang  = "Mouse";
          $HargaBarang = 25000; 
      }elseif ($Pilihan=="C03") {
          $NamaBarang  = "Harddisk";
          $HargaBarang = 750000; 
      }elseif ($Pilihan=="D04") {
          $NamaBarang  = "Mouse Pad";
          $HargaBarang = 5000; 
      }

        $Subtotal = $HargaBarang * $jumlah;
          if ($Subtotal >= 100000) {
              if ($Status=="Member") {
                  $Diskon       = $Subtotal * 0.15;
                  $DiskonStatus = $Subtotal * $DiskonMember;
                  $TotalDiskon  = $Diskon   + $DiskonStatus;
                  $HargaTotal   = $Subtotal - $Diskon;
                  $TotalBayar   = $Subtotal - $TotalDiskon + $OngkosKirim;
              }elseif($Status=="Non_Member"){
                  $Diskon       = $Subtotal * 0.15;
                  $DiskonStatus = 0;
                  $TotalDiskon  = $Diskon;
                  $HargaTotal   = $Subtotal - $Diskon;
                  $TotalBayar   = $Subtotal - $TotalDiskon + $OngkosKirim;
              }
          }elseif ($Subtotal >= 50000) {
               if ($tatus=="Member") {
                  $Diskon       = $Subtotal * 0.1;
                  $DiskonStatus = $Subtotal * $DiskonMember;
                  $TotalDiskon  = $Diskon   + $DiskonStatus;
                  $HargaTotal   = $Subtotal - $Diskon;
                  $TotalBayar   = $Subtotal - $TotalDiskon + $OngkosKirim;
              }else{
                  $Diskon       = $Subtotal * 0.1;
                  $TotalDiskon  = $Diskon;
                  $HargaTotal   = $Subtotal - $Diskon;
                }
          }elseif ($Subtotal >= 25000) {
              if ($tatus=="Member") {
                  $Diskon       = $Subtotal * 0.05;
                  $DiskonStatus = $Subtotal * $DiskonMember;
                  $TotalDiskon  = $Diskon   + $DiskonStatus;
                  $HargaTotal   = $Subtotal - $Diskon;
                  $TotalBayar   = $Subtotal - $TotalDiskon + $OngkosKirim;
              }else{
                  $Diskon       = $Subtotal * 0.05;
                  $TotalDiskon  = $Diskon;
                  $HargaTotal   = $Subtotal - $Diskon;
                  $TotalBayar   = $Subtotal - $TotalDiskon + $OngkosKirim;
              }
          }elseif ($Subtotal < 25000) {
              if ($tatus=="Member") {
                  $DiskonStatus = $Subtotal * $DiskonMember;
                  $TotalDiskon  = $Diskon   + $DiskonStatus;
                  $HargaTotal   = $Subtotal - $Diskon;
                  $TotalBayar   = $Subtotal - $TotalDiskon + $OngkosKirim;
              }else{
                  $Diskon       = $Subtotal * 0;
                  $TotalDiskon  = $Diskon;
                  $HargaTotal   = $Subtotal - $Diskon;
                  $TotalBayar   = $Subtotal - $TotalDiskon + $OngkosKirim;
              }
          }      
    }
    ?>
    <!-- TAMPILKAN HASIL HITUNG -->
    <table border="1">
      <tr>
        <td>Nama Barang</td>
        <td><?= $NamaBarang; ?></td>
      </tr>
      <tr>
        <td>Harga Satuan</td>
        <td><?= $HargaBarang; ?></td>
      </tr>
      <tr>
        <td>Jumlah Beli</td>
        <td><?= $jumlah; ?></td>
      </tr>
      <tr>
        <td>Sub Total</td>
        <td><?= $Subtotal; ?></td>
      </tr>
      <tr>
        <td>Status</td>
        <td><?= $Status; ?></td>
      </tr>
      <tr>
        <td>Diskon Pembelian</td>
        <td><?= $Diskon; ?></td>
      </tr>
      <tr>
        <td>Diskon Status</td>
        <td><?= $DiskonStatus; ?></td>
      </tr>
      <tr>
        <td>Total Diskon</td>
        <td><?= $TotalDiskon; ?></td>
      </tr>
      <tr>
        <td>Ongkos Kirim</td>
        <td><?= $OngkosKirim."(".$Kota.")"; ?></td>
      </tr>
      <tr>
        <td>Total Bayar</td>
        <td><?= $TotalBayar; ?></td>
      </tr>
    </table>
  </center>
</body>
</html>
<?php
 include "../koneksi.php";
 
if (isset ($_POST["daftar"])){
    $nik = $_POST["nik"];
    $nama = $_POST["nama"];
    $alamat =  $_POST["alamat"];
    $ttl =  $_POST["ttl"];
    $telp =  $_POST["telp"];
    $sql =  "INSERT INTO `guru` (`nik`, `nama`, `alamat`, `ttl`, `telp`) VALUES ('$nik','$nama','$alamat','$ttl','$telp')";

    $query =  mysqli_query($koneksi,$sql);
}
?>

 <table border="1">
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/siswa.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="data_guru.php" method="POST">
            <div class="form-group">
                <label>NIK</label>
                <input type="number" name="nik" id="nik" required>
                <br>
            </div>
            <div class="form-group">
                <label>NAMA</label>
                <input type="text" name="nama" id="nama" required>
                <br>
            </div>
            <div class="form-group">
                <label>ALAMAT</label>
                <input type="text" name="alamat" id="alamat">
            </div>
            <div class="form-group">
                <label>ttl</label>
                <input type="date" name="ttl" id="ttl" required>
                <br>
            </div>
            <div class="form-group">
                <label>tlp</label>
                <input type="number" name="telp" id="telp" required>
                <br>
            </div>
            <button type="submit" name="daftar">simpan</button>

        </form>


    </div>
 
</body>
</html>
  </table>
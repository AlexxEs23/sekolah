<?php
 include "../koneksi.php";
echo"<h2>Tabel Siswa</h2>";
 
if (isset ($_POST["daftar"])){
    $nis = $_POST["nis"];
    $nama = $_POST["nama"];
    $kelas =  $_POST["kelas"];
    $alamat =  $_POST["alamat"];
    $ttl =  $_POST["ttl"];
    $tlp =  $_POST["telp"];
    $sql =  "INSERT INTO `siswa` (`nis`, `nama`, `id_kelas`, `alamat`, `ttl`, `tlp`) VALUES ('$nis','$nama','$kelas','$alamat','$ttl','$tlp')";
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
        <form action="input_data_siswa.php" method="POST">
            <div class="form-group">
                <label>nis  </label>
                <input type="number" name="nis" id="nis" required>
                <br>
            </div>
            <div class="form-group">
                <label>NAMA</label>
                <input type="text" name="nama" id="nama" required>
                <br>
            </div>
            <div class="form-group">
                <label>ID_KELAS</label>
                <input type="text" name="kelas" id="kelas" required>
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
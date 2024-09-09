<?php
 include "../koneksi.php";
 
if (isset ($_POST["daftar"])){
    $id = $_POST["id"];
    $mapel = $_POST["mapel"];
    $sql =  "INSERT INTO mapel (id, mapel) VALUES ('$id','$mapel')";

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
        <form action="input_data_mapel.php" method="POST">
            <div class="form-group">
                <label>id</label>
                <input type="number" name="id" id="id" required>
                <br>
            </div>
            <div class="form-group">
                <label>mapel</label>
                <input type="text" name="mapel" id="mapel" required>
                <br>
            </div>
            <button type="submit" name="daftar">simpan</button>
            <a href="mapel.php">kembali</a>

        </form>


    </div>

 
</body>
</html>
  </table>
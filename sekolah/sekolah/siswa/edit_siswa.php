<?php
include "../koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nis = $_POST['nis'];
    $nama_siswa = $_POST['nama_siswa'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];
    $ttl = $_POST['ttl'];
    $telp = $_POST['telp'];

    $query = "UPDATE siswa SET nama='$nama_siswa', alamat='$alamat', ttl='$ttl', tlp='$telp' WHERE nis='$nis'";
    
    if (mysqli_query($koneksi, $query)) {
        header("Location: data_siswa.php");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}

if (isset($_GET['nis'])) {
    $nis = $_GET['nis'];
    $query = "SELECT * FROM siswa WHERE nis='$nis'";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Siswa</title>
    <link rel="stylesheet" href="/css/edit.css">
</head>
<body>
    <div class="container">
        <h1 class="title">Edit Data Siswa</h1>
        <form class="edit-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <input type="hidden" name="nis" value="<?php echo $row['nis']; ?>">
            
            <div class="form-group">
                <label for="nama_siswa">Nama Siswa:</label>
                <input type="text" id="nama_siswa" name="nama_siswa" value="<?php echo $row['nama']; ?>" required>
                </br>
            </div>
            
            <div class="form-group">
                <label for="kelas">Kelas:</label>
                <input type="number" id="kelas" name="kelas" value="<?php echo $row['id_kelas']; ?>" required>
                </br>
            </div>
            
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" id="alamat" name="alamat" value="<?php echo $row['alamat']; ?>" required>
                </br>
            </div>
            
            <div class="form-group">
                <label for="ttl">TTL:</label>
                <input type="date" id="ttl" name="ttl" value="<?php echo $row['ttl']; ?>" required>
                </br>
            </div>
            
            <div class="form-group">
                <label for="telp">Telepon:</label>
                <input type="number" id="telp" name="telp" value="<?php echo $row['tlp']; ?>" required>
                </br>
            </div>
            
            <input type="submit" value="Update" class="submit-btn">
        </form>
    </div>
</body>
</html>
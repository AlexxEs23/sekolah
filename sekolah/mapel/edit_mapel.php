<?php
include "../koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_guru = $_POST['id_guru'];
    $nama_guru = $_POST['nama_guru'];
    $alamat = $_POST['alamat'];
    $ttl = $_POST['ttl'];
    $telp = $_POST['telp'];

    $query = "UPDATE guru SET nama='$nama_guru', alamat='$alamat', ttl='$ttl', telp='$telp' WHERE id_guru='$id_guru'";
    
    if (mysqli_query($koneksi, $query)) {
        header("Location: data_guru.php");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($koneksi);
    }
}

if (isset($_GET['id_guru'])) {
    $id_guru = $_GET['id_guru'];
    $query = "SELECT * FROM guru WHERE id_guru='$id_guru'";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Guru</title>
    <link rel="stylesheet" href="/css/edit.css">
</head>
<body>
    <div class="container">
        <h1 class="title">Edit Data Guru</h1>
        <form class="edit-form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <input type="hidden" name="id_guru" value="<?php echo htmlspecialchars($row['id_guru']); ?>">
            
            <div class="form-group">
                <label for="nama_guru">Nama Guru:</label>
                <input type="text" id="nama_guru" name="nama_guru" value="<?php echo htmlspecialchars($row['nama']); ?>" required>
            </div>
            
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" id="alamat" name="alamat" value="<?php echo htmlspecialchars($row['alamat']); ?>" required>
            </div>
            
            <div class="form-group">
                <label for="ttl">TTL:</label>
                <input type="text" id="ttl" name="ttl" value="<?php echo htmlspecialchars($row['ttl']); ?>" required>
            </div>
            
            <div class="form-group">
                <label for="telp">Telepon:</label>
                <input type="text" id="telp" name="telp" value="<?php echo htmlspecialchars($row['telp']); ?>" required>
            </div>
            
            <input type="submit" value="Update" class="submit-btn">
        </form>
    </div>
</body>
</html>

<?php
    include "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="/css/siswa.css">
</head>
<body>
    <h1>Data Siswa</h1>
    <table border="1">
        <thead>
            <tr>
                <th>NIS</th>
                <th>Nama Siswa</th>
                <th>Kelas</th>
                <th>Alamat</th>
                <th>TTL</th>
                <th>Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            
            <?php
            $query = "SELECT * FROM siswa";
            $result = mysqli_query($koneksi, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['nis'] . "</td>";
                echo "<td>" . $row['nama'] . "</td>";
                echo "<td>" . $row['id_kelas'] . "</td>";
                echo "<td>" . $row['alamat'] . "</td>";
                echo "<td>" . $row['ttl'] . "</td>";
                echo "<td>" . $row['tlp'] . "</td>";
                echo "<td>
                        <a href='edit_siswa.php?nis=" . $row['nis'] . "' class='edit-btn'>Edit</a>
                        <a href='hapus_siswa.php?nis=" . $row['nis'] . "' class='delete-btn' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>Hapus</a>
                      </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <a href="input_data_siswa.php" class="add-btn">Tambah Data</a>
</body>
</html>
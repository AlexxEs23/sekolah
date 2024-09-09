<?php
include "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Guru</title>
    <link rel="stylesheet" href="/css/siswa.css">
</head>
<body>
    <h1>Mapel</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Mapel</th>
               
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM mapel";
            $result = mysqli_query($koneksi, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['id']) . "</td>";
                echo "<td>" . htmlspecialchars($row['mapel']) . "</td>";
             
                echo "<td>
                        <a href='edit_mapel.php?id=" . urlencode($row['id']) . "' class='edit-btn'>Edit</a>
                        <a href='hapus.php?id=" . urlencode($row['id']) . "' class='delete-btn' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>Hapus</a>
                      </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <a href="input_data_mapel.php" class="add-btn">Tambah Data</a>
</body>
</html>

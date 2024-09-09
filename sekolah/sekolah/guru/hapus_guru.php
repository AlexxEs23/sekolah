<?php       
    include "../koneksi.php" ;

    if (isset($_GET['id_guru'])) {
        $id_guru = $_GET['id_guru']; // Gunakan $id_guru, bukan $nis

        // Pastikan id_guru di-escape untuk mencegah SQL Injection
        $id_guru = mysqli_real_escape_string($koneksi, $id_guru);

        $query = "DELETE FROM guru WHERE id_guru='$id_guru'";

        if (mysqli_query($koneksi, $query)) {
            header("Location: data_guru.php"); // Perbaiki sintaks header
            exit();
        } else { 
            echo "Error deleting record: " . mysqli_error($koneksi);
        }
    } else {
        echo "guru tidak ditemukan";
    }
?>

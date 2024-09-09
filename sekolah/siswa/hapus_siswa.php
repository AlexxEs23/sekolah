<?php       
    include "../koneksi.php" ;

    if (isset($_GET['nis'])) {
        $nis = $_GET['nis'];

        $query = "DELETE FROM siswa WHERE nis='$nis' ";

        if (mysqli_query($koneksi, $query)) {
            header("location: data_siswa.php");
            exit();
        }
        else { 
            echo"Error deleting record" . mysqli_error( $koneksi );
        }

    }
    else {
        echo "nis tidak ditemukan";
    }
?>
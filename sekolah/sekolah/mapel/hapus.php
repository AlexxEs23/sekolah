<?php       
    include "../koneksi.php" ;

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $query = "DELETE FROM mapel WHERE id='$id' ";

        if (mysqli_query($koneksi, $query)) {
            header("location: mapel.php");
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
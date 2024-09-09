<?php
include "koneksi.php";
?>
<table border="1"> 
<tr>
    <td>Nomor</td>
    <td>mapel</td>
    <td>Guru</td>
    <td>Jumlah</td>
    <td>Kelas</td>
</tr>

<?php
$data= mysqli_query($koneksi,"select * from mapel");
 while ($tampil=mysqli_fetch_array($data)) {
    ?>
<tr>
    <td><?php echo $tampil['id_mapel'] ?></td>
    <td><?php echo $tampil['nama_mapel'] ?></td>
    <td><?php echo $tampil['guru_mapel'] ?></td>
    <td><?php echo $tampil['jumlh_mapel'] ?></td>
    <td<?php echo $tampil['id_class'] ?></tr>
</tr>
<?php
 }
?>
</table>
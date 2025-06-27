<?php
 
include 'include/koneksi.php';
if (isset($_GET['id'])) {
    // sementara dinonaktifkan
    // mysqli_query($koneksi, "DELETE FROM tabel_biodata WHERE id = '$_GET[id]'");
   mysqli_query($sambungan, "DELETE FROM pemesanan WHERE id= '$_GET[id]'");
}
header("location:daftar-pesanan.php")
?>
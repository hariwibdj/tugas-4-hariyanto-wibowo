<?php
include "include/koneksi.php";

$id = $_POST['id'];

$nama         = $_POST['nama'];
$nohp         = $_POST['nohp'];
$tanggal 	  = $_POST['tanggal'];
$durasi       = $_POST['durasi'];
$peserta      = $_POST['peserta'];
$penginapan   = $_POST['penginapan'];
$transportasi = $_POST['transportasi'];
$makan        = $_POST['makanan'];
$hargapaket   = $_POST['hargapaket'];
$jumlah       = $_POST['jumlah'];


// nama,nohp,tanggal,durasi,peserta,hargapaket,penginapan,transportasi,makanan,jumlah
// tanggal = '$tanggal',
$sql_update = "UPDATE pemesanan SET nama = '$nama', nohp = '$nohp',  durasi ='$durasi', peserta = '$peserta', hargapaket ='$hargapaket',penginapan = '$penginapan',transportasi = '$transportasi',makanan = '$makan', jumlah ='$jumlah' where id = '$id'" ;
$update = mysqli_query($sambungan, $sql_update);
if(!$update){
?>

<script type="text/javascript">
alert("periksa lagi isian data");
window.history.back();
</script>
<?php

}
else
{
?>
<script type="text/javascript">
alert("Data dengan nama = <?php echo $nama ; ?> Sudah Terupdate");
window.location.href = "daftar-pesanan.php";
</script>
<?php
}
?>
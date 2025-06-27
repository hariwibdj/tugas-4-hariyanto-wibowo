<?php
include "include/koneksi.php";
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


$new_file = fopen('dbpemesanan.txt', 'a+') or die('Tidak bisa membuka file!');
 $text = '</br>'.$_POST['nama']."-".$_POST['nohp']."-".$_POST['tanggal']."-".$_POST['durasi']."-".$_POST['peserta']."-".$_POST['penginapan']."-".$_POST['transportasi']."-".$_POST['makanan']."-".$_POST['hargapaket']."-".$_POST['jumlah'];
 fwrite($new_file, $text);
 fclose($new_file);



// $sql_insert = "INSERT INTO pemesanan(nama,nohp,tanggal,duras,peserta,hargapaket,jumlah) VALUES ('$nama','$nohp','$tanggal',$durasi,$peserta,$hargapaket,$jumlah)";
// $simpan = mysqli_query($sambungan, $sql_insert);

// $sql_insert = "INSERT INTO pemesanan(nama,nohp) VALUES ('$nama','$nohp')";
// $simpan = mysqli_query($sambungan, $sql_insert);

$sql_insert = "INSERT INTO pemesanan(nama,nohp,tanggal,durasi,peserta,hargapaket,penginapan,transportasi,makanan,jumlah) VALUES ('$nama','$nohp','$tanggal','$durasi','$peserta','$hargapaket','$penginapan','$transportasi','$makan','$jumlah')";
$simpan = mysqli_query($sambungan, $sql_insert);

 

if(!$simpan){
    ?>
<script type="text/javascript">
alert("periksa lagi image dan ukuran file");
window.history.back();
</script>
<?php

}
else
{
?>
<script type="text/javascript">
alert("Data dengan nama = <?php echo $nama ; ?> Sudah Tersimpan");
window.location.href = "daftar-pesanan.php";
</script>
<?php
}
?>
<?php
$host = "localhost";
$user = "root";
$pwd  = "";
$db   ="dbpariwisata";

$sambungan = mysqli_connect($host, $user, $pwd, $db);
  
if (!$sambungan) //jika tidak berhasil disambungkan
{
    echo "<h1>Sambungan Gagal</h1>";
}


?>
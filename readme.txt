# Paket Wisata - PHP Native Application TA VSGA JWD 2025

## Deskripsi
Aplikasi ini adalah sistem manajemen paket wisata yang dibangun menggunakan PHP native. Fitur utama aplikasi ini meliputi:
- **Pengelolaan Reservasi Paket Wisata (CRUD)**: Pengguna dapat membuat, membaca, memperbarui, dan menghapus reservasi.
- **Reservasi Paket Wisata oleh Pengguna**: Pengguna dapat melakukan reservasi paket wisata.
- **Dashboard Pengguna**: Dashboard untuk manajemen pesanan reservasi.

## Persyaratan Sistem
- PHP versi 8.1 atau lebih tinggi
- Web server (Apache)
- Database MySQL

## Instalasi

### 1. Kloning atau Unduh Aplikasi
- **Kloning repository ini menggunakan Git:**
  ```bash
  git clone https://github.com/Yansa27/PaketWisata.git
  ```
- **Atau unduh ZIP dari repository dan ekstrak di direktori web server Anda.**

### 2. Konfigurasi Database
- **Buat database baru di MySQL untuk aplikasi ini.**
- **Import file `paketwisata.sql` yang ada di dalam folder `database` ke database yang telah dibuat.**
- **Buka file `config/koneksi.php` dan sesuaikan konfigurasi database:**
  ```php
  <?php
   	$host = "localhost";
	$user = "root"; //menyesuaikan database
	$pwd  = ""; //menyesuaikan database
	$db   ="dbpariwisata"; //menyesuaikan database

$sambungan = mysqli_connect($host, $user, $pwd, $db);
  
if (!$sambungan) //jika tidak berhasil disambungkan
{
    echo "<h1>Sambungan Gagal</h1>";
}
?>
  ```

### 3. Jalankan Aplikasi
- Akses aplikasi melalui browser dengan URL yang sesuai, misalnya:
  http://localhost/paketwisata/

## Struktur Direktori dan File

- **login.php**: Halaman login,File untuk memproses login pengguna.
- **register.php**: Halaman registrasi pengguna baru, File untuk memproses registrasi pengguna..
- **logout.php**: File untuk menangani proses logout.
- **/daftarpaket.php**: Halaman untuk mengelola daftar paket wisata.
- **/ubah-data.php**: Halaman untuk mengedit reservasi yang sudah dibuat.
- **hapus-data.php**: File untuk menghapus reservasi yang sudah dibuat.
- **/style.css**: File CSS utama untuk styling aplikasi.
- **/image/**: Direktori untuk menyimpan gambar tambahan yang digunakan dalam aplikasi.
- **Readme.txt**: File ini berisi informasi tentang aplikasi, instalasi, dan penggunaan.

## Kredit
- **Pengembang:** Hariyanto Wibowo([hariwib@darmajaya.ac.id])
- **Framework:** PHP Native (tanpa framework PHP eksternal)
- **Ikon dan Desain:** Bootstrap Icons, FontAwesome, SweetAlert, SB Admin.

## Lisensi
Open Source By @ HARIWIB.COM



link download lewat repositori github :
https://github.com/hariwibdj/tot-web-dasar
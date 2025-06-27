<?php
session_start();
include 'include/koneksi.php';
if (isset($_GET['id'])) {
    $query = "SELECT * FROM pemesanan WHERE id = '$_GET[id]'";
    $data = mysqli_query($sambungan, $query);
    $baris = mysqli_fetch_array($data);
} else {
    echo "ID tidak tersedia!<br /><a href='index.php'>Kembali</a>";
    exit();
}

if ($data === false) {
    echo "Data tidak ditemukan!<br /><a href='index.php'>Kembali</a>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pariwisata Lampung</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css" />

    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/yourkit.js" crossorigin="anonymous"></script>

    <style>
        .background-jumbotron {
            background-image: url('assets/images/prambanan-wendy-winarno-timeiBVLB8E-unsplash.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 400px;
            box-shadow: inset 0 0 0 2000px rgba(0, 0, 0, 0.5);
        }

        .btn-booking {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }

        .img {
            background-size: cover;
            background-position: center;
            height: 250px;
        }

        .parallax-hero {
            background-image: url('assets/images/prambanan-wendy-winarno-timeiBVLB8E-unsplash.jpg');
            min-height: 600px;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            display: flex;
            align-items: center;
            color: #fff;
        }

        .parallax-hero-overlay {
            /* background: rgba(0, 56, 168, 0.55); */
            position: absolute;
            inset: 0;
            z-index: 1;
        }

        .parallax-hero-content {
            position: relative;
            z-index: 2;
            width: 100%;
        }

        .gallery-img {
            transition: transform 0.4s cubic-bezier(.25, .8, .25, 1), box-shadow 0.4s cubic-bezier(.25, .8, .25, 1);
            cursor: pointer;
        }

        .gallery-img:hover,
        .gallery-img:focus {
            transform: scale(1.10) rotate(-2deg);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.25), 0 2px 8px rgba(0, 0, 0, 0.12);
            z-index: 2;
        }

        @media (max-width: 991px) {
            .parallax-hero {
                background-attachment: scroll;
            }
        }
    </style>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Pariwisata Nusantara</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#hero">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="daftar-pesanan.php">Daftar Pesanan</a></li>
                    <?php if (isset($_SESSION['nama'])) { ?>
                        <li class="nav-item"><a class="nav-link" href="logout.php"> <i
                                    class="fas fa-sign-out-alt"></i>Logout</a></li>
                    <?php } else { ?>
                        <li class="nav-item"><a class="nav-link" href="registrasi.php"> <i
                                    class="fas fa-user"></i>Registrasi / Logi </a></li>
                    <?php } ?>

                </ul>
            </div>
        </div>
    </nav>




    <div class="container mt-5 py-5">
        <div class="card">
            <div class="card-header text-center">
                <h2>Update Pesanan</h2>
            </div>
            <div class="card-body">
                <form action="update-pesanan.php" method="post">

                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="namapemesan" class="form-label">Nama Pemesan</label>
                            <input type="hidden" name="id" value="<?php echo $baris['id']; ?>" />
                            <input type="text" class="form-control" id="namapemesan" name="nama"
                                value="<?= $baris['nama']; ?>">
                        </div>

                        <div class="mb-3">
                            <label for="nomorhp" class="form-label">Nomor HP</label>
                            <input type="text" class="form-control" id="nomorhp" name="nohp"
                                value="<?= $baris['nohp']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="tanggalpemesanan" class="form-label">Tanggal Pemesananan</label>
                            <input type="date" class="form-control" id="tanggalpemesanan" name="tanggal"
                                value="<?php echo $baris['tanggal']; ?>">
                        </div>
                        <?php echo $baris['tanggal']; ?>
                        Durasi Perjalanan
                        <div class="input-group mb-3">

                            <input type="text" class="form-control" aria-label="Recipient's username"
                                aria-describedby="basic-addon2" name="durasi" id="durasi"
                                value="<?= $baris['durasi']; ?>">
                            <span class="input-group-text" id="basic-addon2">hari</span>
                        </div>

                        Jumlah Peserta
                        <div class="input-group mb-3">

                            <input type="text" class="form-control" aria-label="Recipient's username"
                                aria-describedby="basic-addon2" name="peserta" id="peserta"
                                value="<?= $baris['peserta']; ?>">
                            <span class="input-group-text" id="basic-addon2">Orang</span>
                        </div>

                        <div class="mb-3">
                            <label for="pelayananpaket" class="form-label">Pelayanan Paket
                                Perjalanan</label><br>
                            Penginapan
                            <div class="input-group mb-3">

                                <input class="form-control" type="text" name="penginapan" id="penginapan"
                                    value="<?= $baris['penginapan']; ?>">

                            </div>
                            Tranportasi
                            <div class="input-group mb-3">

                                <input class="form-control" type="text" name="transportasi" id="transfortasi"
                                    value="<?= $baris['transportasi']; ?>">
                            </div>
                            Makan
                            <div class="input-group mb-3">
                                <input class="form-control" type="text" name="makanan" id="makan"
                                    value="<?= $baris['makanan']; ?>">

                            </div>
                            Harga Paket
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Rp</span>
                                <input type="text" class="form-control" aria-label="Username"
                                    aria-describedby="basic-addon1" name="hargapaket" id="hargapaket"
                                    value="<?= $baris['hargapaket']; ?>">
                            </div>

                            Jumlah Tagihan
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Rp</span>
                                <input type="text" class="form-control" aria-label="Username"
                                    aria-describedby="basic-addon1" name="jumlah" id="jumlah"
                                    value="<?= $baris['jumlah']; ?>">
                            </div>

                        </div>

                        <input type="submit" class="btn btn-primary" value="Simpan">
                        <input type="button" onclick="add()" class="btn btn-info" value="Hitung">
                        <input type="reset" class="btn btn-danger" value="Reset">

                    </div>


                </form>

            </div>
        </div>

    </div>
    </main>



</body>



</html>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pariwisata Lampung</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

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
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="form-pemesanan.php">Pendaftaran Paket Wisata</a></li> -->
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


    <section class="parallax-hero text-center py-5" id="hero">
        <div class="parallax-hero-overlay"></div>
        <div class="container parallax-hero-content">
            <h1 class="display-4 fw-bold">Jelajahi Keindahan Indonesia</h1>
            <p class="lead">Temukan destinasi wisata terbaik, budaya yang kaya, dan pengalaman tak terlupakan di seluruh
                nusantara.</p>
            <a href="#destinasi" class="btn btn-light btn-lg mt-3">Lihat Destinasi</a>
        </div>
    </section>
    <div class="">
        <p></p>
    </div>

    <main class="container border">
        <div class="row justify-content-center">
            <div class="col-md-12 mt-5">
                <div class="row">
                    <h1 class="text-center">Daftar Pesanan Paket Wisata</h1>

                    <table class="table table-hover">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>No. HP</th>
                            <th>Tanggal</th>
                            <th>Durasi</th>
                            <th>Harga Paket</th>
                            <th>Penginapan</th>
                            <th>Transportasi</th>
                            <th>Makanan</th>
                            <th>Jumlah</th>
                            <th>Aksi</th>
                        </tr>
                        <?php
                        include "include/koneksi.php";
                        // if ($_SESSION['status'] = "user") {
                        // $sql = "select * from pemesanan where email = '" . $_SESSION['email'] . "'";
                        // } else {
                        
                        $sql = "select * from pemesanan";
                        // }
                        $que = mysqli_query($sambungan, $sql);//eksekusi perintah $sql
                        $no = 1;
                        while ($data = mysqli_fetch_array($que)) { ?>

                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $data['nama']; ?></td>
                                <td><?= $data['nohp']; ?></td>
                                <td><?= $data['tanggal']; ?></td>
                                <td><?= $data['durasi']; ?></td>
                                <td><?= $data['hargapaket']; ?></td>
                                <td><?= $data['penginapan']; ?></td>
                                <td><?= $data['transportasi']; ?></td>
                                <td><?= $data['makanan']; ?></td>
                                <td><?= $data['jumlah']; ?></td>
                                <td><a href="ubah-data.php?id=<?= $data['id']; ?>" class="btn btn-primary">ubah</a><a
                                        href="hapus-data.php?id=<?= $data['id']; ?>" class="btn btn-danger"
                                        onclick="return confirm('Anda yakin akan menghapus data?')">hapus</a></td>
                            </tr>
                            <?php
                            $no++;
                        }
                        ?>

                    </table>





                </div>
            </div>



        </div>
    </main>

    <div class="">
        <p></p>
    </div>
    <section class="parallax-hero text-center py-5" id="hero">
        <div class="parallax-hero-overlay"></div>
        <div class="container parallax-hero-content">
            <div class="container">
                &copy; 2025 Pariwisata Nusantara. All rights reserved.
            </div>
        </div>
    </section>

</body>

</html>
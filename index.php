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
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css" />

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

    img {
        width: 100px;
        height: 200px;
        object-fit: cover;
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


    <main class="container ">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5 mb-5">
                <div class="text-center">
                    <h1>Destinasi Wisata </h1>
                </div>

                <div class="row">

                    <?php
                    include "include/koneksi.php";
                    $sql = "select * from destination";
                    $que = mysqli_query($sambungan, $sql);//eksekusi perintah $sql
                    while ($data = mysqli_fetch_array($que)) { ?>

                    <div class="card m-auto mt-5 py-3" style="width: 18rem">
                        <img src="<?php echo "assets/images/" . $data['foto']; ?>" class="card-img-top gallery-img"
                            alt="..." />
                        <div class="card-body">
                            <h5 class="card-title"><?= $data['nama']; ?></h5>
                            <p class="card-text">
                                <?= $data['deskripsi']; ?>
                            </p>
                            <a href="e-form-pemesanan.php?id=<?= $data['id']; ?>"
                                class="btn btn-outline-secondary">Booking</a>
                        </div>
                    </div>

                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-4 mt-5">
                <?php
                $sql1 = "select * from destination";
                $que1 = mysqli_query($sambungan, $sql1);//eksekusi perintah $sql
                while ($data = mysqli_fetch_array($que1)) { ?>

                <div class="card  m-auto mb-3" style="width: 18rem">

                    <div class="card-body">
                        <h5 class="card-title"><?= $data['nama']; ?></h5>
                        <iframe width="250" height="115" src="<?= $data['video']; ?>">
                        </iframe>
                    </div>
                </div>
                <?php
                }
                ?>

            </div>
        </div>
    </main>



    <section class="parallax-hero text-center py-5" id="hero">
        <div class="parallax-hero-overlay"></div>
        <div class="container parallax-hero-content">
            <div class="container">
                &copy; <?php echo date('Y') ?> Pariwisata Nusantara. All rights reserved.
            </div>
        </div>
    </section>
</body>

</html>
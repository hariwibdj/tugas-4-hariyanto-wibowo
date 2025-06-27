<?php
session_start();
if (isset($_SESSION['nama'])) {
    header("location:index.php");
}
?>

<?php
include "include/koneksi.php";
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    // Cek apakah email dan password cocok
    $sql = "SELECT * FROM user WHERE email='$email' AND pwd='$password'";
    $result = mysqli_query($sambungan, $sql);

    if (mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
        $_SESSION['nama'] = $data['nama']; // Simpan nama pengguna di session
        $_SESSION['email'] = $data['email']; // Simpan email pengguna di session
        $_SESSION['nohp'] = $data['nohp']; // Simpan nohp pengguna di session
        $_SESSION['status'] = $data['status']; // Simpan status login di session
        echo "<script>alert('Login berhasil!'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Email atau password salah!');</script>";
    }
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
                    <!-- <li class="nav-item"><a class="nav-link" href="form-pemesanan.php">Pendaftaran Paket Wisata</a></li> -->
                    <li class="nav-item"><a class="nav-link" href="daftar-pesanan.php">Daftar Pesanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="registrasi.php"> <i
                                class="fas fa-user"></i>Registrasi / Logi </a></li>

                </ul>
            </div>
        </div>
    </nav>


    <div class="container mt-5 py-5">

        <div class="card">
            <div class="card-header text-center">
                <h2>Login Pengguna</h2>
            </div>

            <div class="card-body">


                <form method="post" action="">
                    <div class="container mt-5">

                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                                <div class="mt-3">
                                    <button type="submit" name="login" class="btn btn-primary">Masuk</button>
                                    <button type="reset" name="reset" class="btn btn-warning">Clear</button>
                                </div>
                                <p class="mt-3">Belum punya akun? <a href="registrasi.php">Daftar di sini</a></p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>


    </div>


</body>

</html>
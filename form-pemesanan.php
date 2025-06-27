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

    <script>
        function add() {
            var a, b, c, d, e, f, g, h; //membuat variabel
            a = Number(document.getElementById("durasi").value); //menangkap input angka pertama
            b = Number(document.getElementById("peserta").value); //menangkap input angka kedua
            d = Number(document.getElementById("penginapan").value); //menangkap input angka kedua
            e = Number(document.getElementById("transfortasi").value); //menangkap input angka kedua
            f = Number(document.getElementById("makan").value); //menangkap input angka kedua
            g = Number(document.getElementById("hargapaket").value); //menangkap input angka kedua

            h = d + e + f + g;
            c = (a * b) * h; //melakukan penjumlahan

            document.getElementById("jumlah").value = c;
        }
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
                    <li class="nav-item"><a class="nav-link" href="form-pemesanan.php">Pendaftaran Paket
                            Wisata</a></li>
                    <li class="nav-item"><a class="nav-link" href="daftar-pesanan.php">Daftar Pesanan</a></li>

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
            <div class="col-md-8 mt-5">
                <div class="row">
                    <h1>Form Pemesanan Paket Wisata</h1>
                    <form action="simpan-pesanan.php" method="post">

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="namapemesan" class="form-label">Nama Pemesan</label>
                                <input type="text" class="form-control" id="namapemesan" name="nama">
                            </div>

                            <div class="mb-3">
                                <label for="nomorhp" class="form-label">Nomor HP</label>
                                <input type="number" class="form-control" id="nomorhp" name="nohp">
                            </div>
                            <div class="mb-3">
                                <label for="tanggalpemesanan" class="form-label">Tanggal Pemesananan</label>
                                <input type="date" class="form-control" id="tanggalpemesanan" name="tanggal">
                            </div>
                            Durasi Perjalanan
                            <div class="input-group mb-3">

                                <input type="number" class="form-control" aria-label="Recipient's username"
                                    aria-describedby="basic-addon2" name="durasi" id="durasi">
                                <span class="input-group-text" id="basic-addon2">hari</span>
                            </div>

                            Jumlah Peserta
                            <div class="input-group mb-3">

                                <input type="number" class="form-control" aria-label="Recipient's username"
                                    aria-describedby="basic-addon2" name="peserta" id="peserta">
                                <span class="input-group-text" id="basic-addon2">Orang</span>
                            </div>

                            <div class="mb-3">
                                <label for="pelayananpaket" class="form-label">Pelayanan Paket
                                    Perjalanan</label><br>
                                Penginapan
                                <div class="input-group mb-3">

                                    <input class="form-control" type="number" name="penginapan" id="penginapan">

                                </div>
                                Tranportasi
                                <div class="input-group mb-3">

                                    <input class="form-control" type="number" value="" name="transportasi"
                                        id="transfortasi">
                                </div>
                                Makan
                                <div class="input-group mb-3">
                                    <input class="form-control" type="number" value="" name="makanan" id="makan">

                                </div>
                                Harga Paket
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Rp</span>
                                    <input type="number" class="form-control" aria-label="Username"
                                        aria-describedby="basic-addon1" name="hargapaket" id="hargapaket">
                                </div>

                                Jumlah Tagihan
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Rp</span>
                                    <input type="number" class="form-control" aria-label="Username"
                                        aria-describedby="basic-addon1" name="jumlah" id="jumlah">
                                </div>

                            </div>

                            <input type="submit" class="btn btn-primary" value="Simpan">
                            <input type="button" onclick="add()" class="btn btn-info" value="Hitung">
                            <input type="reset" class="btn btn-danger" value="Reset">

                        </div>


                    </form>

                </div>
            </div>
            <div class="col-md-4 mt-5">

                <div class="card  m-auto mb-3" style="width: 18rem">

                    <div class="card-body">
                        <h5 class="card-title">Paket wisata 1</h5>
                        <iframe width="250" height="115" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                        </iframe>
                    </div>
                </div>
                <div class="card  m-auto" style="width: 18rem">

                    <div class="card-body">
                        <h5 class="card-title">Paket wisata 2</h5>
                        <iframe width="250" height="115" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                        </iframe>
                    </div>
                </div>

                <div class="card  m-auto" style="width: 18rem">

                    <div class="card-body">
                        <h5 class="card-title">Paket wisata 3</h5>
                        <iframe width="250" height="115" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                        </iframe>
                    </div>
                </div>
                <div class="card  m-auto" style="width: 18rem">

                    <div class="card-body">
                        <h5 class="card-title">Paket wisata 4</h5>
                        <iframe width="250" height="115" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                        </iframe>
                    </div>
                </div>
                <div class="card  m-auto" style="width: 18rem">

                    <div class="card-body">
                        <h5 class="card-title">Paket wisata 5</h5>
                        <iframe width="250" height="115" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                        </iframe>
                    </div>
                </div>
                <div class="card  m-auto" style="width: 18rem">

                    <div class="card-body">
                        <h5 class="card-title">Paket wisata 6</h5>
                        <iframe width="250" height="115" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="container bg-primary text-white">
        <div class="row">
            <div class="col-12 py-4">&copy; <?php echo date("Y"); ?> TOT Web Dasar</div>
        </div>
    </footer>


</body>



</html>
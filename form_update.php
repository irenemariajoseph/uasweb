<?php

require "conn.php";


$idpesanan = $_GET['pesan_id'];
$sql = "SELECT * FROM tbl_pesan Where pesan_id = ?";

$con = GetConnection();
$hasil = $con->prepare($sql);
$hasil->execute([$idpesanan]);

$row = $hasil->fetch();
?>




<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ngeprint</title>
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>


<body>
    <header class="header">
        <a href="#" class="logo"><img src="images/logo_landscape.png" alt=""> </a>


        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
            <a href="adminpage.php">
                <div class="fas fa-shopping-cart" id="shop-btn"></div>
            </a>
            <a href="userpage.php">
                <div class="fas fa-user" id="login-btn"></div>
            </a>

        </div>
    </header>


    <div class="pilproduk" style="margin-top:7rem" id="">
        <!-- ======= Login ======= -->
        <center>

            <section id="login" class="contact">

                <div class="container" data-aos="fade-up">

                    <div class="row mt-5">



                        <div class="col-lg-12 mt-5 mt-lg-0" style="align-items: center;">
                            <form action="proses_update.php" method="POST" role="form" style="width: 30%">
                                <h3>ID PESANAN</h3>
                                <h3><?php echo $row['pesan_id'] ?></h3>
                                <input style="display:none" name="idpesanan" value="<?php echo $row['pesan_id'] ?>" required>
                                <img style=" margin:1rem auto; max-width: 300px;" src="<?php echo $row['foto_pemb'] ?>" />
                                <br>
                                <h2>UPDATE STATUS PICK UP
                                    <div class="form-group mt-3">
                                        <select class="textPass" name="update_pickup">
                                            <option value="Belum Siap">Belum Siap</option>
                                            <option value="Pending">Pending</option>
                                            <option value="Ready">Ready</option>
                                        </select>
                                    </div>
                                </h2> <br>

                                <h2>UPDATE STATUS PEMBAYARAN
                                    <div class="form-group mt-3">
                                        <select class="textPass" name="update_pemb">
                                            <option value="Tidak Terverifikasi">Tidak Terverifikasi</option>
                                            <option value="Terverifikasi">Terverifikasi</option>
                                            <option value="Mohon Re-Upload">Mohon Re-Upload</option>
                                        </select>
                                    </div>
                                </h2>

                                <br>
                                <div class="text-center"><button class="button login" type="submit">Update</button></div>
                            </form>


                        </div>
                    </div>
                </div>
            </section>
        </center>
        <!-- End Login -->

    </div>

    <footer class="text-lg-start text-muted" id="footerkonten">
        <section class="">
            <div class="container text-center text-md-start ">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-9 ">
                        <!-- Content -->
                        <h3 class=" fw-bold mb-4">
                            Tentang
                        </h3>
                        <hr>

                        <p>
                            Perusahaan Ngeprint telah mencetak berbagai model dan desain kemasan produk. Kami telah dipercaya oleh ratusan unit usaha, mulai dari usaha kecil, menengah, hingga usaha besar untuk mencetak kemasan produk yang mereka miliki. Dengan jaminan kualitas dan harga bersaing, Kami juga telah menjalin kerja sama dengan beberapa perusahaan besar di Indonesia. Perusahaan kami menawarkan solusi percetakan dengan harga yang murah untuk segala kebutuhan percetakan. Perusahaan kami berdiri sejak tahun 2021 dan telah memiliki ratusan client dari perusahaan skala kecil sampai dengan perusahaan skala multi-nasional. Tujuan dari perusahaan kami adalah memberikan layanan pencetakan yang berkualitas tinggi.
                        </p>
                    </div>

                    <!-- Grid column -->
                    <div class="col-md-3">
                        <!-- Links -->
                        <h3 class=" fw-bold mb-4">
                            Hubungi Kami
                        </h3>
                        <hr>

                        <p><i class="fas fa-home me-3"></i> Gedung ABC, Jalan Sunter Mas Tengah, Sunter Jaya, Tj. Priok,
                            Kota Jkt Utara</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            help@ngeprint.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i>021-8888-777</p>

                    </div>
                </div>
            </div>
        </section>
    </footer>
</body>
<!-- Additional styling -->
<style>
    .login {
        background: #fff;

        padding: 10px 35px;

        border: 0.5px solid #E25E20;
        color: #E25E20;
        transition: 0.4s;
        border-radius: 50px;
    }

    .login:hover {
        color: #fff;
        background: #E25E20;

    }

    .textEmail {
        height: 44px;
        border-radius: 4px;
        box-shadow: none;
        font-size: 14px;
        padding: 10px 12px;
        padding-bottom: 8px;
        width: 100%;
        background: #fff;
        padding-top: 5px;
        border: 0.5px solid #E25E20;
    }

    .textPass {
        height: 44px;
        border-radius: 4px;
        box-shadow: none;
        font-size: 14px;
        padding: 10px 12px;
        padding-bottom: 8px;
        width: 100%;
        background: #fff;
        padding-top: 5px;
        border: 0.5px solid #E25E20;
        margin-top: 10px;
    }

    .textEmail:focus,
    .textPass:focus {
        outline: none;
        border-color: #E25E20;

    }
</style>
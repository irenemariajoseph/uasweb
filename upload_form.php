<?php
require "conn.php";
SessionActive();
$user_id = $_SESSION['user_id'];


$sql = "SELECT * FROM tbl_pesan where user_id = ? ";
$con = GetConnection();

$hasil = $con->prepare($sql);
$hasil->execute([$user_id]);

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

        <nav class="navbar">
            <ul>
                <a href="home.php#up">Home</a>
                <a href="home.php#products">Product</a>
                <a href="home.php#testimony">Testimony</a>
                <a href="home.php#simulate">Simulation</a>
                <a href="home.php#aboutus">About Us</a>
            </ul>
        </nav>

        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
            <a href="show_cart.php">
                <div class="fas fa-shopping-cart" id="shop-btn"></div>
            </a>
            <a href="userpage.php">
                <div class="fas fa-user" id="login-btn"></div>
            </a>

        </div>


    </header>
    <div class="pilproduk" style="margin-top:20rem auto" id="">


        <!-- ======= Login ======= -->
        <center>
            <section id="login" style="margin-top: 100px; margin-bottom: 150px" class="contact">

                <div class="container" data-aos="fade-up">

                    <div class="row mt-5">
                        <h2><b>SUBMIT YOUR PAYMENT PROOF</b></h2>
                        <h5>Your payment would be validate by admin, thank you for your patience!</h5>


                        <div class="col-lg-12 mt-5 mt-lg-0" style="align-items: center;">
                            <form action="upload_proses.php" method="post" enctype="multipart/form-data" style="width: 30%">
                                <div class="form-group mt-3">
                                    <!-- <input class="input textPass" type="text" name="judul" placeholder="Upload Your Photo" required><br /> -->
                                    <select name="judul" class="textPass" required><br />
                                        <?php while ($row = $hasil->fetch()) : ?>
                                            <option value="<?= $row['pesan_id'] ?>"><?php echo $row['pesan_id'] ?></option>
                                        <?php endwhile; ?>
                                    </select>

                                </div>
                                <div class="form-group mt-3">
                                    <input class="input textPass" type="file" name="foto" placeholder="Upload Your Photo" required><br />

                                </div>
                                <br>


                                <br>
                                <div class="text-center"><button class="button login" type="submit">Upload Bukti Pembayaran</button></div>
                            </form>


                        </div>
                    </div>
                </div>
            </section>
        </center>
        <!-- End Login -->



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

        <!-- <div class="container">
            <form action="upload_proses.php" method="post" enctype="multipart/form-data">
                Judul:
                <input type="text" name="judul" required><br />
                <br>Foto:
                <input type="file" name="foto" required><br />
                <br><button type="submit">Upload</button>
            </form>
        </div>
    </div> -->
</body>

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
</style>
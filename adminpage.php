<?php

// require "conn.php";
// $email = ($_SESSION['email']);


// SessionActive();
// $sql = "SELECT role FROM users WHERE email = ? ";
// $con = GetConnection();

// $hasil = $con->prepare($sql);
// $hasil->execute($email);


// if ($role == 'admin') {
//     // return alert('admin');



//     header('Location: adminpage.php');
// } else {
//     // return alert('user');

//     header('Location: userpage.php');
// }

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

<div class="wrapper">
    <!-- ini kalau mau pake header yang polosan cuma ada logo -->
    <!-- <nav class="navbar navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="images/logo_landscape.png" height="80" alt="Ngeprint Logo" loading="lazy" />
            </a>
        </div>
    </nav> -->

    <!-- ini header yang selaras sama punya userpage -->
    <header class="header">
        <a href="#" class="logo"><img src="images/logo_landscape.png" alt=""> </a>

        <nav class="navbar">
            <ul>
                <a href="home.php#up">Home</a>
                <a href="home.php#products">Product</a>
                <a href="home.php#testimony">Testimony</a>
                <a href="paperproduct.php#simulate">Simulation</a>
                <a href="home.php#aboutus">About Us</a>
            </ul>
        </nav>

        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
            <div class="fas fa-shopping-cart" id="shop-btn"></div>
            <a href="userpage.php">
                <div class="fas fa-user" id="login-btn"></div>
            </a>
            <!-- <div class="fas fa-user" id="login-btn"></div> -->
        </div>
    </header>

    <!-- Kalau mau pake yang header logo doang, tolong div spacing ini dicomment aja -->
    <div class="spacing"></div>
    <h1 class="h1" align="center">Halo, Admin!</h1>

    <div class="content">
        <div class="col text-center">
            <button type="button" class="btn btn-warning btn-lg btn-block">New Orders</button>
        </div>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>Order #</td>
                        <td>Customer</td>
                        <td>Invoice No</td>
                        <td>Product ID</td>
                        <td>Qty</td>
                        <td>Size</td>
                        <td>Status</td>
                        <td>Transaction Photo</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Customer A</td>
                        <td>001</td>
                        <td>PD001</td>
                        <td>20</td>
                        <td>20cm</td>
                        <td>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Pending</option>
                                <option value="1">Ready</option>
                            </select>
                        </td>
                        <td>Foto Transaksi</td>
                        <td>
                            <div class="col text-center">
                                <button type="button" class="btn btn-warning btn-sm" id="button_save">Save</button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Customer B</td>
                        <td>002</td>
                        <td>PD002</td>
                        <td>20</td>
                        <td>20cm</td>
                        <td>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Pending</option>
                                <option value="1">Ready</option>
                            </select>
                        </td>
                        <td>Foto Transaksi</td>
                        <td>
                            <div class="col text-center">
                                <button type="button" class="btn btn-warning btn-sm" id="button_save">Save</button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Customer C</td>
                        <td>003</td>
                        <td>PD003</td>
                        <td>20</td>
                        <td>20cm</td>
                        <td>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Pending</option>
                                <option value="1">Ready</option>
                            </select>
                        </td>
                        <td>Foto Transaksi</td>
                        <td>
                            <div class="col text-center">
                                <button type="button" class="btn btn-warning btn-sm" id="button_save">Save</button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>Customer D</td>
                        <td>004</td>
                        <td>PD004</td>
                        <td>20</td>
                        <td>20cm</td>
                        <td>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Pending</option>
                                <option value="1">Ready</option>
                            </select>
                        </td>
                        <td>Foto Transaksi</td>
                        <td>
                            <div class="col text-center">
                                <button type="button" class="btn btn-warning btn-sm" id="button_save">Save</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
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

    <body>
        <header class="header">
            <a href="#" class="logo"><img src="images/logo_landscape.png" alt=""> </a>

            <nav class="navbar">
                <ul>
                    <a href="home.php#up">Home</a>
                    <a href="home.php#products">Product</a>
                    <a href="home.php#testimony">Testimony</a>
                    <a href="paperproduct.php#simulate">Simulation</a>
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

        <div class="pilproduk" style="margin:20rem 10rem;" id="">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td>Order #</td>
                            <td>Customer</td>
                            <td>Invoice No</td>
                            <td>Product ID</td>
                            <td>Qty</td>
                            <td>Size</td>
                            <td>Status</td>
                            <td>Transaction Photo</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $row['pesan_id'] ?></td>
                            <td><?php echo $row['username'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td>PD001</td>
                            <td>20</td>
                            <td>20cm</td>
                            <td>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Pending</option>
                                    <option value="1">Ready</option>
                                </select>
                            </td>
                            <td>Foto Transaksi</td>
                            <td>
                                <div class="col text-center">
                                    <button type="button" class="btn btn-warning btn-sm" id="button_save">Save</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

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
</div>

<style>
    body {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .wrapper {
        width: 100%;
        margin: 0 auto;
    }

    .container {
        border-bottom: 2px solid orange;
        margin-bottom: 1rem;
    }

    .spacing {
        height: 17vh;
    }

    thead td {
        font-weight: bolder;
        font-size: 1.5rem;
    }

    tbody {
        font-size: 1.3rem;
    }

    .content button {
        padding: 1rem;
        font-weight: bold;
        margin-top: 1rem;
        margin-bottom: 2rem;
        font-size: 16px;
    }

    .content tbody button {
        padding: 0 0.5rem;
        margin: 0;
    }

    footer {
        margin-top: 1.5rem;
    }

    @media only screen and (max-width: 1060px) {
        .spacing {
            height: 20vh;
        }
    }

    @media only screen and (max-width: 991px) {
        .spacing {
            height: 5vh;
        }
    }

    @media only screen and (max-width: 281px) {
        .spacing {
            height: 12vh;
        }
    }
</style>
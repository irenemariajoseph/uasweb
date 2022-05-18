<?php

require "conn.php";
SessionActive();
$conn = GetConnection();

$user_id = $_SESSION['user_id'];

$sql = "SELECT * FROM users where id = ?";

$hasil = $conn->prepare($sql);
$hasil->execute([$user_id]);
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

        <nav class="navbar">
            <ul>
                <a href="home.php#up">Home</a>
                <a href="home.php#products">Product</a>
                <a href="home.php#testimony">Testimony</a>
                <a href="productall.php#simulate">Simulation</a>
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

    <div class="card">
        <form class="form">
            <h2>User Profile</h2>

            <div class="form-group">
                <label for="email">Full Name:</label>
                <br>
                <div class="relative">
                    <h3 style="font-size:medium;" disabled="disabled" class="form-control" id="name" type="text"> <?php echo $row['username'] ?>
                        <i class="fa fa-user"></i>
                </div>
            </div>
            <br>
            <div class="form-group">
                <label for="email">Email address:</label>
                <br>
                <div class="relative">
                    <h3 style="font-size:medium;" class="form-control" type="email" required=""> <?php echo $row['email'] ?>
                        <i class="fa fa-envelope"></i>
                </div>
            </div>
            <br>
            <div class="form-group">
                <label for="email">Contact Number:</label>
                <br>
                <div class="relative">
                    <h3 style="font-size:medium;" class="form-control" type="text"><?php echo $row['no_telp'] ?>
                        <i class="fa fa-phone"></i>
                </div>
            </div>

            <br>
            <br>
            <div class="text-center">

                <button class="movebtn movebtnblack" type="Submit"><a href="formedituser.php" style="text-decoration: none; color: black;"> Edit User <i class="fa fa-edit"></a></i></button>
                <button class="movebtn movebtnblack" style="width: 15rem;" type="Submit"><a href="formchangepw.php" style="text-decoration: none; color: black;"> Change Password <i class="fa fa-key" aria-hidden="true"></a></i></button>
            </div>

        </form>
        <br>

        <br>
        <div class="tright">
            <a href="logout.php"><button class="movebtn movebtnre" type="Submit"> Log Out <i class="fa fa-power-off" aria-hidden="true"></i></button></a>
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


<style>
    .card {
        max-width: calc(100vw - 40px);
        width: 70rem;
        height: auto;
        background: #F7CFA5;
        border-radius: 8px;
        box-shadow: 0 0 40px -10px #fff;
        margin: 3% auto;
        padding: 20px 30px;
        box-sizing: border-box;
        position: relative;
        border-bottom: 5px solid #ccc;
        margin-top: 15.5rem;
    }

    .form h2 {
        margin: 18px 0;
        padding-bottom: 10px;
        width: 210px;
        color: #1e439b;
        font-size: 22px;
        border-bottom: 3px solid #ff5501;
        font-weight: 600;
        margin-bottom: 30px;
    }

    label {
        font-size: large;
    }

    input {
        width: 60%;
        padding: 10px;
        font-size: large;
        box-sizing: border-box;
        background: none;
        outline: none;
        resize: none;
        height: 3.5rem;
        border: 0;
        font-family: 'Montserrat', sans-serif;
        border: 2px solid #bebed2;
        transition: all .3s;
    }

    .form p:before {
        content: attr(type);
        display: block;
        margin: 10px 0 0;
        font-size: 13px;
        color: #5a5a5a;
        float: left;
        width: 40%;
        transition: all .3s;
    }

    button {
        padding: 8px 12px;
        margin: 8px 0 0;
        font-family: 'Montserrat', sans-serif;
        border: 2px solid #78788c;
        background: 0;
        color: #5a5a6e;
        cursor: pointer;
        transition: all .3s;
    }

    button:hover {
        background: #78788c;
        color: #fff;
    }

    .tright {
        text-align: right;
    }

    .ui-menu {
        max-height: 150px;
        overflow: auto;
    }

    .ui-menu .ui-menu-item {
        padding: 5px;
        font-size: 14px;
    }

    .relative {
        position: relative;
    }

    .relative i.fa:before {
        color: #444;
        padding: 10px;
        position: absolute;
        left: -3px;
        text-align: center;
    }

    .relative i.fa {
        position: absolute;
        top: 0;
        right: 0;
        width: 40px;
        text-align: center;
        border-radius: 0 4px 4px 0;
        width: 0;
        height: 0;
        z-index: 99;
        border-left: 20px solid transparent;
        border-right: 30px solid #ccc;
        border-bottom: 34px solid #ccc;
        transition: all 0.15s ease-in-out;

    }

    .form-control:focus {
        border-color: #1e439b;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgb(30, 102, 195);
    }

    .relative input:focus+i.fa {
        border-left: 20px solid transparent;
        border-right: 30px solid #1e439b;
        border-bottom: 34px solid #1e439b;
    }

    .relative input:focus+i.fa:before {
        color: #fff;
    }

    .input-group .form-control:not(:first-child):not(:last-child),
    .input-group-addon:not(:first-child):not(:last-child),
    .input-group-btn:not(:first-child):not(:last-child) {
        border-radius: 0 4px 4px 0;
    }

    .form-control[disabled],
    .form-control[readonly],
    fieldset[disabled] .form-control {
        background-color: #fff;
    }

    /* --- Thanks Message Popup --- */
    .thanks {
        max-width: calc(100vw - 40px);
        width: 200px;
        height: auto;
        background-color: #444;
        border-radius: 8px;
        box-shadow: 0 0 40px -10px #000;
        padding: 20px;
        box-sizing: border-box;
        position: relative;
        position: absolute;
        top: 20px;
        right: 20px;
        transition: all .3s;
    }

    .thanks h4,
    .thanks p {
        color: #fff;
        text-align: center;
    }

    /* --- Animated Buttons --- */
    .movebtn {
        background-color: transparent;
        display: inline-block;
        width: 10rem;
        margin: 0 5px;
        background-image: none;
        padding: 8px 10px;
        margin-bottom: 20px;
        border-radius: 0;
        -webkit-transition: all 0.5s;
        -moz-transition: all 0.5s;
        transition: all 0.5s;
        -webkit-transition-timing-function: cubic-bezier(0.5, 1.65, 0.37, 0.66);
        transition-timing-function: cubic-bezier(0.5, 1.65, 0.37, 0.66);
    }

    .movebtnre {
        border: 2px solid #ff5501;
        box-shadow: inset 0 0 0 0 #ff5501;
        color: #ff5501;
    }

    .movebtnsu {
        border: 2px solid #1e439b;
        box-shadow: inset 0 0 0 0 #1e439b;
        color: #1e439b;
    }

    .movebtnblack {
        border: 2px solid black;
        box-shadow: inset 0 0 0 0 black;
        color: black;
    }

    .movebtnre:focus,
    .movebtnre:hover,
    .movebtnre:active {
        background-color: transparent;
        color: #FFF;
        border-color: #ff5501;
        box-shadow: inset 96px 0 0 0 #ff5501;
    }

    .movebtnsu:focus,
    .movebtnsu:hover,
    .movebtnsu:active {
        background-color: transparent;
        color: #FFF;
        border-color: #1e439b;
        box-shadow: inset 96px 0 0 0 #1e439b;
    }


    /* --- Media Queries --- */

    @media only screen and (max-width: 600px) {
        p:before {
            content: attr(type);
            width: 100%
        }

        input {
            width: 100%;
        }
    }
</style>
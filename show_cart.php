<?php
require "conn.php";
SessionActive();

$user_id = $_SESSION['user_id'];

$url = "http://localhost/uasweb/get_cart.php?user_id=" . $user_id;

$res = file_get_contents($url);
$cart_data = json_decode($res);


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ngeprint</title>

    <link rel="stylesheet" href="submenustyle.css">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <style>
        button a {
            text-decoration: none;

            padding: 3rem 2rem;
            font-size: x-large;
            text-transform: uppercase;

        }

        button:hover {
            background-color: white;
            border: 3px solid var(--primary);
            color: var(--primary);
        }

        .form-group {
            width: 96%;
        }

        #inputdropdown {
            text-transform: capitalize;
            color: black;
        }


        .produkbutton button {
            padding: 2rem 3rem;
        }

        @media only screen and (max-width: 770px) {
            .form-group {
                width: 93%;
            }

            .produkbutton button {
                padding: 0.8rem 1.8rem;
            }
        }

        @media only screen and (max-width: 575px) {
            .form-group {
                width: 98%;
            }
        }
    </style>
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
    <div class="pilproduk" id="">
        <h1>Your <span>Cart</span> Product</h1>

        <button id="btn_co"> <a href="#" style="color:inherit" onclick="validateCO(event);"> CHECK OUT</a></button>
        <button> <a href="pesanan.php" style="color:inherit"> PESANAN</a></button>
        <br><br>
        <h3>Grand Total Belum Termasuk Pajak 11%</h3>
        <br>
        <h3 style="margin-top:1.5rem">Grand Total (In Rupiah): </h3>
        <h3 id="subTotal"><?php echo $cart_data->total_price ?></h3>
        <div style="margin-top:5rem" class="row">

            <?php
            $i = 1;
            // while ($row = $hasil->fetch()) :
            foreach ($cart_data->product_data as $cart) :
            ?>
                <div class="col-sm-3" style="margin-bottom: 1.5rem;">
                    <div class="jenis">
                        <div class="card-img-top  align-items-center">
                            <div>
                                <img class="img-fluid" id="pilprodukimg" src="images/paper_businesscard.png" alt="Card image cap">
                            </div>
                        </div>

                        <br>

                        <h3 style=" text-transform: uppercase;"> <?php echo $cart->product_name ?></h3>


                        <br>

                        <input class="cart_id" value=<?php echo $cart->cart_id ?> style="display: none;" />
                        <input class="user_id" value=<?php echo $_SESSION['user_id']; ?> style="display: none;" />


                        <div class="form-group">
                            <h4>Jenis Kertas</h4>
                            <div class="form-group col-md-11">

                                <h4 id="inputdropdown" style="margin-right:3rem;" class="form-control">
                                    <?php echo $cart->product_type ?>
                                </h4>
                            </div>
                        </div>
                        <div class="form-group">
                            <h4>Ukuran Kertas</h4>
                            <div class="form-group col-md-11">

                                <h4 id="inputdropdown" style="margin-right:3rem;" class="form-control">
                                    <?php echo $cart->product_size ?>
                                </h4>
                            </div>
                        </div>
                        <div class="form-group">
                            <h4>Harga</h4>
                            <div class="form-group col-md-11">

                                <h4 id="inputdropdown" style="margin-right:3rem;" class="form-control">
                                    <?php echo $cart->product_price ?>
                                </h4>
                            </div>
                        </div>
                        <div class="form-group">
                            <h4>Jumlah Kertas</h4>
                            <div class="form-group col-md-11">

                                <h4 style="background-color:#36e367" id="inputdropdown" style="margin-right:3rem;" class="form-control">
                                    <?php echo $cart->product_qty ?>
                                </h4>
                            </div>
                        </div>
                        <div class="form-group">
                            <h4>Sub Total</h4>
                            <div class="form-group col-md-11">

                                <h4 style="background-color:#36e367" id="inputdropdown" style="margin-right:3rem;" class="form-control">
                                    <?php echo $cart->sub_total ?>
                                </h4>
                            </div>
                        </div>

                        <div class="produkbutton">
                            <button><a href="remove_cart.php?id_cart=<?php echo $cart->cart_id ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></button>
                        </div>

                        <!-- </form> -->

                    </div>
                </div>
                <br>
                <br>
            <?php
                $i++;
            endforeach;
            ?>



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
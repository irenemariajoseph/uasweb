<?php
require "conn.php";
SessionActive();



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
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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

    <!-- header done----------------------------------------------------------------------------------------------------------- -->

    <div class="pagination">
        <div class="checkout">
            <h1>Pesanan <span>Ngeprint</span> Anda</h1>
            <h2><b>Informasi Pembeli</b></h2>
            <br>
            <div class="formbox">


                <div class="form-row">
                    <form action="checkout_cart.php" method="POST" role="form">


                        <input type="text" name="user_id" value="<?php echo $_SESSION['user_id']; ?>" style="display: none;">

                        <div class="form-group col-md-12" style="padding: 0 1.5rem;">
                            <label>Nama Pembeli</label>
                            <input type="text" name="conama" class="form-control" placeholder="Nama Pembeli" required>
                        </div>
                        <br>
                        <div class="form-group col-md-12" style="padding: 0 1.5rem;">
                            <label>Email</label>
                            <input type="email" name="coemail" class="form-control" placeholder="Nama Email" required>
                        </div>
                        <br>

                        <div class="form-group col-md-12" style="padding: 0 1.5rem;">
                            <label>No. Telp</label>
                            <input id="notelp" type="number" name="cotelp" class="form-control" placeholder="No. Telp" required>
                        </div>
                        <br>
                        <div class="form-group col-md-12" style="padding: 0 1.5rem;">
                            <label>Jenis Pembayaran</label>
                            <select name="jenis_pembayaran" class="form-control" style="height: 4rem" required>
                                <option value="">None</option>
                                <option value="Bank Transfer">Bank Transfer</option>
                                <option value="Shopee Pay<">Shopee Pay</option>
                                <option value="DANA">DANA</option>
                                <option value="OVO">OVO</option>
                                <option value="Gopay">Gopay</option>
                            </select>
                        </div>
                        <br>

                        <div class="form-group col-md-12" style="padding: 0 1.5rem;">
                            <label>Pick Up</label>
                            <select name="pickup" class="form-control" style="height: 4rem" required>
                                <option value="">None</option>
                                <option value="Gojek">Gojek</option>
                                <option value="Grab">Grab</option>
                                <option value="Ambil Pribadi">Ambil Pribadi</option>
                            </select>
                        </div>
                        <br>

                        <div class="form-group col-md-12" style="padding: 0 1.5rem;">
                            <label>Tanggal Pick Up</label>
                            <input name="tgl_pickup" type="date" class="form-control" required>
                        </div>
                        <br>
                        <div class="form-group col-md-12" style="padding: 0 1.5rem;">
                            <label>Jam Pick Up</label>
                            <input name="jam_pickup" type="time" class="form-control" required>
                        </div>
                        <br>


                        <button class="buttonCheckout" type="submit">
                            Send
                        </button>
                    </form>

                </div>


            </div>
        </div>

    </div>


    <!-- Modal -->
    <!-- <div id="modalsucess" class="modal fade">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="icon-box">
                        <i class="material-icons">&#xE876;</i>

                    </div>
                    <h4 class="modal-title w-100">Awesome!</h4>
                </div>
                <div class="modal-body">
                    <p class="text-center">Your booking has been confirmed. Check your email for detials.</p>
                </div>
                <div class="modal-footer">
                    <div class="chooseNow">
                        <button> <a href="invoice.html" style="color:inherit ; margin: 0 auto;"> See
                                Invoice</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

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
                            Kami ngeprint blablabla Kami ngeprint blablablaKami ngeprint blablabla Kami ngeprint
                            blablabla Kami ngeprint blablablaKami ngeprint blablabla Kami ngeprint blablabla Kami
                            ngeprint blablablaKami ngeprint blablabla Kami ngeprint blablabla Kami ngeprint
                            blablablaKami ngeprint blablabla Kami ngeprint blablabla Kami ngeprint blablablaKami
                            ngeprint blablabla Kami ngeprint blablabla Kami ngeprint blablablaKami ngeprint
                            blablabla
                        </p>
                    </div>

                    <!-- Grid column -->
                    <div class="col-md-3">
                        <!-- Links -->
                        <h3 class=" fw-bold mb-4">
                            Hubungi Kami
                        </h3>
                        <hr>

                        <p><i class="fas fa-home me-3"></i> Gedung ABC, Jalan Sunter Mas Tengah, Sunter Jaya, Tj.
                            Priok,
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

</html>

<style>
    input {
        height: 4rem;
        font-size: larger;
    }

    label {

        font-size: larger;
    }

    input::placeholder {
        font-size: larger;

    }
</style>
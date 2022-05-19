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

    <div class="pilproduk" style="margin:11rem 10rem;" id="">
        <center>
            <h3 style="color:var(--primary)">Rekening Ngeprint: 2732873</h3>
            <h3 style="color:var(--primary); margin-bottom:1rem">Others Transaction: 0847384749</h3>
            <button style="margin:0rem auto"> <a style="margin:0rem auto" href="upload_form.php" style="color:inherit"> UPLOAD FORM</a></button>


            <br>
            <br>
            <br>

            <div style="margin:0 auto; text-align:center;vertical-align: baseline;" class=" table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td>Order #</td>
                            <td>Customer Name</td>
                            <td>Email</td>
                            <td>Cara Pick Up</td>
                            <td>Tanggal Pick Up</td>
                            <td>Pick Up Status</td>
                            <td>Status Pembayaran</td>
                            <td>Transaction Photo</td>
                            <td>Transaction Detail</td>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        while ($row = $hasil->fetch()) :
                        ?>
                            <tr>
                                <td><?php echo $row['pesan_id'] ?></td>
                                <td><?php echo $row['username'] ?></td>
                                <td><?php echo $row['email'] ?></td>

                                <td><?php echo $row['cara_pickup'] ?></td>
                                <td><?php echo $row['tgl_pickup'] ?></td>

                                <!-- <td>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Pending</option>
                                <option value="1">Ready</option>
                            </select>
                        </td> -->

                                <td><?php echo $row['pickup_status'] ?></td>
                                <td><?php echo $row['pemb_status'] ?></td>


                                <td><img style="  max-width: 100px;" src="<?php echo $row['foto_pemb'] ?>" /></td>
                                <td> <a class="LinkButton" href="invoice.php?pesan_id=<?php echo $row['pesan_id'] ?>">View Invoice</a></td>
                            </tr>
                    </tbody>
                <?php
                            $i++;
                        endwhile;
                ?>
                </table>
            </div>
        </center>
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

    td,
    input {
        vertical-align: middle;
    }

    a.LinkButton {
        border-style: solid;
        border-width: 1px 1px 1px 1px;
        text-decoration: none;
        padding: 1rem 1rem;
        border-color: var(--primary);
        margin: 1 rem 1rem;
        color: var(--primary);
        border-radius: 2rem;
        background-color: white;

    }

    a.LinkButton:hover {
        border-style: solid;
        border-width: 1px 1px 1px 1px;
        text-decoration: none;
        background-color: white;
        border: 3px solid var(--primary);
        color: var(--primary);

    }
</style>
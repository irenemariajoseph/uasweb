<?php

require "conn.php";
session_start();


$role = $_SESSION['role'];

if ($role == "user") {
    header('Location: userpage.php');
}
// else if ($role == "user") {
//     header('Location: userpage.php');
// }



$conn = GetConnection();
$sql = "select tbl_produk.* , tbl_pesan.* from tbl_pesan left join tbl_produk on tbl_produk.prod_id =tbl_pesan.prod_id;";
$result = $conn->prepare($sql);
$result->execute();
$row = $result






// if ($role == "admin") {
//     // return alert('admin');

//     header('Location: adminpage.php');
// } else {


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


    <div class="pilproduk" style="margin:20rem 10rem;" id="">
        <!-- <form action="proses_update.php" method="POST"> -->
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>Order #</td>
                        <td>Customer Name</td>
                        <td>Email</td>
                        <td>Product ID</td>
                        <td>Product Name</td>
                        <td>Product Ukuran</td>
                        <td>Product Type</td>
                        <td>Kuantitas</td>
                        <td>Cara Pick Up</td>
                        <td>Tanggal Pick Up</td>
                        <td>Pick Up Status</td>
                        <td>Status Pembayaran</td>
                        <td>Transaction Photo</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    while ($row = $result->fetch()) :
                    ?>

                        <tr>
                            <td><?php echo $row['pesan_id'] ?></td>
                            <td><?php echo $row['username'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['prod_id'] ?></td>
                            <td><?php echo $row['prod_name'] ?></td>
                            <td><?php echo $row['type_ppr'] ?></td>
                            <td><?php echo $row['uk_ppr'] ?></td>
                            <td><?php echo $row['jmlh_brg'] ?></td>
                            <td><?php echo $row['cara_pickup'] ?></td>
                            <td><?php echo $row['tgl_pickup'] ?></td>
                            <td><?php echo $row['pickup_status'] ?></td>
                            <td><?php echo $row['pemb_status'] ?></td>





                            <td><img style="  max-width: 100px;" src="<?php echo $row['foto_pemb'] ?>" /></td>
                            <td>
                                <div class="col text-center">
                                    <a href="form_update.php?pesan_id=<?php echo $row['pesan_id'] ?>">Update</a>
                                </div>
                            </td>
                        </tr>


                    <?php
                        $i++;
                    endwhile;
                    ?>
                </tbody>
            </table>
        </div>
        <!-- </form> -->
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
        font-size: 1.2rem;
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
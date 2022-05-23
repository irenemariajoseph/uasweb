<?php

require "conn.php";


$idpesanan = $_GET['pesan_id'];
$sql = "select tbl_produk.* , tbl_pesan.* from tbl_pesan left join tbl_produk on tbl_produk.prod_id =tbl_pesan.prod_id WHERE pesan_id =?";

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
    <link rel="stylesheet" href="submenustyle.css">
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
                <div class="fas fa-info" id="shop-btn"></div>
            </a>
            <a href="admininfo.php">
                <div class="fas fa-user" id="login-btn"></div>
            </a>

        </div>


    </header>

    <div class="pagination">
        <div class="checkout">
            <h1>Pesanan <span>Ngeprint</span> Anda</h1>
            <center><button style="margin:0rem auto"> <a style="margin:0rem auto" href="upload_form.php" style="color:inherit"> UPLOAD FORM</a></button>
            </center> <br>

            <div class="formq">


                <div class="headerq">
                    <a href="#" class="logo"><img id="logoq" src="images/logo_landscape.png" alt=""> </a>
                    <h2 class="quotationjudul"> Invoice</h2>
                </div>


                <div class="isiq">
                    <h2 class="noorder">NO ORDER : <?php echo $row['pesan_id'] ?></h2>
                    <h2 class="noorder">Order at Ngeprint : <?php echo $row['trans_date'] ?></h2>

                    <hr class="new3">
                    <div class="infopem">
                        <h5 class="kirijudul">Nama Pembeli :</h5>
                        <h5 style="text-transform:capitalize;" class="kananinfo"><?php echo $row['username'] ?></h5>
                    </div>
                    <h2 class="judulisi">Informasi Pembeli</h2>

                    <div class="infopem">
                        <h5 class="kirijudul">Email :</h5>
                        <h5 style="text-transform:capitalize;" class="kananinfo"> <?php echo $row['email'] ?></h5>
                    </div>

                    <div class="infopem">
                        <h5 class="kirijudul">No Telp :</h5>
                        <h5 style="text-transform:capitalize;" class="kananinfo"><?php echo $row['no_telp'] ?></h5>
                    </div>
                    <div class="infopem">
                        <h5 class="kirijudul">Tipe Pembayaran :</h5>
                        <h5 style="text-transform:capitalize;" class="kananinfo"><?php echo $row['jenis_pemb'] ?>BCA Tranfer</h5>
                    </div>
                    <div class="infopem">
                        <h5 class="kirijudul">Tipe Pick-Up :</h5>
                        <h5 style="text-transform:capitalize;" class="kananinfo"><?php echo $row['cara_pickup'] ?></h5>
                    </div>
                    <div class="infopem">
                        <h5 class="kirijudul">Tanggal Pick-Up :</h5>
                        <h5 style="text-transform:capitalize;" class="kananinfo"><?php echo $row['tgl_pickup'] ?></h5>
                    </div>
                    <div class="infopem">
                        <h5 class="kirijudul">Jam Pick-Up :</h5>
                        <h5 style="text-transform:capitalize;" class="kananinfo"><?php echo $row['jam_pickup'] ?></h5>
                    </div>
                    <div class="infopem">
                        <h5 class="kirijudul">Status Pembayaran :</h5>
                        <h5 style="text-transform:capitalize;" class="kananinfo"><?php echo $row['pemb_status'] ?></h5>
                    </div>
                    <div class="infopem">
                        <h5 class="kirijudul">Status Pengambilan :</h5>
                        <h5 style="text-transform:capitalize;" class="kananinfo"><?php echo $row['pickup_status'] ?></h5>
                    </div>



                    <h2 class="judulisi">Informasi Pemesan</h2>
                    <div class="infopem">
                        <h5 class="kirijudul">Notes Tambahan:</h5>
                        <h5 class="kananinfo"><?php echo $row['notes'] ?></h5>
                    </div>

                    <br>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Tipe </th>
                                <th scope="col">Ukuran</th>
                                <th scope="col">Harga Satuan</th>
                                <th scope="col">Jumlah</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td style="text-transform:capitalize;"><?php echo $row['prod_name'] ?></td>
                                <td style="text-transform:capitalize;"><?php echo $row['type_ppr'] ?></td>
                                <td style="text-transform:capitalize;"><?php echo $row['uk_ppr'] ?></td>
                                <td><?php echo $row['price'] ?></td>
                                <td><?php echo $row['jmlh_brg'] ?></td>

                            </tr>


                        </tbody>
                    </table>
                    <div class="infopem">
                        <h5 class="kirijudul">Sub Total :</h5>
                        <h5 class="kananinfo"><?php echo $row['subtotal'] ?></h5>
                    </div>
                    <div class="infopem">
                        <h5 class="kirijudul">Pajak (11%) :</h5>
                        <h5 class="kananinfo"><?php echo $row['pajak'] ?></h5>
                    </div>


                    <div class="infopem">
                        <h2 class="tulisan">Grand Total :</h2>
                        <h2 class="totalharga"><?php echo $row['harga_total'] ?></h2>
                    </div>


                </div>


            </div>


        </div>
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
    Th {
        vertical-align: middle;
        text-align: center;
    }
</style>
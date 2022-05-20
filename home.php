<?php
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
}
?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ngeprint</title>
    <link rel="stylesheet" href="submenustyle.css">
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

    <!-- Banner  -->
    <section id="up">
    </section>
    <section class="home" id="home">
        <div class="homeTitle">
            <button> <a href="productall.php" style=" text-decoration: none; color:inherit"> SHOP NOW</a></button>
        </div>

    </section>

    <!-- Product -->
    <section class="products" id="products">
        <h1>Our Digital Printing <span>Product</span></h1>
        <br>
        <div class="row">

            <!-- <div class="ourProducts"> -->
            <div class="col-sm-3">
                <div class="product one">
                    <img src="images/pdk_paper.png" alt="">
                    <div class="productDescription">
                        <p>PAPER</p>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            i
                        </button>
                    </div>
                    <div class="chooseNow">
                        <button> <a href="paperproduct.php" style="color:inherit"> Choose Now</a></button>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="product two">
                    <img src="images/pdk_stiker.png" alt="">
                    <div class="productDescription">
                        <p>STICKERS</p>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                            i
                        </button>
                    </div>
                    <div class="chooseNow">
                        <button> <a href="stickerproduct.php" style="color:inherit"> Choose Now</a></button>
                    </div>
                </div>

            </div>

            <div class="col-sm-3">
                <div class="product three">
                    <img src="images/pdk_banner.png" alt="">
                    <div class="productDescription">
                        <p>LARGE FORMAT</p>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                            i
                        </button>
                    </div>
                    <div class="chooseNow">
                        <button> <a href="largeformatproduct.php" style="color:inherit"> Choose Now</a></button>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product four">
                    <img src="images/pdk_kemasan.png" alt="">
                    <div class="productDescription">
                        <p>PRODUCT</p>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal4">
                            i
                        </button>
                    </div>
                    <div class="chooseNow">
                        <button> <a href="productpack.php" style="color:inherit"> Choose Now</a></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimony" id="testimony">
        <h1>Customer <span>Testimony</span></h1>
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <h3>Cust 1</h3>
                    <h4 class="text-center">Tanggal Ngeprint 27 Januari 2022</h4>

                    <div class="card-img-top d-flex align-items-center">
                        <div>
                            <img class="img-fluid" id="testimg" src="images/paper_businesscard.png" alt="Card image cap">
                        </div>
                        <p class="col p-2 m-0">“Kami sangat terbantu dan puas setelah memilih PT Ngeprint untuk
                            menangani proses pembuatan
                            label kemasan, roll up banner, stiker freezer beku, apron, face shield, dan blank card
                            sebagai kartu keanggotaan untuk pelanggan Kami.”</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <h3>Cust 1</h3>
                    <h4 class="text-center">Tanggal Ngeprint 27 Januari 2022</h4>

                    <div class="card-img-top d-flex align-items-center ">
                        <div>
                            <img class="img-fluid" id="testimg" src="images/paper_businesscard.png" alt="Card image cap">
                        </div>
                        <p class="col p-2 m-0">“Kami sangat terbantu dan puas setelah memilih PT Ngeprint untuk
                            menangani proses pembuatan
                            label kemasan, roll up banner, stiker freezer beku, apron, face shield, dan blank card
                            sebagai kartu keanggotaan untuk pelanggan Kami.”</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="simulation text-center" id="simulate">
        <h1>Not Sure it’s easy and fast?<br>
            <span>SIMULATE IT!</span>
        </h1>

        <div class="formsimulate">
            <form>
                <div class="form-row">
                    <form class="form-horizontal">
                        <div class="control-group col-md-10">
                            <label class="control-label" for="inputType">Jenis Produk</label>
                            <div class="controls">
                                <input type="text" class="input-simulate" id="jenisproduk" placeholder="Paper - Brosur ">
                            </div>
                        </div>

                        <div class="control-group col-md-10">
                            <label class="control-label" for="inputType">Ukuran</label>
                            <div class="controls">
                                <input type="text" class="input-simulate" id="ukuran" placeholder="A4">
                            </div>
                        </div>

                        <div class="control-group col-md-10">
                            <label class="control-label" for="inputType">Jenis Kertas</label>
                            <div class="controls">
                                <input type="text" class="input-simulate" id="jeniskertas" placeholder="Vinyl">
                            </div>
                        </div>

                        <div class="control-group col-md-10">
                            <label class="control-label" for="inputType">Jumlah Cetakan</label>
                            <div class="controls">
                                <input type="text" class="input-simulate" id="jumlahcetakan" placeholder="300 RIM">
                            </div>
                        </div>

                        <div class="produkbutton text-center">
                            <button type="button" onclick="simulate()">SIMULATE IT</button>
                        </div>
                    </form>

                </div>
            </form>
        </div>
        <div id="resulthours"></div>
    </div>
    <section class="aboutus" id="aboutus">
        <h1>Service With <span>Us</span></h1>
        <!-- <div class="primary">
            <button>Know More</button>
        </div> -->
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <img id="aboutusimg" src="images/logo1_aboutus.png" alt="">
                <div class="card-body">
                    <h3 class="card-title">FAST & CONVINCE</h3>
                    <p class="card-text">Kami menjanjikan ketepatan waktu pengerjaan produk kami dapat terselesaikan
                        dengan cepat. jika kami mengalami keterlambatan maka produk yang dipesan oleh konsumen
                        mendapatkan diskon.</p>
                </div>
            </div>
            <div class="col">

                <img id="aboutusimg" src="images/logo2_aboutus.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-title">QUALITY</h3>
                    <p class="card-text">Kualitas bahan yang kami gunakan
                        dan hasil produk terjamin dan tidak
                        mengecewakan konsumen.</p>


                </div>
            </div>
            <div class="col">
                <img id="aboutusimg" src="images/logo3_aboutus.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-title">SUPPORT ONLINE</h3>
                    <p class="card-text">Kami menyediakan platform online
                        agar para konsumen kami mudah dalam menggunakan jasa kami.</p>

                </div>
            </div>
        </div>
    </section>

    </div>
    <!-- modal -->
    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal" style="overflow: hidden;  padding-right: 0rem;" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><b>Product Detail</b></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    White papers tend to pack a ton of information within their pages. But in reality, many people
                    aren’t going to take the time to read the whole paper cover to cover.

                    Try highlighting a few key takeaways that will get them excited about reading your white paper. Or
                    outline exactly what they will trade their time to learn about.
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal" style="overflow: hidden;  padding-right: 0rem;" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><b>Product Detail</b></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Menyetak stiker sesuai kebutuhan anda. Kami telah banyak memproduksi stiker besar/meteran, beberapa kegunaannya yaitu digunakan sebagai stiker label produk, stiker kendaraan motor mobil, dinding rumah, kaca, meja, stand booth event, pemberitahuan informasi, iklan dan promosi. Tersedia berbagai jenis stiker sesuai kebutuhan seperti Vinyl China, Ritrama, Quantac, Transparan, dan Sandblast. Selain itu tersedia finishing cutting dan laminating glossy/doff.
                    Tinta dan bahan stiker sudah memiliki ketahanan terhadap air, dan daya perekat yang kuat
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal" style="overflow: hidden;  padding-right: 0rem;" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><b>Product Detail</b></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Pencetakan Large Format terdiri dari x banner, roll up banner, spanduk, dan flag banner. Cetakan large format akan sesuai dengan custom desain dan ukuran yang di inginkan oleh customer. Kami menggunakan tiga jenis mesin untuk melakukan pencetakan large format yaitu menggunakan Printer dengan tinta pigment, printer dengan tinta solvent dan printer dengan tinta UV. Untuk bahannya Tersedia dalam bahan Flexy, Albatros, Luster, Banner Cloth, Easy Banner, Kanvas, dan PVC. Bahan yang kita gunakan dijamin dengan kualitas terbaik sehingga kuat dan tahan lama.
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal" style="overflow: hidden;  padding-right: 0rem;" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><b>Product Detail</b></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Cetak kemasan produk dengan custom desain dan ukuran sesuai dengan keinginan customer. Mulai dari soft box, hardbox, hingga corrugated box. Beberapa jenis kertas yang digunakan dalam proses cetak packaging dan kemasan custom di antaranya adalah ivory, duplex/dupleks, karton, food grade grease paper, kraft, samson, linen, jasmine, hingga cardboard. Pelayanan online cepat, mudah, bergaransi, dan terpercaya. Melayani pengiriman se-Indonesia.
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

</html>
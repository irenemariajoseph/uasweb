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

    <!-- header done----------------------------------------------------------------------------------------------------------- -->

    <div class="pilproduk" id="">
        <h1>Our <span>Large Format</span> Digital Printing Product</h1>
        <div class="row">
            <div class="col-sm-4">
                <div class="jenis">
                    <div class="card-img-top  align-items-center">
                        <div>
                            <img class="img-fluid" id="pilprodukimg" src="images/paper_businesscard.png" alt="Card image cap">
                        </div>
                    </div>
                    <br>
                    <h3>Business Card</h3>
                    <br>
                    <form>
                        <div class="form-group">
                            <h4>Pilih Jenis Kertas</h4>
                            <div class="form-group col-md-11">
                                <select id="inputdropdown" class="form-control">
                                    <option selected>Matte</option>
                                    <option>Glossy</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <h4>Ukuran Kertas</h4>
                            <div class="form-group col-md-11">
                                <select id="inputdropdown" class="form-control">
                                    <option selected>A4</option>
                                    <option>A5</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <h4>Jumlah Kertas</h4>
                            <div class="form-group col-md-11">
                                <input type="number" class="form-control" id="jumlahp" name="name">
                            </div>
                        </div>

                        <div class="produkbutton">
                            <button type="button">ADD TO CART</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
            <div class="col-sm-4">
                <div class="jenis">
                    <div class="card-img-top  align-items-center">
                        <div>
                            <img class="img-fluid" id="pilprodukimg" src="images/paper_businesscard.png" alt="Card image cap">
                        </div>
                    </div>
                    <br>
                    <h3>Business Card</h3>
                    <br>
                    <form>
                        <div class="form-group">
                            <h4>Pilih Jenis Kertas</h4>
                            <div class="form-group col-md-11">
                                <select id="inputdropdown" class="form-control">
                                    <option selected>Matte</option>
                                    <option>Glossy</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <h4>Ukuran Kertas</h4>
                            <div class="form-group col-md-11">
                                <select id="inputdropdown" class="form-control">
                                    <option selected>A4</option>
                                    <option>A5</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <h4>Jumlah Kertas</h4>
                            <div class="form-group col-md-11">
                                <input type="number" class="form-control" id="jumlahp" name="name">
                            </div>
                        </div>

                        <div class="produkbutton">
                            <button type="button">ADD TO CART</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
            <div class="col-sm-4">
                <div class="jenis">
                    <div class="card-img-top  align-items-center">
                        <div>
                            <img class="img-fluid" id="pilprodukimg" src="images/paper_businesscard.png" alt="Card image cap">
                        </div>
                    </div>
                    <br>
                    <h3>Business Card</h3>
                    <br>
                    <form>
                        <div class="form-group">
                            <h4>Pilih Jenis Kertas</h4>
                            <div class="form-group col-md-11">
                                <select id="inputdropdown" class="form-control">
                                    <option selected>Matte</option>
                                    <option>Glossy</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <h4>Ukuran Kertas</h4>
                            <div class="form-group col-md-11">
                                <select id="inputdropdown" class="form-control">
                                    <option selected>A4</option>
                                    <option>A5</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <h4>Jumlah Kertas</h4>
                            <div class="form-group col-md-11">
                                <input type="number" style="background-color:#36e367" class="form-control" id="jumlahp" name="name">
                            </div>
                        </div>

                        <div class="produkbutton">
                            <button type="button">ADD TO CART</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>





        <div class="simulation" id="">
            <h1>Not Sure it’s easy and fast?<br>
                <span>SIMULATE IT!</span>
            </h1>

            <div class="formsimulate">
                <form>
                    <div class="form-row">
                        <form class="form-horizontal">
                            <div class="control-group">
                                <label class="control-label" for="inputType">Jenis Produk</label>
                                <div class="controls">
                                    <input type="text" class="input-simulate" id="jenisproduk" placeholder="Paper - Brosur ">
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="inputType">Ukuran</label>
                                <div class="controls">
                                    <input type="text" class="input-simulate" id="ukuran" placeholder="A4">
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="inputType">Jenis Kertas</label>
                                <div class="controls">
                                    <input type="text" class="input-simulate" id="jeniskertas" placeholder="Vinyl">
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="inputType">Jumlah Cetakan</label>
                                <div class="controls">
                                    <input type="text" class="input-simulate" id="jumlahcetakan" placeholder="300 RIM">
                                </div>
                            </div>

                            <div class="produkbutton">
                                <button type="button" onclick="simulate()">SIMULATE IT</button>
                            </div>

                        </form>



                    </div>
                </form>
            </div>
        </div>

        <section id=result>
            <div id=resulthours>

            </div>

        </section>







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
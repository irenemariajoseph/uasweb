<?php
require "conn.php";


SessionActive();


$sql = "SELECT * FROM tbl_produk WHERE prod_category = 'stickers';";
$con = GetConnection();

$hasil = $con->prepare($sql);
$hasil->execute();
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

    <div class="pilproduk" id="">
        <h1>Our <span>Stickers</span> Digital Printing Product</h1>

        <div class="row">

            <?php
            $i = 1;
            while ($row = $hasil->fetch()) :
            ?>
                <div class="col-sm-3" style="margin-bottom: 1.5rem;">
                    <div class="jenis">
                        <div class="card-img-top  align-items-center">
                            <div>
                                <img class="img-fluid" style="object-fit: cover; width:30rem;height: 20rem;" id="pilprodukimg" src="<?php echo $row['foto_produk'] ?>" alt="Card image cap">
                            </div>
                        </div>

                        <br>
                        <h3 style=" text-transform: uppercase;"> <?php echo $row['prod_name'] ?></h3>


                        <br>
                        <form action="javascript:addToCart(paper<?php echo $i ?>)" id="paper<?php echo $i ?>">

                            <input class="product_id" value=<?php echo $row['prod_id']; ?> style="display: none;" />
                            <input class="user_id" value=<?php echo $_SESSION['user_id']; ?> style="display: none;" />


                            <div class="form-group">
                                <h4>Pilih Jenis Kertas</h4>
                                <div class="form-group col-md-11">
                                    <h4 id="inputdropdown" style="margin-right:3rem;" class="form-control">
                                        <?php echo $row['type_ppr'] ?>
                                    </h4>
                                </div>
                            </div>
                            <div class="form-group">
                                <h4>Ukuran Kertas</h4>
                                <div class="form-group col-md-11">
                                    <h4 id="inputdropdown" style="margin-right:3rem;" class="form-control">
                                        <?php echo $row['uk_ppr'] ?>
                                    </h4>
                                </div>
                            </div>
                            <div class="form-group">
                                <h4>Harga</h4>
                                <div class="form-group col-md-11">
                                    <h4 id="inputdropdown" style="margin-right:3rem;" class="form-control">
                                        <?php echo $row['price'] ?>
                                    </h4>
                                </div>
                            </div>
                            <div class="form-group">
                                <h4>Jumlah Kertas</h4>
                                <div class="form-group col-md-11">
                                    <input style="background-color:#36e367" type="number" class="form-control" id="jumlahp" name="name" required>
                                </div>
                            </div>

                            <div class="produkbutton">
                                <button type="submit">ADD TO CART</button>
                            </div>
                        </form>

                    </div>
                </div>
                <br>
                <br>
            <?php
                $i++;
            endwhile;
            ?>
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

        <script type="text/javascript">
            function addToCart(formData) {
                // paperData
                var productData = formData.getElementsByClassName("product_id");
                var productID = productData[0].value;

                // userID
                var userData = formData.getElementsByClassName("user_id");
                var userID = userData[0].value;

                // qty
                var paperData = formData.getElementsByClassName("form-control");
                var qty = paperData[3].value;

                let data = {
                    product_id: productID,
                    qty: qty,
                    user_id: userID
                };

                let req = new XMLHttpRequest();
                req.responseType = 'json';
                req.open("POST", "add_to_cart.php");
                req.setRequestHeader("Accept", "application/json");
                req.setRequestHeader("Content-Type", "application/json");

                req.onreadystatechange = function() {
                    if (req.readyState === 4) {
                        var res = req.response;
                        alert(res['msg']);
                    }
                };

                req.send(JSON.stringify(data));

            }
        </script>
</body>


</html>
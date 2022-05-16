<?php
require "conn.php";
SessionActive();

$user_id = $_SESSION['user_id'];

$sql = "select tbl_produk.* , tbl_cart.* from tbl_produk RIGHT join tbl_cart on tbl_produk.prod_id = tbl_cart.prod_id where user_id = ?;";
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
            text-transform: uppercase;
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
                <a href="productall.php">Product</a>
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
            <!-- <div class="fas fa-user" id="login-btn"></div> -->
        </div>


    </header>
    <div class="pilproduk" id="">
        <h1>Your <span>Cart</span> Product</h1>

        <div class="row">

            <?php
            $i = 1;
            while ($row = $hasil->fetch()) :
            ?>
                <div class="col-sm-3" style="margin-bottom: 1.5rem;">
                    <div class="jenis">
                        <div class="card-img-top  align-items-center">
                            <div>
                                <img class="img-fluid" id="pilprodukimg" src="images/paper_businesscard.png" alt="Card image cap">
                            </div>
                        </div>

                        <br>
                        <h3 style=" text-transform: uppercase;"> <?php echo $row['prod_name'] ?></h3>


                        <br>
                        <!-- <form action="remove_cart.php"> -->

                        <input class="cart_id" value=<?php echo $row['id_cart']; ?> style="display: none;" />
                        <input class="user_id" value=<?php echo $_SESSION['user_id']; ?> style="display: none;" />


                        <div class="form-group">
                            <h4>Jenis Kertas</h4>
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
                                <h4 id="inputdropdown" style="margin-right:3rem;" class="form-control">
                                    <?php echo $row['qty'] ?>
                                </h4>
                            </div>
                        </div>

                        <div class="produkbutton">
                            <button><a href="remove_cart.php?id_cart=<?php echo $row['id_cart'] ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></button>
                        </div>

                        <!-- </form> -->

                    </div>
                </div>
                <br>
                <br>
            <?php
                $i++;
            endwhile;
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
<!-- <script>
    function reqListener() {
        console.log(this.responseText);
    }

    var oReq = new XMLHttpRequest(); // New request object
    oReq.onload = function() {
        // This is where you handle what to do with the response.
        // The actual data is found on this.responseText
        alert(this.responseText); // Will alert: 42
    };
    oReq.open("get", "get_cart.php", true);
    //                               ^ Don't block the rest of the execution.
    //                                 Don't wait until the request finishes to
    //                                 continue.
    oReq.send();
</script>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <title>Read a JSON File</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <style>
        #tbstyle {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 50%;
        }

        #tbstyle td,
        #tbstyle th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #tbstyle tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #tbstyle tr:hover {
            background-color: #ddd;
        }

        #tbstyle th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #859161;
            color: White;
        }
    </style>
</head>

<body>
    <div class="container" style="width:500px;">
        <div class="table-container">
            <?php
            if (isset($res)) {
                echo $res;

            ?>
                <table id="tbstyle">
                    <tbody>
                        <tr>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Education</th>
                            <th>Occupation</th>
                        </tr>
                        <?php foreach ($product_data as $data) { ?>
                            <tr>
                                <td> <?= $data->product_id; ?> </td>
                                <td> <?= $data->product_name; ?> </td>
                                <td> <?= $data->product_type; ?> </td>
                                <td> <?= $data->product_size; ?> </td>
                                <td> <?= $data->product_price; ?> </td>
                            </tr>
                    <?php }
                    } else
                        echo $message;
                    ?>
                    </tbody>
                </table>
        </div>
    </div>
</body>

</html> -->
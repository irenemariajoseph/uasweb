<?php

// require "conn.php";
// $email = ($_SESSION['email']);


// SessionActive();
// $sql = "SELECT role FROM users WHERE email = ? ";
// $con = GetConnection();

// $hasil = $con->prepare($sql);
// $hasil->execute($email);


// if ($role == 'admin') {
//     // return alert('admin');



//     header('Location: adminpage.php');
// } else {
//     // return alert('user');

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

<div class="wrapper">
    <nav class="navbar navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="images/logo_landscape.png" height="80" alt="Ngeprint Logo" loading="lazy" />
            </a>
        </div>
    </nav>
    <h1 class="h1" align="center">Halo, Admin!</h1>

    <div class="content">
        <div class="col text-center">
            <button type="button" class="btn btn-warning btn-lg btn-block">New Orders</button>
        </div>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>Order #</td>
                        <td>Customer</td>
                        <td>Invoice No</td>
                        <td>Product ID</td>
                        <td>Qty</td>
                        <td>Size</td>
                        <td>Status</td>
                        <td>Transaction Photo</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Customer A</td>
                        <td>001</td>
                        <td>PD001</td>
                        <td>20</td>
                        <td>20cm</td>
                        <td>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Pending</option>
                                <option value="1">Ready</option>
                            </select>
                        </td>
                        <td>Foto Transaksi</td>
                        <td>
                            <div class="col text-center">
                                <button type="button" class="btn btn-warning btn-sm" id="button_save">Save</button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Customer B</td>
                        <td>002</td>
                        <td>PD002</td>
                        <td>20</td>
                        <td>20cm</td>
                        <td>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Pending</option>
                                <option value="1">Ready</option>
                            </select>
                        </td>
                        <td>Foto Transaksi</td>
                        <td>
                            <div class="col text-center">
                                <button type="button" class="btn btn-warning btn-sm" id="button_save">Save</button>
                            </div>
                        </td>
                    </tr>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Customer C</td>
                        <td>003</td>
                        <td>PD003</td>
                        <td>20</td>
                        <td>20cm</td>
                        <td>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Pending</option>
                                <option value="1">Ready</option>
                            </select>
                        </td>
                        <td>Foto Transaksi</td>
                        <td>
                            <div class="col text-center">
                                <button type="button" class="btn btn-warning btn-sm" id="button_save">Save</button>
                            </div>
                        </td>
                    </tr>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <footer class="bg-light text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright:
            <a class="text-dark" href="#">Ngeprint</a>
        </div>
        <!-- Copyright -->
    </footer>
</div>

<style>
    body {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .wrapper {
        width: 85%;
        margin: 0 auto;
    }

    .container {
        border-bottom: 2px solid orange;
        margin-bottom: 1rem;
    }

    thead td {
        font-weight: bolder;
        font-size: 1.5rem;
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
        font-size: 1.3rem;
    }
</style>
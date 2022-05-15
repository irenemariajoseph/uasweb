<?php
require "conn.php";



$sql = "SELECT * FROM tbl_pesan where user_id = ? ";
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

<h1>halo masukkan file bukti pembayaran ya</h1>

div class="wrapper">
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
            </tbody>
        </table>
    </div>
</div>
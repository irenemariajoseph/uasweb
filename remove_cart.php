<?php

require "conn.php";


$sql = "delete from tbl_cart where id_cart = ?";

$con = GetConnection();
$hasil = $con->prepare($sql);
$hasil->execute([$_GET['id_cart']]);

header("Location: show_cart.php");

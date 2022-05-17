<?php

require "conn.php";
$con = GetConnection();
SessionActive();


$email = $_POST['email'];
$pass = $_POST['pass'];

$daftarpass =  password_hash($pass, PASSWORD_BCRYPT);

$sql = "UPDATE users SET pass = ? WHERE email = ?";


$hasil = $con->prepare($sql);
$hasil->execute([$daftarpass, $email]);
// alert($pesan_id);
// header("Location: userpage.php");

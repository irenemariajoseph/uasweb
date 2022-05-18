<?php
require "conn.php";
session_abort();
$con = GetConnection();

$email = $_POST['email'];
$pass = password_hash($_POST['pass'], PASSWORD_BCRYPT);
$confirmpass = $_POST['confirmpass'];

$sql2 = "SELECT * FROM users WHERE email = ?";
$hasil2 = $con->prepare($sql2);
$hasil2->execute([$email]);

$sql = "UPDATE users SET pass = ? WHERE email = ?";

try{
    if ($row = $hasil2-> fetch()){
        if ($email == $row['email']){
            if (password_verify($confirmpass, $pass)){
                $hasil = $con->prepare($sql);
                $hasil->execute([$pass, $email]);
                header('Location: formlogin.php');
            } else {
                echo "<script type='text/javascript'>alert('Password baru tidak cocok')
                window.location.href='forget_pass.php';</script>";
            }
        } else {
            return alertforgot("Email anda salah");
        }
    }

} catch (Exception $e){
    return "error";
}

// alert($pesan_id);
// header("Location: userpage.php");

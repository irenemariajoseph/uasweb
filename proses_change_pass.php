<?php
require "conn.php";
SessionActive();
$con = GetConnection();

$email = $_POST['email'];
$pass = password_hash($_POST['pass'], PASSWORD_BCRYPT);
$confirmpass = $_POST['confirmpass'];

$sql2 = "SELECT * FROM users WHERE email = ?";
$hasil2 = $con->prepare($sql2);
$hasil2->execute($email);

$sql = "UPDATE users SET pass = ? WHERE email = ?";

try{
    if ($row = $hasil2-> fetch()){
        if ($email == $row['email']){
            if (password_verify($confirmpass, $pass)){
                $hasil = $con->prepare($sql);
                $hasil->execute([$pass, $email]);
            } else {
                return alertlogin("Password baru tidak cocok");
            }
            header('Location: formlogin.php');
        } else {
            return alertlogin("Email anda salah");
        }
    }

} catch (Exception $e){
    return "error";
}

// alert($pesan_id);
// header("Location: userpage.php");

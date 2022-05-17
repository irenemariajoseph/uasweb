<?php
require "conn.php";
session_start();

$email = $_POST['loginemail'];
$password = $_POST['loginpass'];
$con = GetConnection();

$sql = "SELECT * FROM users WHERE email = ? ";
$result = $con->prepare($sql);
$result->execute([$email]);



if ($row = $result->fetch()) {

    if (password_verify($password, $row['pass'])) {


        $_SESSION['user_id'] = $row['id'];
        $_SESSION['role'] = $row['role'];

        if ($role == "admin") {

            $_SESSION['role'] = $row['role'];

            header('Location: adminpage.php');
        } else {

            $_SESSION['email'] = $row['email'];

            header('Location: userpage.php');
        }
    } else {
        //login gagal

        alert('password atau email anda salah!');


        //solusi error sementara
        // $_SESSION['email'] = $row['email'];
        // header('Location: userpage.php');
    }
} else {
    //login gagal

    header('Location: formlogin.php');

    //solusi error sementara
    // $_SESSION['email'] = $row['email'];
    // header('Location: userpage.php');

}

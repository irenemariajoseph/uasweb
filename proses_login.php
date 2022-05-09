<?php
require "conn.php";


$email = $_POST['loginemail'];
$password = $_POST['loginpass'];
$con = GetConnection();

$sql = "SELECT * FROM users WHERE email = ? ";
$result = $con->prepare($sql);
$result->execute([$email]);


if ($row = $result->fetch()) {
    if (password_verify($password, $row['pass'])) {
        // password cocok
        $_SESSION['email'] = $row['email'];
        SessionActive();
        if ($role == 'admin') {
            header('Location: adminpage.php');
        } else {
            header('Location: home.php');
        }
    } else {
        //login gagal
        header('Location: loginform.php');
    }
} else {
    //login gagal
    header('Location: loginform.php');
}

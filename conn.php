<?php

function GetConnection()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "uas_web";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}


function SessionActive()
{

    session_start();
    if (!isset($_SESSION['email'])) {
        header('Location: formlogin.php');
    }
}

function sessionAdmin()
{

    session_start();
    if (!isset($_SESSION['role']) & $_SESSION['role'] != 'admin') {
        alert($_SESSION['role']);
        header('Location: userpage.php');
    }
}


function alert($msg)
{
    echo "<script type='text/javascript'>alert('$msg')
    window.location.href='formregist.php';</script>";
}

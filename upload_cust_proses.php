<?php

require "conn.php";

$judul = $_POST['judul'];
$judul = strval($judul);
$foto = $_FILES['foto_custom'];
$notes = $_POST['note_custom'];

$ext = explode(".", $foto['name']);
$ext = end($ext);
$ext = strtolower($ext);

// var_dump($judul);
$ext_boleh = ['jpg', 'png', 'jpeg'];

if (in_array($ext, $ext_boleh)) {
    $sumber = $foto['tmp_name'];
    $tujuan = 'upload_custom/' . $foto['name'];


    $con = GetConnection();

    $file_rename =  $judul . "." . $ext; // THIS IS WHERE THE ROW ID ARE NEEDED
    $tujuan = 'upload_custom/' . $file_rename;

    if (move_uploaded_file($sumber, $tujuan)) {
        //Do update for that record in the database
        $query = "UPDATE tbl_pesan SET upload_custom =  ? , notes = ? WHERE pesan_id = ? "; // THIS IS THE UPDATE
        $result =  $con->prepare($query);
        $result->execute([$tujuan, $notes, $judul]);
    } else {
        echo "file tidak valid";
    }
} else {
    echo "file tidak valid";
}

header('Location: pesanan.php');

// }

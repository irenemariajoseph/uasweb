<?php

require "conn.php";


$judul = $_POST['judul'];
$foto = $_FILES['foto'];

$ext = explode(".", $foto['name']);
$ext = end($ext);
$ext = strtolower($ext);


$ext_boleh = ['jpg', 'png', 'jpeg'];

if (in_array($ext, $ext_boleh)) {
    $sumber = $foto['tmp_name'];
    $tujuan = 'uploads/' . $foto['name'];


    $con = GetConnection();
    // $query = "SELECT `AUTO_INCREMENT`
    // FROM  INFORMATION_SCHEMA.TABLES
    // WHERE TABLE_SCHEMA = 'unimedia_senin' AND table_name = 'gallery'"; // THIS IS WHERE YOU GET NEXT INCREMENTAL ROW ID VALUE
    // $next_insert_id =  $con->prepare($query)->execute();




    // File destination


    $file_rename =  $judul . $nambah . "." . $ext; // THIS IS WHERE THE ROW ID ARE NEEDED
    $tujuan = 'uploads_trans/' . $file_rename;

    if (move_uploaded_file($sumber, $tujuan)) {
        //Do update for that record in the database
        $query = "INSERT INTO tbl_pesan foto_pemb VALUES ? WHERE pesan_id = ?  "; // THIS IS THE UPDATE
        $result =  $con->prepare($query);
        $result->execute([$judul, $tujuan]);
    } else {
        echo "file tidak valid";
    }



    // $sql = "INSERT INTO gallery (judul, foto) VALUES (?,?) ";
    // $result = $con->prepare($sql);
    // $result->execute([$judul, $tujuan]);
} else {
    echo "file tidak valid";
}

header('Location: pesanan.php');

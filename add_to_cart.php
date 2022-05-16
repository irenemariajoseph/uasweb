<?php
    require "conn.php";
    require "struct.php";
    $conn = GetConnection();

    header('Content-Type: application/json; charset=utf-8');

    $inputJSON = file_get_contents('php://input');
    $input = json_decode($inputJSON, TRUE);

    $product_id = $input['product_id'];
    $qty = $input['qty'];
    $user_id = $input['user_id'];

    $query = "INSERT INTO tbl_cart(prod_id, user_id, qty) VALUES (?, ?, ?)";

    $res = new ResponseCart();

    try {
        $prepare = $conn->prepare($query);
        $prepare->execute([$product_id, $user_id, $qty]);
    } catch (Exception $e) {
        $res->msg = "Aduh, gagal tambahin produk kamu nih";
        echo json_encode($res);
        return;
    }

    $res->msg = "Berhasil memasukkan kedalam cart";
    echo json_encode($res);
?>
<?php
    require "conn.php";
    require "struct.php";
    $conn = GetConnection();
    $checkCartConn = GetConnection();

    header('Content-Type: application/json; charset=utf-8');

    $inputJSON = file_get_contents('php://input');
    $input = json_decode($inputJSON, TRUE);

    $product_id = $input['product_id'];
    $qty = $input['qty'];
    $user_id = $input['user_id'];

    $res = new ResponseCart();

    // check if cart with user and productid already exist
    $check_cart = "SELECT * FROM tbl_cart where user_id = ? AND prod_id = ?";
    $prepare_check_cart = $checkCartConn->prepare($check_cart);
    $prepare_check_cart->execute([$user_id, $product_id]);

    if ($row = $prepare_check_cart->fetch()) {
        $cart_id = $row['id_cart'];
        $update_qty = $row['qty'] + $qty;
        try {
            $updateCartConn = GetConnection();
            $queryUpdateCart = "UPDATE tbl_cart SET qty = ? WHERE id_cart = ?";
            $prepare_update_cart = $updateCartConn->prepare($queryUpdateCart);
            $prepare_update_cart->execute([$update_qty, $cart_id]);
        } catch (Exception $e) {
            $res->msg = "Aduh, gagal tambahin produk kamu nih";
            echo json_encode($res);
            return;
        }
    } else {
        try {
            $query = "INSERT INTO tbl_cart(prod_id, user_id, qty) VALUES (?, ?, ?)";
            $prepare = $conn->prepare($query);
            $prepare->execute([$product_id, $user_id, $qty]);
        } catch (Exception $e) {
            $res->msg = "Aduh, gagal tambahin produk kamu nih";
            echo json_encode($res);
            return;
        }
    }

    $res->msg = "Berhasil memasukkan kedalam cart";
    echo json_encode($res);
?>
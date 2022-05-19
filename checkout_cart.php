<?php
require "conn.php";
require "struct.php";
$conn = GetConnection();
$userConn = GetConnection();

$user_id = $_POST['user_id'];
$jenis_pembayaran = $_POST['jenis_pembayaran'];
$pick_up = $_POST['pickup'];
$tgl_pickup = $_POST['tgl_pickup'];
$jam_pickup = $_POST['jam_pickup'];
$pemb_status = 'Tidak Terverifikasi';
$pickup_status = 'Belum Siap';
$foto_pemb = 'images/nophoto.png';

$query_get_cart = "SELECT * FROM tbl_cart WHERE user_id = ?";
$result_cart = $conn->prepare($query_get_cart);
$result_cart->execute([$user_id]);

$query_get_user = "SELECT * FROM users WHERE id = ?";
$result_user = $userConn->prepare($query_get_user);
$result_user->execute([$user_id]);
$user_data = $result_user->fetch();

while ($cart_data = $result_cart->fetch()) {

    $connGetProduct = GetConnection();
    $connInsertTransaksi = GetConnection();
    $connDecreaseQuota = GetConnection();
    $connDeleteCart = GetConnection();

    $query_get_product = "SELECT * FROM tbl_produk WHERE prod_id = ?";
    $result_product = $connGetProduct->prepare($query_get_product);
    $result_product->execute([$cart_data['prod_id']]);
    $product_data = $result_product->fetch();

    $sub_total = $product_data['price'] * $cart_data['qty'];
    $pajak = $sub_total * 0.11;
    $grand_total = $sub_total + $pajak;

    $query_insert_transaksi = "INSERT INTO 
                tbl_pesan(prod_id, user_id, username, email, no_telp, jenis_pemb, cara_pickup, tgl_pickup, jam_pickup, pemb_status, pickup_status, jmlh_brg, subtotal, pajak, harga_total, foto_pemb, trans_date)
            VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?, now())";
    $prepare_insert_transaksi = $connInsertTransaksi->prepare($query_insert_transaksi);
    $prepare_insert_transaksi->execute([
        $cart_data['prod_id'],
        $user_data['id'],
        $user_data['username'],
        $user_data['email'],
        $user_data['no_telp'],
        $jenis_pembayaran,
        $pick_up,
        $tgl_pickup,
        $jam_pickup,
        $pemb_status,
        $pickup_status,
        $cart_data['qty'],
        $sub_total,
        $pajak,
        $grand_total,
        $foto_pemb
    ]);


    $query_delete_cart = "DELETE FROM tbl_cart WHERE id_cart = ?";
    $prepare_delete_cart = $connDeleteCart->prepare($query_delete_cart);
    $prepare_delete_cart->execute([$cart_data['id_cart']]);


    $new_stock = $product_data['stock'] - $cart_data['qty'];
    $query_decrease_quota = "UPDATE tbl_produk SET stock = ? WHERE prod_id = ?";
    $prepare_decrease_quota = $connDecreaseQuota->prepare($query_decrease_quota);
    $prepare_decrease_quota->execute([$new_stock, $cart_data['prod_id']]);
}

$res = new ResponseCart();
$res->msg = "Barang-barang kamu berhasil di checkout";
echo json_encode($res);
header('Location: pesanan.php');

    // $product_ids = $_POST['product_id'];
    // $qtys = $_POST['qty'];
    // $user_id = $_SESSION['user_id'];

    // $checkout_product_ids = explode(",", $product_ids);
    // $checkout_product_qty = explode(",", $qtys);

    // if (sizeof($checkout_product_ids) != sizeof($checkout_product_qty)) {
    //     return alert("broken checkout request");
    // }

    // for($i = 0; $i < sizeof($checkout_product_ids); $i++) {
    //     try {
    //         $insert_query = "INSERT INTO tbl_cart(prod_id, user_id, qty) VALUES ($1, $2, $3)";
        
    //         $insert_prepare = $conn->prepare($insert_query);
    //         $insert_prepare->execute([$checkout_product_ids[$i], $user_id, $qtys[$i]]);
    //     } catch (Exception $e) {
    //         echo "<script>console.log('error: " . $e->getMessage() . ", product_id: ". $checkout_product_ids[$i] . ", user_id: " . $user_id . " ' );</script>";
    //         continue;
    //     }
    // }

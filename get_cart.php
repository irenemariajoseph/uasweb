<?php

    require "conn.php";
    require "struct.php";
    $conn = GetConnection();

    $user_id = $_GET['user_id'];

    $query = "SELECT * FROM tbl_cart WHERE user_id = ? ORDER BY id_cart ASC";
    $result = $conn->prepare($query);
    $result->execute([$user_id]);


    $res = new ResponseGetCart();
    $product_datas = [];
    $total_price = 0;

    while($row = $result->fetch()) {
        $product_data = new ProductData();
        $product_data->cart_id = $row['id_cart'];
        $product_data->product_qty = $row['qty'];

        $prodConn = GetConnection();
        $query_product = "SELECT * FROM tbl_produk WHERE prod_id = ?";
        $result_product = $prodConn->prepare($query_product);
        $result_product->execute([$row['prod_id']]);
        $productFetch = $result_product->fetch();

        $product_data->product_id = $productFetch['prod_id'];
        $product_data->product_name = $productFetch['prod_name'];
        $product_data->product_type = $productFetch['type_ppr'];
        $product_data->product_size = $productFetch['uk_ppr'];
        $product_data->product_price = $productFetch['price'];

        array_push($product_datas, $product_data);

        $subtotal = $row['qty'] * $productFetch['price'];
        $product_data->sub_total = $subtotal;
        $total_price = $total_price + $subtotal;
    }

    $res->product_data = $product_datas;
    $res->total_price = $total_price;

    echo json_encode($res);
?>
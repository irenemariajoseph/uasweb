<?php
    require "conn.php";
    $conn = GetConnection();

    SessionActive();

    $product_ids = $_POST['product_id'];
    $qtys = $_POST['qty'];
    $user_id = $_SESSION['user_id'];

    $checkout_product_ids = explode(",", $product_ids);
    $checkout_product_qty = explode(",", $qtys);

    if (sizeof($checkout_product_ids) != sizeof($checkout_product_qty)) {
        return alert("broken checkout request");
    }

    for($i = 0; $i < sizeof($checkout_product_ids); $i++) {
        try {
            $insert_query = "INSERT INTO tbl_cart(prod_id, user_id, qty) VALUES ($1, $2, $3)";
        
            $insert_prepare = $conn->prepare($insert_query);
            $insert_prepare->execute([$checkout_product_ids[$i], $user_id, $qtys[$i]]);
        } catch (Exception $e) {
            echo "<script>console.log('error: " . $e->getMessage() . ", product_id: ". $checkout_product_ids[$i] . ", user_id: " . $user_id . " ' );</script>";
            continue;
        }
    }

?>
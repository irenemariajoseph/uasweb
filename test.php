<?php 

    session_start();

    $url = "http://localhost/uasweb/get_cart.php?user_id=".$_SESSION['user_id'];

    $cart_data = file_get_contents($url);

    var_dump($cart_data);

?>
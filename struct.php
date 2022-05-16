<?php 

    class ResponseCart {
        public $msg;
    }

    class ResponseGetCart {
        public $product_data;
        public $total_price;
    }

    class ProductData {
        public $cart_id;
        public $product_id;
        public $product_name;
        public $product_type;
        public $product_size;
        public $product_price;
        public $product_qty;
        public $sub_total;
    }
?>
<?php
    session_start();
    
    Class Products{
        public $id;
        public $name;
        public $price;
    }
    
    include('products_all.php');
    $products = new Products();
    if (isset($_GET['id'])) {
        $products->id = $_GET['id'];
        $products->name = $_GET['name'];
        $products->price = $_GET['price'];
    }

?>
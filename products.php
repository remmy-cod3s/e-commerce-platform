<?php
    // session_start();
?>


<?php

class Product{
    public $product_id;
    public $name;
    public $price;
    public $image;

    function set_details($product_id, $name, $price, $image){
        $this->product_id = $product_id;
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
    }

    function return_product($product_id, $name, $price, $image){
        return array(
        );
    }

}
$product_list = [];

$product1 = new Product();
$product1->set_details(1, "Amartem Forte", 4500, "img/arrives1.webp");
$product2 = new Product();
$product2->set_details(2, "Ginger beauty", 50000, "img/arrives2.webp");
$product3 = new Product();
$product3->set_details(3, "Meconerv Forte Caps", 4500, "img/placeholder.webp");
$product4 = new Product();
$product4->set_details(4, "Pythrocin Azithromycin 500mg", 1450, "img/placeholder.webp");
$product5 = new Product();
$product5->set_details(5, "Astyfer Capsules", 2600, "img/placeholder.webp");
$product6 = new Product();
$product6->set_details(6, "Lisinopril 5mg (Pharmamax)", 650, "img/placeholder.webp");

$product_list = [$product1, $product2, $product3, $product4, $product5, $product6];







?>
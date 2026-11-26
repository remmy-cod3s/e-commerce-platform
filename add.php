<?php
session_start();
require_once('products.php');
header('Content-Type: application/json');

if (!isset($_GET['id'])) {
    echo json_encode(["status" => "failed", "message" => "no id"]);
    exit;
}

$id = intval($_GET['id']);

if (!isset($product_list[$id - 1])) {
    echo json_encode(["status" => "failed", "message" => "invalid product id"]);
    exit;
}

$_SESSION['Cart'][$id] = ($_SESSION['Cart'][$id] ?? 0) + 1;
$product = $product_list[$id - 1];

echo json_encode([
    "status" => "success",
    "cart_count" => count($_SESSION['Cart']),
    "product_name" => $product->name,
    "product_price" => $product->price,
    "product_image" => $product->image
]);
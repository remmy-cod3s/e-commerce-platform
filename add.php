<?php 
session_start();
require_once('products.php');
// unset($_SESSION['Cart']);
?>

<?php 

if (!isset($_GET['id'])){
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode(["status" => "failed", "message" => "missing id"]);
    exit();
}


if(isset($_SESSION['Cart']) && is_array($_SESSION['Cart'])){
    $id = $_GET['id'];
    if (isset($_SESSION['Cart'][$id])) {
    $_SESSION['Cart'][$id] = $_SESSION['Cart'][$id] + 1;
} else {
    $_SESSION['Cart'][$id] = 1;
}
    $cart = $_SESSION['Cart'];
    
    $cart_count = count($cart);
    // $cart_count++;
    
}
else{
    $_SESSION['Cart'] = array();
    $id = $_GET['id'];
    $_SESSION['Cart'][$id] = 1;
    $cart = $_SESSION['Cart'];
    $cart_count = count($cart);
    // $cart_count++;
}

header('Content-Type: application/json; charset=utf-8');
if (isset($_GET['id'])){
    $id_value = intval($_GET['id']);
    if (isset($product_list[$id_value - 1 ])){

        $selected_product = $product_list[$id_value - 1];
       echo json_encode([
        "status" => "success",
        "cart_count" => $cart_count,
        "product_name" => $selected_product->name,
        "product_price" => $selected_product->price,
        "product_image" => $selected_product->image
       ]);
       exit();
    }
    else{
         $data = [
    "status" => "failed",
    "message" => "invalid product id",
];
echo json_encode($data);
    }
}
else{
    $data = [
    "status" => "failed",
    "message" => "invalid product id",
];
echo json_encode($data);
exit();
}




?>
<?php 
session_start();
// unset($_SESSION['Cart']);
?>

<?php 

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
    echo($cart_count);
    print_r($_SESSION['Cart']);
}
else{
    $_SESSION['Cart'] = array();
    $id = $_GET['id'];
    $_SESSION['Cart'][$id] = 1;
    $cart = $_SESSION['Cart'];
    $cart_count = count($cart);
    // $cart_count++;
    echo($cart_count);
}
?>
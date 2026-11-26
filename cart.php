<?php 
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
    <header class="navbar">
        <div class=" container navbar-top">
            <p>PAY <span class = "red-text">0 NAIRA</span> ON ONEHEALTH. Refer friends and earn cash to shop for free</p>
            <h3> START EARNING</h3>
            
        </div>
        <div class=" container navbar-middle">
            <img src="img/logo.svg">
            <div class="search-bar">
                <form action="">
                    <input type="text" placeholder="Search for products, brands and categories...">
                </form>
                <button class="button-dark-green">search</button>
            </div>
            <ul class="horizontal-list">
                <li><a href="#">🔥Top Bundles</a></li>
                <li><a href="#"><img src="img/profile.png">Account</a></li>
                <li><a href="#"><img src="img/telephone.png"></a></li>
                <li><a href="#"><span class="cart-icon"><img src="img/cart.png"><span class="cart-badge" id="cart-badge"><?php echo isset($_SESSION['Cart']) ? count($_SESSION['Cart']) : 0; ?></span></span>Cart</a></li>
            </ul>
        </div>
        <div class="container navbar-bottom-desktop">
            <ul class="horizontal-list">
                <li> <img src="img/menu.png"> Catergories</li>
                <li>His Health</li>
                <li>Her Health</li>
                <li>Sexual Health</li>
                <li>Multivitamins</li>
            </ul>

            <ul class="horizontal-list">
                <li><button class="white-outline">Upload Presciption</button></li>
                <li>Health Calculators</li>
                <li>Blog</li>
            </ul>
        </div>
    </header>


    <section class="flow">
        <span class="circle"></span><span class="line"></span><span class="circle"></span><span class="line"></span><span class="circle"></span>
        <div class="flow-text-content">
            <div class="flow-text">
                <h5>Cart</h5>
                <p class="muted">Confirm your order.</p>
            </div>
            <div class="flow-text">
                <h5>Checkout</h5>
                <p class="muted">Make sure all your details are correct.</p>
        </div>
            <div class="flow-text">
                <h5>Payment</h5>
                <p>Select payment method and pay.</p>
            </div>
        </div>
    </section>

    <div class="cart-options">
        <span class="page-title"><a href="index.php">←</a> Your Cart</span>
        <a href="clear"> Clear cart</a>
    </div>

    <div class="green-banner">
        <h4> Pickup is only available when all items are from the same pharmacy. </h4>
    </div>

    <section class="cart-content">
        <div class="cart-list">
            <div class="cart-counter">
                <h3>Cart</h3>
                <p>You have <?php echo isset($_SESSION['Cart']) ? count($_SESSION['Cart']) : 0; ?> items in your cart</p>
            </div>
            <div class="cart-item">
                <img src="img/cart.png" alt="">
                <div class="cart-item-text">
                    <div class="item-heading">
                        <h2>product name</h2>
                        <a href="">Empty Cart</a>
                    </div>

                    <div class="section-flex">
                        <div class="counter-button">
                            <button>-</button>
                            <p>item count</p>
                            <button>+</button>
                        </div>
                        <h5 class="item-price">product price</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="order-summary">
            <p><img src="img/cart.png" alt=""> ORDER SUMMARY</p>
            <div class="section-flex"> 
                <h5>Subtotal (<?php echo isset($_SESSION['Cart']) ? count($_SESSION['Cart']) : 0; ?> item(s)) </h5>
                <p>price times quanity</p>
        </div>
            <div class="section-flex">
                <h5>Delivery</h5>
                <p class="-muted">Calculated at checkout</p>
            </div>

            <div class="summary-total">
                <h5>Total</h5>
                <p class="price-green"></p>
            </div>

            <div class="navigation-buttons"> 
                <a href="">proceed to checkout</a>
                <a href="/e-commerce-platform/index.php">continue shopping</a>
            </div>
            
        </div>
    </section>
</body>
</html>
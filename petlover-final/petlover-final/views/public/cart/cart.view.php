<!DOCTYPE html>
<html>
<head>
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="../../../lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../../../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../../../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <style>
        /* Navbar Styles */
        .navbar {
            background-color: black; 
        }
        .navbar-nav .nav-link {
            font-weight: 500;
            padding: 10px 15px;
            color: white;
            transition: color 0.3s ease-in-out;
        }
        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            color: #ED6436; 
        }
        .d-flex a {
            color: white;
            transition: color 0.3s ease-in-out;
        }
        .d-flex a:hover {
            color: #ED6436;
        }
        
        /* Product Grid Styles */
        .product-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr); 
            gap: 20px; 
            max-width: 1000px;
            margin: auto;
        }
        .product-card {
            background: white;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }
        .product-card:hover {
            transform: scale(1.05);
        }
        .product-card img {
            width: 100%; 
            height: 200px; 
            object-fit: contain; 
            border-radius: 8px; 
        }
        .product-title {
            font-size: 18px;
            font-weight: bold;
            margin: 10px 0;
        }
        .product-price {
            color: #28a745;
            font-size: 16px;
            font-weight: bold;
        }
        .custom-img {
            width: 400px;  
            height: 200px;
            border-radius: 20px;
            object-fit: contain;
        }

        /* Cart Styles */
        .cart-container {
            max-width: 900px;
            margin: 40px auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            padding: 20px;
        }
        .cart-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }
        .cart-title {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }
        .continue-shopping {
            color: #ED6436;
            text-decoration: none;
            font-weight: 500;
            display: flex;
            align-items: center;
        }
        .continue-shopping:hover {
            text-decoration: underline;
        }
        .cart-items {
            margin-bottom: 30px;
        }
        .cart-item {
            display: flex;
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }
        .item-image {
            width: 100px;
            height: 100px;
            object-fit: contain;
            margin-right: 20px;
            border-radius: 5px;
        }
        .item-details {
            flex: 1;
        }
        .item-name {
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 5px;
        }
        .item-price {
            color: #28a745;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .item-description {
            color: #666;
            font-size: 14px;
            margin-bottom: 10px;
        }
        .quantity-controls {
            display: flex;
            align-items: center;
        }
        .quantity-btn {
            width: 30px;
            height: 30px;
            background: #f0f0f0;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            border-radius: 4px;
            user-select: none;
        }
        .quantity-btn:hover {
            background: #e0e0e0;
        }
        .quantity-input {
            width: 50px;
            height: 30px;
            text-align: center;
            margin: 0 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .remove-item {
            margin-left: 20px;
            color: #dc3545;
            cursor: pointer;
            display: flex;
            align-items: center;
        }
        .remove-item i {
            margin-right: 5px;
        }
        .item-total {
            font-weight: bold;
            min-width: 80px;
            text-align: right;
        }
        .cart-summary {
            background: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
        }
        .summary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        .summary-row.total {
            font-weight: bold;
            font-size: 18px;
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px solid #ddd;
        }
        .checkout-btn {
            background: #ED6436;
            color: white;
            border: none;
            width: 100%;
            padding: 12px;
            border-radius: 5px;
            font-weight: bold;
            margin-top: 15px;
            cursor: pointer;
            transition: background 0.3s;
        }
        .checkout-btn:hover {
            background: #d55a2f;
        }
        
        /* Responsive styles */
        @media (max-width: 768px) {
            .product-grid {
                grid-template-columns: repeat(2, 1fr); 
            }
            .cart-item {
                flex-direction: column;
            }
            .item-image {
                width: 100%;
                height: auto;
                margin-bottom: 15px;
            }
            .item-total {
                text-align: left;
                margin-top: 10px;
            }
        }
        @media (max-width: 480px) {
            .product-grid {
                grid-template-columns: repeat(1, 1fr); 
            }
            .cart-header {
                flex-direction: column;
                align-items: flex-start;
            }
            .continue-shopping {
                margin-top: 10px;
            }
        }
        
        /* Fixed the missing styles for logout button */
        .bg-orange {
            background-color: #ED6436;
            color: white;
        }
        .bg-orange:hover {
            background-color: #d55a2f;
            color: white;
        }
    </style>
</head>
<body>
    <!-- Navbar Start -->
    <?php
    $current_page = basename($_SERVER['PHP_SELF']);
    ?>
    <?php
require_once __DIR__.'../../../layout/public/nav.php';

// dd($_SESSION);
?>

    

    <!-- Cart Section Start -->
    <div class="container">
        <div class="cart-container">
            <div class="cart-header">
                <div class="cart-title">Shopping Cart</div>
                <a href="/shoping" class="continue-shopping">
                    <i class="fas fa-arrow-left me-2"></i> Continue Shopping
                </a>
            </div>

            <div class="cart-items">
            <?php if (isset($_SESSION['productCart'])): ?>
                    <!-- End Cart List Title -->
                    <?php foreach ($_SESSION['productCart'] as $key => $product): ?>
                        <div class="cart-item">
                            <img src="<?= $product['image_url'] ?>" alt="Premium Dog Food" class="item-image">
                            <div class="item-details">
                                <div class="item-name"><?= $product['product_name'] ?></div>
                                <div class="item-price"><?= $product['price'] ?></div>
                                <div class="item-description"><?= $product['description'] ?></div>
                                <div class="quantity-controls">
                                    
                                    <a href="/user/cart/remove/<?= $key ?>">
                                        <div class="remove-item">
                                            <i class="fas fa-trash-alt"></i> Remove
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                <?php else: ?>
                    <h2>Cart is empty</h2>
                <?php endif; ?>

                
            <div class="cart-summary">
                <div class="summary-row">
                    <span>Subtotal</span>
                    <span><?= $sumPrice ?></span>
                </div>
                <div class="summary-row">
                    <span>Shipping</span>
                    <span>free</span>
                </div>
                <div class="summary-row">
                    <span>Discount</span>
                    <span>10 %</span>
                </div>
                <div class="summary-row total">
                    <span>Total</span>
                    <span><?= $finalPrice ?></span>
                </div>
                <a href="/user/checkout">
                    <button class="checkout-btn">Proceed to Checkout</button>
                </a>
            </div>
        </div>
    </div>
    <!-- Cart Section End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Cart Functionality JavaScript -->


<!-- Footer Start -->
<div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-4 col-md-12 mb-5">
                <h1 class="mb-3 display-5 text-capitalize text-white"><span class="text-primary">Pet</span>Lover</h1>
                <p class="m-0">Make your pet's moments full of happiness! Whether you're looking for fun toys, healthy food, or stylish accessories, we have everything your cat or dog needs to live comfortably and happily!Don't deprive them of the best! Shop now and add a touch of love to their lives!</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Get In Touch</h5>
                        <p><i class="fa fa-phone-alt mr-2"></i>+962787249421</p>
                        <p><i class="fa fa-envelope mr-2"></i>albaderkhalil@gmail.com</p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" target="_blank"  href="https://www.instagram.com/kh_albader_22/"><i class="fab fa-github"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" target="_blank"  href="https://web.facebook.com/profile.php?id=100009558996825&locale=ar_AR"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" target="_blank"  href="https://www.linkedin.com/in/khalil-al-bader-24a09224b/"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" target="_blank"  href="https://www.instagram.com/kh_albader_22/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Popular Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" <?= ($current_page == 'home.view.php') ? 'active' : '' ?> href="/home"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-white mb-2" <?= ($current_page == 'about.view.php') ? 'active' : '' ?> href="/about"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                            <a class="text-white mb-2" href="/shoping"><i class="fa fa-angle-right mr-2"></i>Shop now </a>
                            <a class="text-white" href="/contact"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <div class="d-flex flex-column justify-content-start">
                            <img class="img-fluid mb-4 custom-img" src="/public/images/footer22.png" alt="">
                </div>
            </div>
        </div>
    </div>
    </html>

    
  
</body>
</html>
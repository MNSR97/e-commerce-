


<!DOCTYPE html>
 <head>
 


    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Flaticon Font -->
    <link href="../../../lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../../../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../../../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= asset('/css/style.css')?>" rel="stylesheet">
    <link href="<?= asset('/css/styleShop.css')?>" rel="stylesheet">
    <link href="<?= asset('/css/profile.css')?>" rel="stylesheet">
 <style>
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
            color:#28a745;
            font-size: 16px;
            font-weight: bold;
        }
        .custom-img {
           width: 400px;  
           height: 200px;
           border-radius: 20px;
           
           object-fit: contain;
        }

        @media (max-width: 768px) {
            .product-grid {
                grid-template-columns: repeat(2, 1fr); 
            }
        }

        @media (max-width: 480px) {
            .product-grid {
                grid-template-columns: repeat(1, 1fr); 
            }
        }
        
    </style>
    </head>
 <!-- Navbar Start -->
 <?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-black px-4">
    <div class="container-fluid">

        <a class="navbar-brand fw-bold text-white" href="#">
            <h1 class="mb-3 display-5 text-capitalize text-white"><span class="text-primary">Pet</span>Lover</h1>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?= ($current_page == 'home.view.php') ? 'active' : '' ?>" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($current_page == 'about.view.php') ? 'active' : '' ?>" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($current_page == 'shoping.view.php') ? 'active' : '' ?>" href="/shoping">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($current_page == 'contact.view.php') ? 'active' : '' ?>" href="/contact">Contact</a>
                </li>
            </ul>
        </div>

        <div class="d-flex align-items-center gap-3">
            <a href="/profile" class="text-white mx-1"><i class="fa-regular fa-user fs-5"></i></a>
            <a href="/user/cart" class="text-white mx-1"><i class="fa-solid fa-cart-shopping fs-5"></i></a>
            <form action="/logout" method="post">
            <button type="submit" class="btn bg-orange;" >
            <i class="fa-solid fa-arrow-right-from-bracket fs-5"></i>
            </button>
            </form>
          
            
        </div>
    </div>
</nav>


   


<body>  
    <!-- <h2>Search Products</h2>
    <input type="text" id="search" placeholder="Search user..." autocomplete="off">
    <div id="result"></div> -->
<div class="container">
        <div class="container">
        <h1 class="text-center mt-5"><?= htmlspecialchars($pageTitle) ?></h1>

        <a href="/shoping/category/1" class="btn btn-primary my-4 mx-2">Foods</a>


        <a href="/shoping/category/2" class="btn btn-primary my-4 mx-2">Accessories</a>
        
        <a href="/shoping" class="btn btn-primary my-4 mx-2">All Products</a>
       

    </div>

       

        <div class="row">
            <?php foreach ($products as $product): ?>
            <div class="col-md-4 col-sm-6">
                <div class="product-card ">
                    <div class="position-relative">
                        <img src="<?= htmlspecialchars($product['image_url']) ?>" 
                             alt="<?= htmlspecialchars($product['product_name']) ?>" 
                             class="card-image">
                        <div class="card-badge">
                            Popular
                        </div>
                    </div>
                    <div class="card-content">
                        <h3 class="product-title"><?= htmlspecialchars($product['product_name']) ?></h3>
                        <p class="product-description">
                            <?= htmlspecialchars($product['description']) ?>
                        </p>
                        <div class="product-meta">
                            <div>
                                <span class="price-tag">$<?= number_format($product['price'], 2) ?></span>
                                <div class="rating">
                                    ★★★★☆ <span class="rating-count">(24)</span>
                                </div>
                            </div>
                            <a href="/user/addToCart/<?php echo $product['id'] ?>"
                            
                               class="btn btn-primary-custom">
                                Add to Cart
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const addToCartButtons = document.querySelectorAll(".btn-primary-custom");

        addToCartButtons.forEach(button => {
            button.addEventListener("click", function (event) {
                event.preventDefault(); //   

                let productUrl = this.getAttribute("href");

                fetch(productUrl)
                    .then(response => {
                        if (response.ok) {
                            return response.text();
                        }
                        throw new Error("Error adding product to cart");
                    })
                    .then(() => {
                        location.reload(); //  
                    })
                    .catch(error => {
                        console.error(error);
                    });
            });
        });
    });
</script>

</body>
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
                            <img class="img-fluid mb-4 custom-img" src="<?= asset('/images/footer22.png')?>" alt="">
                </div>
            </div>
        </div>
    </div>
    </html>

    
  







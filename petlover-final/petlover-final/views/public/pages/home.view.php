<!DOCTYPE html><html lang="en">

<head>
    <meta charset="utf-8">
    <title>PetLover - Pet Care Website Template</title>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PetLover - Pet Care Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
   
    <style>
     
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

        .shop-now:hover{ 

            color:white !important;
            border:4px inset #ED6436 !important;
            font-weight: 700 !important;
             
        }
    </style>
</head>


<body>
    
<?php
require_once __DIR__.'../../../layout/public/nav.php';

// dd($_SESSION);
?>
    


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="<?= asset('/images/carousel-1.jpg')?>" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h3 class="text-white mb-3 d-none d-sm-block">Best Pet Services</h3>
                            <h1 class="display-3 text-white mb-3">Keep Your Pet Happy</h1>
                            <h5 class="text-white mb-3 d-none d-sm-block">Make your pet happy always!Take care of their food, comfort and toys so they can live a life full of fun and love!</h5>
                            <a href="/shoping" class="btn btn-lg shop-now btn-primary mt-3 mt-md-4 px-4">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="<?= asset('/images/carousel-2.jpg')?>" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h3 class="text-white mb-3 d-none d-sm-block">Best Pet Services</h3>
                            <h1 class="display-3 text-white mb-3">Pet Spa & Grooming</h1>
                            <h5 class="text-white mb-3 d-none d-sm-block">Make your pet happy always!Take care of their food, comfort and toys so they can live a life full of fun and love!</h5>
                            <a href="/shoping" class="btn btn-lg shop-now btn-primary mt-3 mt-md-4 px-4">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-primary rounded" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-primary rounded" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Services Start -->
    <div class="container-fluid bg-light pt-5">
        <div class="container py-5">
            <div class="d-flex flex-column text-center mb-5">
                <h4 class="text-secondary mb-3">Our Services</h4>
                <h1 class="display-4 m-0"><span class="text-primary">Premium</span> Pet Services</h1>
            </div>
    <div class="row pb-3">
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5 h-100">
                <h3 class="fa fa-shopping-bag display-3 text-secondary mb-3"></h3>
                <h3 class="mb-3">Pet Accessories</h3>
                <p class="flex-grow-1">We provide the best accessories for your pets, whether you're looking for stylish collars, comfortable beds, or more! Make your pet happier and more comfortable with our premium products.</p>
                <a href="/shoping/category/2" class="btn btn-lg shop-now btn-primary mt-3 mt-md-4 px-4">Shop Now</a>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5 h-100">
                <h3 class="fa fa-utensils display-3 text-secondary mb-3"></h3>
                <h3 class="mb-3">Pet Feeding</h3>
                <p class="flex-grow-1">We offer nutritious and healthy meals for your pets according to their specific needs! Make your pet happier today.</p>
                <a href="/shoping/category/1" class="btn btn-lg shop-now btn-primary mt-3 mt-md-4 px-4">Shop Now</a>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5 h-100">
                <h3 class="fa fa-bone display-3 text-secondary mb-3"></h3>
                <h3 class="mb-3">Pet Games</h3>
                <p class="flex-grow-1">We make your pet's time more fun with interactive games that stimulate their intelligence and keep them active. Enjoy the best pet games now!</p>
                <a href="/shoping/category/2" class="btn btn-lg shop-now btn-primary mt-3 mt-md-4 px-4">Shop Now</a>
            </div>
        </div>
    </div>
</div>
                
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Features Start -->
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <img class="img-fluid w-100" src="<?= asset('/images/feature.jpg')?>" alt="">
            </div>
            <div class="col-lg-7 py-5 py-lg-0 px-3 px-lg-5">
                <h4 class="text-secondary mb-3">Why Choose Us?</h4>
                <h1 class="display-4 mb-4"><span class="text-primary">We offer quality pet products.</span> </h1>
                <div class="row py-2">
                    <div class="col-6">
                        <div class="d-flex align-items-center mb-4">
                        <h3 class="mb-3">Best price</h3>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center mb-4"> 
                        <h3 class="mb-3">Best quality</h3>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center">
                        <h3 class="mb-3">Fast delivery</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Features End -->
<!-- New Products Start -->
    <div class="container-fluid bg-light pt-5">
        <div class="container py-5">
            <div class="d-flex flex-column text-center mb-5">
                <h1 class="display-4 m-0"><span class="text-primary">New </span> Products</h1>
            </div>

<div class="product-grid">
    <div class="product-card">
    <img src="data:image/jpeg;base64,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" class="img-fluid" alt="Cat tower game">

        <h3 class="product-title">Cat tower game</h3>
        <p class="product-price">5,000 JD</p>
        <a href="/shoping" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Shop Now</a>
    </div>

    <div class="product-card">
        <img src="data:image/jpeg;base64,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" alt="Dry food for cats">
        <h3 class="product-title">Dry food for cats</h3>
        <p class="product-price">22,000 JD</p>
        <a href="/shoping" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Shop Now</a>
    </div>

    <div class="product-card">
        <img src="https://www.pedigree.com/cdn-cgi/image/width=600,height=600,f=auto,quality=90/sites/g/files/fnmzdf3076/files/migrate-product-files/images/vcwwacmkjnrwrgegjkly.png" alt="Dry food for dogs">
        <h3 class="product-title">Dry food for dogs</h3>
        <p class="product-price">24,000 JD</p>
        <a href="/shoping" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Shop Now</a>
    </div>

    <div class="product-card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQKAkaGj47CR1g0esUT07u0rXw_-bWkI-FCWw&s" alt="Comfortable pet bed">
        <h3 class="product-title">Comfortable pet bed</h3>
        <p class="product-price">30,000 JD</p>
        <a href="/shoping" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Shop Now</a>
    </div>

    <div class="product-card">
        <img src="data:image/jpeg;base64,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" alt="Ball game for dogs">
        <h3 class="product-title">Ball game for dogs</h3>
        <p class="product-price">7,500 JD</p>
        <a href="/shoping" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Shop Now</a>
    </div>

    <div class="product-card">
        <img src="data:image/jpeg;base64,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" alt="Animal cleaning brush">
        <h3 class="product-title">Animal cleaning brush</h3>
        <p class="product-price">12,000 JD</p>
        <a href="/shoping" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Shop Now</a>
    </div>

    
</div>
</div>
</div>
<!-- New Products End -->

    



    <!-- Blog Start -->
    <div class="container pt-5">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-secondary mb-3">Pet Blog</h4>
            <h1 class="display-4 m-0"><span class="text-primary">Updates</span> From Blog</h1>
        </div>
        <div class="row pb-3" >
            <div class="col-lg-4 mb-4">
                <div class="card border-0 mb-2" style="height: 500px;">
                    <img class="card-img-top" src="<?= asset('/images/blog-1.jpg')?>" style="height: 200px;" alt="">
                    <div class="card-body bg-light p-4">
                        <h4 class="card-title text-truncate">Health Care(Future Plan)</h4>
                        <div class="d-flex mb-3">
                            <small class="mr-2"><i class="fa fa-user text-muted"></i> Admin</small>
                            <!-- <small class="mr-2"><i class="fa fa-folder text-muted"></i> Web Design</small>
                            <small class="mr-2"><i class="fa fa-comments text-muted"></i> 15</small> -->
                        </div>
                        <p>We will provide you with all the medical supplies and comprehensive health care your pet needs, including bandages, disinfectants, and post-operative care.</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card border-0 mb-2"style="height: 500px;">
                    <img class="card-img-top" src="<?= asset('/images/blog-2.jpg')?>" alt=""style="height: 200px;" >
                    <div class="card-body bg-light p-4">
                        <h4 class="card-title text-truncate">Pet games</h4>
                        <div class="d-flex mb-3">
                            <small class="mr-2"><i class="fa fa-user text-muted"></i> Admin</small>
                            <!-- <small class="mr-2"><i class="fa fa-folder text-muted"></i> Web Design</small>
                            <small class="mr-2"><i class="fa fa-comments text-muted"></i> 15</small> -->
                        </div>
                        <p>Discover a variety of interactive and chewable toys that stimulate your cat or dog's mental and physical activity. Perfect for entertaining and strengthening the bond between you.</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card border-0 mb-2"style="height: 500px;">
                    <img class="card-img-top" src="<?= asset('/images/blog-3.jpg')?>" alt=""style="height: 200px;" >
                    <div class="card-body bg-light p-4">
                        <h4 class="card-title text-truncate">Pet Guide(Future Plan)</h4>
                        <div class="d-flex mb-3">
                            <small class="mr-2"><i class="fa fa-user text-muted"></i> Admin</small>
                            <!-- <small class="mr-2"><i class="fa fa-folder text-muted"></i> Web Design</small>
                            <small class="mr-2"><i class="fa fa-comments text-muted"></i> 15</small> -->
                        </div>
                        <p>Get trusted advice and guidance on nutrition, training, and health to ensure a happy and healthy life for your cat or dog. We're here to help you every step of the way.</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
   

    


    <?php
    require_once __DIR__.'../../../layout/public/footer.php';
    ?>


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    
    <script src="<?= asset('/lib/easing/easing.min.js')?>"></script>
    <script src="<?= asset('/lib/owlcarousel/owl.carousel.min.js')?>"></script>
    <script src="<?= asset('/lib/tempusdominus/js/moment.min.js')?>"></script>
    <script src="<?= asset('/lib/tempusdominus/js/moment-timezone.min.js')?>"></script>
    <script src="<?= asset('/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')?>"></script>

    <!-- Contact Javascript File -->
    <script src="<?= asset('/js/mail/jqBootstrapValidation.min.js')?>"></script>
    <script src="<?= asset('/js/mail/contact.js')?>"></script>

    <!-- Template Javascript -->
    <script src="<?= asset('/js/main.js')?>"></script>
</body>

</html>

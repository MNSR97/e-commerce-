<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
require_once __DIR__.'../../../layout/public/nav.php';
?>


<body> 
    
    
<div class="container">
        <div class="container">
        <h1 class="text-center mt-5"><?= htmlspecialchars($pageTitle) ?></h1>

        <a href="/shoping/category/1" class="btn btn-primary my-1 mx-2">Foods</a>


        <a href="/shoping/category/2" class="btn btn-primary my-1 mx-2">Accessories</a>
        
        <a href="/shoping" class="btn btn-primary my-1 mx-2">All Products</a>
       

    </div>


        <div class="row mt-4">
            <?php if (!empty($products)): ?>
                <?php foreach ($products as $product): ?>
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="product-card">
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
            <?php else: ?>
                <p>No products found for this category.</p>
            <?php endif; ?>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

<?php
require_once __DIR__.'../../../layout/public/footer.php';
?>
</html>
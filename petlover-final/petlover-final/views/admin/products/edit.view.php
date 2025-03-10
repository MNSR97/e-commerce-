<?php require_once "views/layout/admin/sidebar.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center mb-4">Edit Product</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="/products/<?= $product['id'] ?>/edit" method="POST">
                <!-- Hidden input for PUT method -->
                <input type="hidden" name="_method" value="PUT" />

                <!-- Category ID Field -->
                <div class="mb-3">
                    <label for="category_id" class="form-label">Category ID</label>
                    <input name="category_id" type="number" class="form-control" id="category_id" value="<?= htmlspecialchars($product['category_id']) ?>">
                </div>

                <!-- Product Name Field -->
                <div class="mb-3">
                    <label for="product_name" class="form-label">Product Name</label>
                    <input name="product_name" type="text" class="form-control" id="product_name" value="<?= htmlspecialchars($product['product_name']) ?>">
                </div>

                <!-- Description Field -->
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" class="form-control" id="description" rows="3"><?= htmlspecialchars($product['description']) ?></textarea>
                </div>

                <!-- Price Field -->
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input name="price" type="number" class="form-control" id="price" value="<?= htmlspecialchars($product['price']) ?>">
                </div>

                <!-- Image URL Field -->
                <div class="mb-3">
                    <label for="image_url" class="form-label">Image URL</label>
                    <input name="image_url" type="text" class="form-control" id="image_url" value="<?= htmlspecialchars($product['image_url']) ?>">
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS (Optional, only if you need Bootstrap's JavaScript features) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<script src="<?= asset('/dist/script.js') ?>"></script>
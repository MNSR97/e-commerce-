<!-- views/users/index.view.php -->
<?php require_once "views/layout/admin/sidebar.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS for vertical scrollbar */
        .table-container {
            max-height: 400px; /* Adjust the height as needed */
            overflow-y: auto;
            margin-bottom: 20px;
        }

        /* Optional: Style the scrollbar */
        .table-container::-webkit-scrollbar {
            width: 8px;
        }

        .table-container::-webkit-scrollbar-thumb {
            background-color: #888;
            border-radius: 4px;
        }

        .table-container::-webkit-scrollbar-thumb:hover {
            background-color: #555;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center mb-4">All Products</h1>

    <!-- Display products in a table with vertical scrolling -->
    <?php if (!empty($products)): ?>
        <div class="table-container">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Category ID</th>
                        <th>Product Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($products as $product): ?>
                        <tr>
                            <td><?= htmlspecialchars($product['id']) ?></td>
                            <td><?= htmlspecialchars($product['category_id']) ?></td>
                            <td><?= htmlspecialchars($product['product_name']) ?></td>
                            <td><?= htmlspecialchars($product['description']) ?></td>
                            <td><?= htmlspecialchars($product['price']) ?></td>
                            <td>
                                <img src="<?= htmlspecialchars($product['image_url']) ?>" alt="<?= htmlspecialchars($product['product_name']) ?>" class="img-fluid" style="max-height: 50px;">
                            </td>
                            <td><?= htmlspecialchars($product['created_at']) ?></td>
                            <td>
                                <!-- Show link (GET) -->
                                <a href="/products/<?= $product['id'] ?>" class="btn btn-sm btn-info me-2">Show</a>

                                <!-- Edit link (GET) -->
                                <a href="/products/<?= $product['id'] ?>/edit" class="btn btn-sm btn-warning me-2">Edit</a>

                                <!-- Delete form (simulating DELETE via _method) -->
                                <form action="/products/<?= $product['id'] ?>" method="POST" class="d-inline">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php else: ?>
        <div class="alert alert-info" role="alert">
            No products found.
        </div>
    <?php endif; ?>

    <!-- Link to Create a new product -->
    <div class="text-center mt-4">
        <a href="/products/create" class="btn btn-primary">Create New Product</a>
    </div>
</div>

<!-- Bootstrap JS (Optional, only if you need Bootstrap's JavaScript features) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<script src="<?= asset('/dist/script.js') ?>"></script>
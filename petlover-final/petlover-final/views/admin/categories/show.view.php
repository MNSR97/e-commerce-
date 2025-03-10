<?php require_once "views/layout/admin/sidebar.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center mb-4">Categories</h1>

    <div class="row justify-content-center">
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <!-- Category Details -->
                <div class="card-body">
                    <h5 class="card-title"><?= htmlspecialchars($category['category_name']) ?></h5>
                    <p class="card-text">ID: <?= htmlspecialchars($category['id']) ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS (Optional, only if you need Bootstrap's JavaScript features) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<script src="<?= asset('/dist/script.js') ?>"></script>
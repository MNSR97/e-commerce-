<?php require_once "views/layout/admin/sidebar.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center mb-4">Edit Category</h1>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="/categories/<?= $category['id'] ?>/edit" method="POST">
                <!-- Hidden input for PUT method -->
                <input type="hidden" name="_method" value="PUT" />

                <!-- Category ID Field -->
                <div class="mb-3">
                    <label for="id" class="form-label">Category ID</label>
                    <input name="id" type="number" class="form-control" id="id" value="<?= htmlspecialchars($category['id']) ?>">
                </div>

                <!-- Category Name Field -->
                <div class="mb-3">
                    <label for="category_name" class="form-label">Category Name</label>
                    <input name="category_name" type="text" class="form-control" id="category_name" value="<?= htmlspecialchars($category['category_name']) ?>">
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
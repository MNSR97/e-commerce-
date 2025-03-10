<?php require_once "views/layout/admin/sidebar.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center mb-4">Edit User</h1>

    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <form action="/users/<?= $user['id']?>/edit" method="POST">
                <!-- Hidden input for PUT method -->
                <input type="hidden" name="_method" value="PUT" />

                <!-- Username Field -->
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" id="username" value="<?= htmlspecialchars($user['username']) ?>">
                </div>

                <!-- Email Field -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" value="<?= htmlspecialchars($user['email']) ?>">
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary w-100">Update User</button>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS (Optional, only if you need Bootstrap's JavaScript features) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<script src="<?= asset('/dist/script.js') ?>"></script>
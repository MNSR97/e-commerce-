<?php require_once "views/layout/admin/sidebar.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Admin</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center mb-4">Edit Admin</h1>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="/admins/index/admin<?= $user['id']?>/edit" method="POST">
                <!-- Hidden input for PUT method -->
                <input type="hidden" name="_method" value="PUT" />

                <!-- Username Field -->
                <div class="mb-3">
                    <label for="username" class="form-label">
                        <i class="bi bi-person"></i> Username
                    </label>
                    <input type="text" name="username" class="form-control" id="username" value="<?= htmlspecialchars($user['username']) ?>" required>
                    <div class="invalid-feedback">
                        Please provide a username.
                    </div>
                </div>

                <!-- Email Field -->
                <div class="mb-3">
                    <label for="email" class="form-label">
                        <i class="bi bi-envelope"></i> Email
                    </label>
                    <input type="email" name="email" class="form-control" id="email" value="<?= htmlspecialchars($user['email']) ?>" required>
                    <div class="invalid-feedback">
                        Please provide a valid email address.
                    </div>
                </div>

                <!-- Submit and Cancel Buttons -->
                <div class="text-center">
                    <button type="submit" class="btn btn-primary me-2">
                        <i class="bi bi-check-circle"></i> Update Admin
                    </button>
                    <a href="/admins/index/admin" class="btn btn-secondary">
                        <i class="bi bi-x-circle"></i> Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS (Optional, only if you need Bootstrap's JavaScript features) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Example: Enable Bootstrap form validation
    (function () {
        'use strict';
        const forms = document.querySelectorAll('.needs-validation');
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    })();
</script>
</body>
</html>
<script src="<?= asset('/dist/script.js') ?>"></script>
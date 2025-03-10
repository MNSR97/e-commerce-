<?php require_once "views/layout/admin/sidebar.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Users</title>
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
    <h1 class="text-center mb-4">All Users</h1>

    <!-- Display users in a table -->
    <?php if (!empty($users)): ?>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= htmlspecialchars($user['id']) ?></td>
                            <td><?= htmlspecialchars($user['username']) ?></td>
                            <td><?= htmlspecialchars($user['email']) ?></td>
                            <td>
                                <!-- Edit link (GET) -->
                                <a href="/users/<?= $user['id'] ?>/edit" class="btn btn-sm btn-warning me-2">Edit</a>

                                <!-- Delete form (simulating DELETE via _method) -->
                                <form action="/users/<?= $user['id'] ?>" method="POST" class="d-inline">
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
            No users found.
        </div>
    <?php endif; ?>

    <!-- Link to Create a new user -->
    <div class="text-center mt-4">
        <a href="/users/create" class="btn btn-primary">Create New User</a>
    </div>
</div>

<!-- Bootstrap JS (Optional, only if you need Bootstrap's JavaScript features) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<script src="<?= asset('/dist/script.js') ?>"></script>
<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>User Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2>User Management</h2>
    <a href="add.php" class="btn btn-success mb-3">Add New User</a>
    <table class="table table-bordered">
        <thead>
            <tr><th>ID</th><th>Name</th><th>Email</th><th>Role</th><th>Actions</th></tr>
        </thead>
        <tbody>
            <?php
            $result = $conn->query("SELECT * FROM users");
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['role']}</td>
                        <td>
                            <a href='edit.php?id={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>
                           <a href='delete.php?id={$row['id']}' class='btn btn-danger btn-sm' onclick=\"return confirm('Delete this user?')\">Delete</a>
                        </td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>

<?php include 'config.php'; ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $role = $_POST['role'];

    $sql = "INSERT INTO users (name, email, role) VALUES ('$name', '$email', '$role')";
    $conn->query($sql);
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2>Add New User</h2>
    <form method="POST">
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Role</label>
            <input type="text" name="role" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
        <a href="index.php" class="btn btn-secondary">Back</a>
    </form>
</body>
</html>


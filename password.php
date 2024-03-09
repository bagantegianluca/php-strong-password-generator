<?php
session_start();
$password = $_SESSION['password'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator</title>

    <!-- Import Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@latest/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
                <label for="password">Password generata</label>
            </div>
            <div class="card-body">
                <p id="password"><?= $password ?></p>
            </div>
        </div>
        <button class="mt-3"><a href="./index.php">Back</a></button>
    </div>
</body>

</html>
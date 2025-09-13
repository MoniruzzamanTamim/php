<?php
session_start(); // Start session to hold user login info

// Database connection
$host = "arcticleathers.com";
$port = 3306;
$user = "arcticle_tamim";
$pass = "tamim123";
$db   = "arcticle_tamim";

// Connect
$connect = mysqli_connect($host, $user, $pass, $db, $port);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check login form submit
if (isset($_POST['login'])) {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        echo "❌ All fields are required.";
    } else {
        // Fetch user by email
        $stmt = mysqli_prepare($connect, "SELECT id, full_name, password FROM users WHERE email = ?");
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);

        if (mysqli_stmt_num_rows($stmt) == 1) {
            mysqli_stmt_bind_result($stmt, $user_id, $full_name, $hashed_password);
            mysqli_stmt_fetch($stmt);

            // Verify password
            if (password_verify($password, $hashed_password)) {
                // Success - Set session
                $_SESSION['user_id'] = $user_id;
                $_SESSION['user_name'] = $full_name;

                echo "✅ Login successful! Welcome, $full_name.";
                header("Location: dashboard.php"); // Optional: Redirect
            } else {
                echo "❌ Incorrect password.";
            }
        } else {
            echo "❌ No user found with this email.";
        }

        mysqli_stmt_close($stmt);
    }
}

mysqli_close($connect);
?>


<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2>Login</h2>
    <form method="POST" action="login.php">
        <div class="mb-3">
            <label>Email address</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <button type="submit" name="login" class="btn btn-success">Login</button>
    </form>
</body>
</html>

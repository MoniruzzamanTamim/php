<?php
session_start();

// Database connection setup
$host = "arcticleathers.com";
$port = 3306;
$user = "arcticle_tamim";
$pass = "tamim123";
$db   = "arcticle_tamim";

// Connect to database
$connect = mysqli_connect($host, $user, $pass, $db, $port);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle form submit
if (isset($_POST['submit'])) {
    $full_name  = trim($_POST['fullname']);
    $email      = trim($_POST['email']);
    $password   = $_POST['password'];
    $repassword = $_POST['repassword'];
  

    // Input validation
    if (empty($full_name) || empty($email) || empty($password) || empty($repassword)) {
        $_SESSION['error'] = "❌ All fields are required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "❌ Invalid email format.";
    } elseif ($password !== $repassword) {
        $_SESSION['error'] = "❌ Passwords do not match.";
    } else {
        // Hash password
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // Insert user
        $stmt = mysqli_prepare($connect, "INSERT INTO users (full_name, email, password) VALUES (?, ?, ?)");
        mysqli_stmt_bind_param($stmt, "sss", $full_name, $email, $hashed_password);

        if (mysqli_stmt_execute($stmt)) {
            $_SESSION['success'] = "✅ Registration successful!";
            header("Location: login.php"); // Redirect after success
            exit();
        } else {
            if (mysqli_stmt_errno($stmt) === 1062) {
                $_SESSION['error'] = "❌ Email already exists.";
            } else {
                $_SESSION['error'] = "❌ Error: " . mysqli_stmt_error($stmt);
            }
        }

        mysqli_stmt_close($stmt);
    }
}

mysqli_close($connect);
?>


<!-- register.html -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-xl-6 col-lg-8 col-md-10">
      <div class="card shadow-sm">
        <div class="card-header bg-primary text-white text-center">
          <h4>Registration Form</h4>
        </div>
        <div class="card-body">
          <form action="" method="POST">
            <div class="mb-3">
              <label class="form-label">Full Name</label>
              <input type="text" class="form-control" placeholder="Enter your full name" name="fullname" />
            </div>
            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email" class="form-control" placeholder="name@example.com" name="email" />
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" class="form-control" placeholder="Enter your password" name="password" />
            </div>
            <div class="mb-3">
              <label class="form-label">Confirm Password</label>
              <input type="password" class="form-control" placeholder="Confirm your password" name="repassword" />
            </div>
            <button type="submit" class="btn btn-primary w-100" name="submit">Register</button>
          </form>

          <!-- Link to Login Page -->
          <p class="mt-3 text-center">
            Already have an account?
            <a href="login.php">Login here</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>

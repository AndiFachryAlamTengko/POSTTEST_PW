<?php
session_start();

// Jika sudah login, langsung ke dashboard
if (isset($_SESSION['username'])) {
  header("Location: dashboard.php");
  exit;
}

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  // Autentikasi sederhana (username dan password statis)
  if ($username === "admin" && $password === "12345") {
    $_SESSION["username"] = $username;
    header("Location: dashboard.php");
    exit;
  } else {
    $error = "Username atau password salah!";
  }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Sistem Pemesanan Tiket Pesawat</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <section class="login-container">
    <h2>Login ke Sistem</h2>
    <?php if ($error): ?>
      <p style="color:red;"><?= $error ?></p>
    <?php endif; ?>

    <form method="POST" action="">
      <label for="username">Username:</label>
      <input type="text" name="username" required>

      <label for="password">Password:</label>
      <input type="password" name="password" required>

      <button type="submit">Login</button>
    </form>
  </section>
</body>
</html>

<?php
session_start();

// Jika belum login, redirect ke login
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}

// Tangkap query string jika ada (menggunakan $_GET)
$asal = $_GET['asal'] ?? '';
$tujuan = $_GET['tujuan'] ?? '';
$tanggal = $_GET['tanggal'] ?? '';
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Sistem Pemesanan Tiket Pesawat</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header>
    <h1>Dashboard Pemesanan</h1>
    <p>Selamat datang, <b><?= $_SESSION['username']; ?></b>!</p>
    <a href="logout.php" class="logout-btn">Logout</a>
  </header>

  <section>
    <h2>Hasil Pencarian (via $_GET)</h2>
    <?php if ($asal && $tujuan && $tanggal): ?>
      <p><b>Asal:</b> <?= htmlspecialchars($asal) ?></p>
      <p><b>Tujuan:</b> <?= htmlspecialchars($tujuan) ?></p>
      <p><b>Tanggal:</b> <?= htmlspecialchars($tanggal) ?></p>
    <?php else: ?>
      <p>Belum ada data pencarian dikirim melalui URL.</p>
    <?php endif; ?>
  </section>

  <footer>
    <p>&copy; 2025 Sistem Pemesanan Tiket Pesawat</p>
  </footer>
</body>
</html>

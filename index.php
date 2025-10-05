<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistem Pemesanan Tiket Pesawat</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

  <header>
    <h1>Sistem Pemesanan Tiket Pesawat</h1>
    <nav>
      <ul>
        <li><a href="#beranda">Beranda</a></li>
        <li><a href="#fitur">Fitur</a></li>
        <li><a href="#pesan">Pesan Tiket</a></li>
        <li><a href="#tentang">Tentang Kami</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
    </nav>
  </header>

  <section id="beranda">
    <h2>Pesan Tiket Pesawat Lebih Mudah & Cepat</h2>
    <p>Temukan penerbangan terbaik untuk perjalanan Anda dengan sistem pemesanan tiket pesawat online kami.</p>
  </section>

  <section id="pesan">
    <h2>Cari & Pesan Tiket</h2>
    <form action="dashboard.php" method="GET">
      <label for="asal">Kota Asal:</label>
      <input type="text" id="asal" name="asal" required>

      <label for="tujuan">Kota Tujuan:</label>
      <input type="text" id="tujuan" name="tujuan" required>

      <label for="tanggal">Tanggal Keberangkatan:</label>
      <input type="date" id="tanggal" name="tanggal" required>

      <button type="submit">Cari Penerbangan</button>
    </form>
  </section>

  <footer>
    <p>&copy; 2025 Sistem Pemesanan Tiket Pesawat</p>
  </footer>
</body>
</html>

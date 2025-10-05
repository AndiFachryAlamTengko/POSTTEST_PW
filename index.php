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

  <section id="fitur">
    <h2>Fitur Utama</h2>
    <div class="feature-grid">
      <div class="card">
        <h3>✈️ Pencarian Penerbangan</h3>
        <p>Cari jadwal penerbangan sesuai tujuan dan waktu Anda.</p>
      </div>
      <div class="card">
        <h3>💳 Pembayaran Online</h3>
        <p>Pembayaran mudah dengan berbagai metode.</p>
      </div>
      <div class="card">
        <h3>📄 E-Ticket</h3>
        <p>Tiket elektronik langsung dikirim ke email Anda.</p>
      </div>
    </div>
  </section>

  <!-- Form Interaktif -->
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

    <div id="hasilPencarian"></div>
  </section>

  <section id="tentang">
    <h2>Tentang Kami</h2>
    <p>Kami menyediakan sistem pemesanan tiket online yang mudah diakses dan bekerja sama dengan maskapai terpercaya.</p>
  </section>

  <section id="kontak">
    <h2>Hubungi Kami</h2>
    <p>Email: info@tiketpesawat.com</p>
    <p>Telepon: +62 812 3456 7890</p>
    <p>Alamat: Jl. Angkasa Raya No. 45, Jakarta</p>
  </section>

  <footer>
    <p>&copy; 2025 Sistem Pemesanan Tiket Pesawat</p>
    <button id="toggleDarkMode">🌓 Mode Gelap</button>
  </footer>

  <script src="script.js"></script>
</body>
</html>
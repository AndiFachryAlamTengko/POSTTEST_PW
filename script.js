document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("formPencarian");
  const hasilDiv = document.getElementById("hasilPencarian");
  const toggleDarkModeBtn = document.getElementById("toggleDarkMode");

  // Event listener untuk form pencarian
  if (form) {
    form.addEventListener("submit", async (e) => {
      e.preventDefault();

      const asal = document.getElementById("asal").value;
      const tujuan = document.getElementById("tujuan").value;
      const tanggal = document.getElementById("tanggal").value;

      hasilDiv.innerHTML = `
        <h3>Hasil Pencarian</h3>
        <p><b>Asal:</b> ${asal}</p>
        <p><b>Tujuan:</b> ${tujuan}</p>
        <p><b>Tanggal:</b> ${tanggal}</p>
        <p><i>Maskapai Garuda Indonesia - Rp 1.500.000</i></p>
      `;

      // (Opsional) Ambil data cuaca dari API
      try {
        const apiKey = "demo"; // ganti dengan API key asli
        const response = await fetch(
          `https://api.openweathermap.org/data/2.5/weather?q=${tujuan}&appid=${apiKey}&units=metric&lang=id`
        );

        if (response.ok) {
          const data = await response.json();
          hasilDiv.innerHTML += `
            <p><b>Cuaca di ${tujuan}:</b> ${data.weather[0].description}, ${data.main.temp}°C</p>
          `;
        } else {
          hasilDiv.innerHTML += `<p>Gagal mengambil data cuaca.</p>`;
        }
      } catch (err) {
        hasilDiv.innerHTML += `<p>Error: ${err.message}</p>`;
      }
    });
  }

  // Event listener untuk dark mode
  if (toggleDarkModeBtn) {
    toggleDarkModeBtn.addEventListener("click", () => {
      document.body.classList.toggle("dark-mode");
    });
  }
});
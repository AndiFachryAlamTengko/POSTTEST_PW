// ====== DARK MODE ======
const darkModeBtn = document.getElementById("darkModeBtn");
darkModeBtn.addEventListener("click", () => {
  document.body.classList.toggle("dark-mode");
  darkModeBtn.textContent = document.body.classList.contains("dark-mode")
    ? "☀️ Light Mode"
    : "🌙 Dark Mode";
});

// ====== LIHAT FITUR SCROLL ======
document.getElementById("lihatFiturBtn").addEventListener("click", (e) => {
  e.preventDefault();
  document.getElementById("fitur").scrollIntoView({
    behavior: "smooth",
    block: "start"
  });
});

// ====== INTERAKSI CARD ======
const cards = document.querySelectorAll(".card");
cards.forEach(card => {
  card.addEventListener("click", () => {
    cards.forEach(c => c.classList.remove("active"));
    card.classList.add("active");
    alert(`Kamu memilih fitur: ${card.querySelector("h3").textContent}`);
  });
});

// ====== FETCH API (contoh ambil anime populer) ======
fetch("https://api.jikan.moe/v4/anime")
  .then(res => res.json())
  .then(data => {
    const firstAnime = data.data[0];
    const apiDiv = document.getElementById("apiData");
    apiDiv.innerHTML = `
      <h3>Rekomendasi Hiburan</h3>
      <p>${firstAnime.title}</p>
      <img src="${firstAnime.images.jpg.image_url}" alt="${firstAnime.title}" width="150">
    `;
  })
  .catch(err => console.error("Gagal ambil data API:", err));

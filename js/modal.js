// Membuka Form Login
const openModalBtn = document.getElementById("theme-masuk");
const openModalBellBtn = document.getElementById("themebell-masuk");
const openModalIkutiBtn = document.getElementById("ikuti-masuk");
const openModalIkuti2Btn = document.getElementById("ikuti2-masuk");
const openModalLoginBtn = document.getElementById("login-masuk");
const openModalKontenBtn = document.getElementById("konten-masuk");
const openModalGambarBtn = document.getElementById("gambar-masuk");
const openModalVideoBtn = document.getElementById("video-masuk");
const openModalBannerBtn = document.getElementById("ikuti-profil");
const openModalLikeBtn = document.getElementById("like-login");
const modal = document.getElementById("loginModal"); 
const closeBtn = document.querySelector(".close-btn");

const loginModal = [
  openModalBtn, 
  openModalBellBtn, 
  openModalIkutiBtn, 
  openModalLoginBtn,
  openModalKontenBtn,
  openModalGambarBtn,
  openModalLikeBtn,
  openModalVideoBtn
];

// Event listener untuk membuka modal saat tombol "Masuk" ditekan
loginModal.forEach(button => {
  button.addEventListener("click", () => {
    modal.style.display = "block";
  });
});

// Event listener untuk menutup modal saat tombol "X" diklik
closeBtn.addEventListener("click", function () {
  modal.style.display = "none";
});

// Event listener untuk menutup modal saat area di luar modal diklik
window.addEventListener("click", function (event) {
  if (event.target === modal) {
    modal.style.display = "none";
  }
});
// Event untuk Mengubah class active pada navbar
function setActive(event) {
  // Hapus class 'active' dari semua elemen dengan class 'menu-link' atau 'dropdown-item'
  document.querySelectorAll('.menu-link, .dropdown-item').forEach(item => {
    item.classList.remove('active');
  });
  
  event.currentTarget.classList.add('active');
}

// fungsi dropdown bell notifikasi
function toggleDropdownBell() {
    const dropdown = document.getElementById('dropdownContentNotif');
    if (dropdown.style.display === 'block') {
      dropdown.style.display = 'none';
    } else {
      dropdown.style.display = 'block';
    }
  }
// fungsi dropdown profil
function DropdownProfil() {
    const dropdown = document.getElementById('dropdownContentProfil');
    if (dropdown.style.display === 'block') {
      dropdown.style.display = 'none';
    } else {
      dropdown.style.display = 'block';
    }
  }
// Menutup dropdown saat mouse meninggalkan area
const iconbell = document.getElementById('iconbell');
const dropdown = document.getElementById('dropdownContentNotif');
dropdown.addEventListener('mouseleave', () => {
  dropdown.style.display = 'none';
});
const dropdownprofil = document.getElementById('dropdownContentProfil');
dropdownprofil.addEventListener('mouseleave', () => {
  dropdownprofil.style.display = 'none';
});
  
function redirectToLogin() {
    window.location.href = '/login'; 
  }

// Ambil elemen
const themeToggle = document.getElementById('theme-toggle');
const themeText = document.querySelector('.theme-text');
const currentSetting = document.querySelector('.current-setting');

// Fungsi untuk mengaktifkan tema
function setTheme(isDark) {
  if (isDark) {
    document.body.classList.add('dark-mode');
    themeText.textContent = '';
    currentSetting.textContent = '';
    themeToggle.checked = true;
  } else {
    document.body.classList.remove('dark-mode');
    themeText.textContent = '';
    currentSetting.textContent = '';
    themeToggle.checked = false;
  }
}

// Cek localStorage untuk preferensi sebelumnya
const savedTheme = localStorage.getItem('theme');
setTheme(savedTheme === 'dark');

// Event listener untuk toggle tema
themeToggle.addEventListener('change', () => {
  const isDark = themeToggle.checked;
  setTheme(isDark);
  localStorage.setItem('theme', isDark ? 'dark' : 'light');
});

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
const modal = document.getElementById("loginModal"); 
const closeBtn = document.querySelector(".close-btn");

const loginModal = [
  openModalBtn, 
  openModalBellBtn, 
  openModalIkutiBtn, 
  openModalLoginBtn,
  openModalKontenBtn,
  openModalGambarBtn,
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



//Banner Slide
// Array untuk URL gambar
const images = [
  '../bahan/csgo.jpg',
  '../bahan/action_bf5.jpg',
  '../bahan/apex.jpg'
];
const banner = document.querySelector('.banner');
        let currentImage = 0;

        function changeBackground() {
            // Perbarui background image
            banner.style.setProperty('--bg-image', `url('${images[currentImage]}')`);
            currentImage = (currentImage + 1) % images.length; // Pindah ke gambar berikutnya
        }

        // Ubah background setiap 5 detik
        setInterval(changeBackground, 5000);

// Interval Kode Redeem
let countdownTime = 3600; // 1 hour in seconds

// Function to format time (hh:mm:ss)
function formatTime(seconds) {
    const hours = Math.floor(seconds / 3600);
    const minutes = Math.floor((seconds % 3600) / 60);
    const secs = seconds % 60;

    return `
                <span class="blue">${String(hours).padStart(2, '0')}</span> jam 
                <span class="blue">${String(minutes).padStart(2, '0')}</span> menit 
                <span class="blue">${String(secs).padStart(2, '0')}</span> detik
            `;
}

// Function to update the countdown
function updateCountdown() {
  const countdownElement = document.getElementById('countdown');
  countdownElement.innerHTML = formatTime(countdownTime); // Use innerHTML for styled content

  if (countdownTime > 0) {
      countdownTime--; // Decrease time by 1 second
  } else {
      clearInterval(timerInterval); // Stop the timer
      countdownElement.innerHTML = '<span class="blue">Kode telah habis!</span>';
  }
}
// Start the countdown
const timerInterval = setInterval(updateCountdown, 1000);



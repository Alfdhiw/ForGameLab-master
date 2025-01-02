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
function setTheme(islight) {
  if (islight) {
    document.body.classList.add('light-mode');
    themeText.textContent = '';
    currentSetting.textContent = '';
    themeToggle.checked = true;
  } else {
    document.body.classList.remove('light-mode');
    themeText.textContent = '';
    currentSetting.textContent = '';
    themeToggle.checked = false;
  }
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

// Cek localStorage untuk preferensi sebelumnya
const savedTheme = localStorage.getItem('theme');
setTheme(savedTheme === 'dark');

// Event listener untuk toggle tema
themeToggle.addEventListener('change', () => {
  const isDark = themeToggle.checked;
  setTheme(isDark);
  localStorage.setItem('theme', isDark ? 'dark' : 'light');
});



// Fungsi Menghitung Like
const likeKey = 'postLikes';

function getLikes() {
  const likes = localStorage.getItem(likeKey);
  return likes ? parseInt(likes, 10) : 0;
}

function saveLikes(likes) {
  localStorage.setItem(likeKey, likes);
}

function incrementLike() {
  let currentLikes = getLikes();
  currentLikes += 1;
  saveLikes(currentLikes);
  updateLikeCount(currentLikes);
}

function updateLikeCount(likes) {
  document.getElementById('like-count').textContent = likes;
  document.getElementById('like-count2').textContent = likes;
}

document.addEventListener('DOMContentLoaded', () => {
  const initialLikes = getLikes();
  updateLikeCount(initialLikes);
});

// Fungsi Menghitung Komentar
const commentKey = 'komens';

function getCommentCount() {
  const comments = localStorage.getItem(commentKey);
  if (!comments) {
    return 0;
  }
  const commentArray = JSON.parse(comments);
  return commentArray.length; 
}

function updateCommentCount() {
  const count = getCommentCount();
  document.getElementById('comment-count').textContent = count;
}

document.addEventListener('DOMContentLoaded', () => {
  updateCommentCount();
});

// Fungsi Following
const followKey = 'follow_status';

function saveFollowStatus(isFollowing) {
  const expireTime = Date.now() + 3600 * 1000;
  const followData = {
    isFollowing: isFollowing,
    expireAt: expireTime,
  };
  localStorage.setItem(followKey, JSON.stringify(followData));
}

function getFollowStatus() {
  const followData = localStorage.getItem(followKey);
  if (!followData) {
    return { isFollowing: false, expired: true };
  }

  const { isFollowing, expireAt } = JSON.parse(followData);
  const expired = Date.now() > expireAt;
  return { isFollowing, expired };
}

function updateButton() {
  const button = document.getElementById('update-masuk');
  const { isFollowing, expired } = getFollowStatus();

  if (expired) {
    button.textContent = 'Ikuti +';
    button.classList.remove('following');
    saveFollowStatus(false);
  } else if (isFollowing) {
    button.textContent = 'Sudah Diikuti';
    button.classList.add('following');
  } else {
    button.textContent = 'Ikuti +';
    button.classList.remove('following');
  }
}

function handleFollowButtonClick() {
  const button = document.getElementById('update-masuk');
  const { isFollowing } = getFollowStatus();

  if (isFollowing) {
    saveFollowStatus(false);
  } else {
    saveFollowStatus(true);
  }

  updateButton();
}
document.getElementById('update-masuk').addEventListener('click', handleFollowButtonClick);
document.addEventListener('DOMContentLoaded', () => {
  updateButton();
});

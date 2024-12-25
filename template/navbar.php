<?php
// Fungsi untuk memeriksa apakah halaman saat ini aktif
function isActive($page)
{
    $currentPage = basename($_SERVER['REQUEST_URI']); // Mendapatkan nama file dari URL
    return $currentPage === $page ? 'active' : ''; // Mengembalikan 'active' jika cocok
}
?>

<nav class="navbar">
    <span class="logo-mobile">ForGameLab</span>
    <span class="hamburger">&#9776;</span>
    <div class="navbar-left">
        <div class="logo">ForGameLab</div>
        <div class="menu">
            <a class="menu-link <?php echo isActive('beranda.php'); ?>" href="beranda.php" aria-current="page" onclick="setActive(event)"><b>Beranda</b></a>
            <a class="menu-link dropdown dropdown-toggle <?php echo isActive('action.php'); ?> <?php echo isActive('cod.php'); ?> <?php echo isActive('apex.php'); ?> <?php echo isActive('csgo.php'); ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" onclick="setActive(event)"><b>Kelompok</b></a>
            <ul class="dropdown-menu" style="margin-left: 380px; background-color: #1b1d2a; box-shadow: 0 4px 30px rgba(0, 0, 0, 0.2);">
                <li><a class="dropdown-item" href="action.php"><i class="fa-solid fa-gun" onclick="setActive(event)"></i>
                        Shooter</a>
                </li>
                <li><a class="dropdown-item" href="genshin.php"><i class="fa-solid fa-chess-rook" onclick="setActive(event)"></i>
                        Strategi</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="navbar-center">
        <div class="search-bar">
            <input type="text" placeholder="Search" />
            <button type="submit">🔍</button>
        </div>
    </div>

    <div class="navbar-right">
        <!-- Notifikasi -->
        <div class="notification-dropdown">
            <div class="dropdown-icon" onmouseover="toggleDropdownBell()">
                <i class="fa-regular fa-bell fa-xl" style="cursor: pointer" id="iconbell"></i>
            </div>
            <div class="dropdown-content" id="dropdownContentNotif">
                <div class="message">
                    <img src="bahan/box kosong.png" alt="Empty Box Icon" />
                    <p>Log in untuk melihat konten menarik lainnya</p>
                    <button class="login-notif" id="themebell-masuk">
                        Log In
                    </button>
                </div>
            </div>
        </div>
        <!-- profil -->
        <div class="notification-dropdown">
            <div class="dropdown">
                <div class="dropdown-icon" onmouseover="DropdownProfil()">
                    <img src="bahan/default_avatar.png" alt="Profil Icon" id="iconprofil" style="cursor: pointer" />
                </div>
                <div class="dropdown-content" id="dropdownContentProfil">
                    <div class="dropdown-item" id="theme-setting">
                        <i class="fas fa-toggle-on"></i>
                        <span>Pengaturan Tampilan</span>
                        <span class="current-setting"></span>
                        <div class="theme-switcher">
                            <label class="switch">
                                <input type="checkbox" id="theme-toggle" />
                                <span class="slider round"></span>
                            </label>
                            <span class="theme-text"></span>
                        </div>
                    </div>
                    <hr />
                    <div class="dropdown-item" id="theme-masuk">
                        <i class="fas fa-sign-in-alt" style="margin-top: 4px;"></i>
                        <span>Masuk</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
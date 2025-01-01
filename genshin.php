<?php
session_start();
?>
<?php include 'template/header.php' ?>

<body>
    <?php include 'template/navbar.php' ?>
    <div class="body-genshin">
        <?php include 'template/tabs_strategi.php' ?>
        <!-- Konten Utama -->
        <main class="action-main">
            <section class="forum">
                <article class="post">
                    <div class="post-container">
                        <div class="post-header">
                            <img src="bahan/profile1.png" alt="Avatar" class="avatar" />
                            <div class="user-info">
                                <a href="detail_profil.php" style="text-decoration: none;">
                                    <h3>Futsu Kun <span class="icons">🐱‍👤⭐</span></h3>
                                </a>
                                <p>14/10 - Expert Gamer</p>
                            </div>
                            <button class="follow-btn" id="ikuti-masuk">Ikuti +</button>
                        </div>
                        <a href="post_detail_genshin.php" style="text-decoration: none;">
                            <div class="post-content">
                                <h2>Preview Tampilan Echo Baru "Envisaged Echoes" Versi 5.3</h2>
                                <div class="post-images">
                                    <img src="bahan/genshin/genshin_update.webp" alt="gambar 1" class="post-image" />
                                </div>
                                <div class="post-tags">
                                    <a href="#">#genshin</a>
                                    <a href="#">#GenshinImpact</a>
                                    <a href="#">#Fyp</a>
                                </div>
                            </div>

                            <div class="post-footer">
                                <span>👁 11 rb</span>
                                <span>✉ 29</span>
                                <span>❤ 94</span>
                            </div>
                    </div>
                    </a>
                </article>
            </section>

            <aside class="sidebar">
                <div class="topik-info">
                    <h3>Kode Penukaran</h3>
                    <h5>Kode Tutup Dalam <span id="countdown"> 00 Jam 00 Menit 00 Detik</span></h5>
                    <div class="kode-list">
                        <!-- Kode 1 -->
                        <div class="kode-item">
                            <div class="info">
                                <p><span class="reward"><i class="fa-solid fa-coins"></i>x100</span> <span class="bonus"><i class="fa-solid fa-gem"></i>x50</span></p>
                                <p class="kode" id="kode-1">UAMPGJASECZH</p>
                            </div>
                            <button class="tukar-btn" onclick="copyToClipboard('kode-1')"><b><i class="fa-solid fa-file"></i> Salin</b></button>
                        </div>
                        <!-- Kode 2 -->
                        <div class="kode-item">
                            <div class="info">
                                <p><span class="reward"><i class="fa-solid fa-coins"></i>x100</span> <span class="bonus"><i class="fa-solid fa-gem"></i>x50</span></p>
                                <p class="kode" id="kode-2" onclick="copyToClipboard('kode-2')">LT5NH2TTXUHM</p>
                            </div>
                            <button class="tukar-btn"><b><i class="fa-solid fa-file"></i> Salin</b></button>
                        </div>
                        <!-- Kode 3 -->
                        <div class="kode-item">
                            <div class="info">
                                <p><span class="reward"><i class="fa-solid fa-coins"></i>x100</span> <span class="bonus"><i class="fa-solid fa-gem"></i>x50</span></p>
                                <p class="kode" id="kode-3">4SLPH3BSFVH9</p>
                            </div>
                            <button class="tukar-btn" onclick="copyToClipboard('kode-3')"><b><i class="fa-solid fa-file"></i> Salin</b></button>
                        </div>
                    </div>
                </div>

                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) : ?>
                    <div class="widget" style="display: none;">
                        <p>
                            <b></b>Hanya butuh beberapa detik untuk log in dan buka bonus lapor
                            kehadiran serta fitur game lainnya!
                        </p>
                        <button class="login-btn" id="login-masuks">Login Akun</button>
                    </div>
                <?php else : ?>
                    <div class="widget">
                        <p>
                            <b></b>Hanya butuh beberapa detik untuk log in dan buka bonus lapor
                            kehadiran serta fitur game lainnya!
                        </p>
                        <button class="login-btn" id="login-masuk">Login Akun</button>
                    </div>
                <?php endif; ?>

                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) : ?>
                    <div class="post-options">
                        <h3>Ayo segera posting!</h3>
                        <a href="konten.php"><button id="konten-masuk">Konten</button></a>
                        <a href="postingan.php"><button id="gambar-masuk">Gambar</button></a>
                        <a href="video.php"><button id="video-masuk">Video</button></a>
                    </div>
                <?php else : ?>
                    <div class="post-options">
                        <h3>Ayo segera posting!</h3>
                        <button id="konten-masuk">Konten</button>
                        <button id="gambar-masuk">Gambar</button>
                        <button id="video-masuk">Video</button>
                    </div>
                <?php endif; ?>

                <div class="topik-info">
                    <h3>Topik Populer</h3>
                    <div class="topik-container">
                        <p>#Caesar Adalah Raja Kami</p>
                        <p>4.899 postingan / 17 rb anggota</p>
                    </div>
                    <div class="topik-container">
                        <p>#Map Update Terbaru</p>
                        <p>5.890 postingan / 20 rb anggota</p>
                    </div>
                    <div class="topik-container">
                        <p>#Hero Terfavorit</p>
                        <p>10.254 postingan / 15 rb anggota</p>
                    </div>
                </div>
            </aside>
        </main>
        <!-- Modal pop-up Form -->
        <div id="loginModal" class="modal-overlay">
            <div class="modal-konten">
                <span class="close-btn">&times;</span>
                <div class="logo">ForGameLab</div>
                <h2>Log in</h2>
                <form method="POST" action="modul/session_login.php">
                    <label for="username" class="text-light">Username</label>
                    <input type="text" id="username" name="username" placeholder="Enter your username" style="background-color: #212226; color: white;" />
                    <label for="password" class="text-light">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" style="background-color: #212226; color: white;" />
                    <button type="submit">Login</button>
                </form>
            </div>
        </div>
        <?php include 'template/footer.php' ?>
        <script>
            // Fungsi untuk menyalin teks ke clipboard
            function copyToClipboard(elementId) {
                const kodeElement = document.getElementById(elementId);

                const tempInput = document.createElement('input');
                tempInput.value = kodeElement.innerText;
                document.body.appendChild(tempInput);

                // Salin teks ke clipboard
                tempInput.select();
                document.execCommand('copy');
                document.body.removeChild(tempInput);
                alert(`Kode "${tempInput.value}" berhasil disalin ke clipboard!`);
            }
        </script>
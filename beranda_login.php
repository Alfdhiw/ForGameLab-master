<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: http://localhost/ForGameLab-master/beranda.php");
    exit();
}
?>
<?php include 'template/header.php' ?>

<body>
    <?php include 'template/navbar.php' ?>
    <!-- Banner -->
    <section class="banner">
        <div class="banner-overlay">
            <h1>Selamat Datang <?php echo htmlspecialchars($_SESSION['username']); ?> di ForGameLab</h1>
            <p>Komunitas game favorit Anda. Temukan panduan, diskusi, dan teman bermain!</p>
        </div>
    </section>
    <!-- Alert Login -->
    <?php
    if (isset($_SESSION['error'])) {
        echo "<script>alert('" . $_SESSION['error'] . "');</script>";
        unset($_SESSION['error']);
    }
    ?>
    <main>
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
                    <a href="post_detail.php" style="text-decoration: none;">
                        <div class="post-content">
                            <h2>Edisi Definitif Battlefield V Tersedia Sekarang</h2>
                            <div class="post-images">
                                <img src="bahan/action/update-bf.jpg" alt="gambar 1" class="post-image" />
                                <img src="bahan/action/update-bf2.jpg" alt="gambar 2" class="post-image" />
                            </div>
                            <div class="post-tags">
                                <a href="#">#bf5</a>
                                <a href="#">#Battlefield</a>
                                <a href="#">#Fyp</a>
                            </div>
                        </div>
                        <div class="post-footer">
                            <span>👁 11 rb</span>
                            <span>✉ 29</span>
                            <span>❤ 94</span>
                        </div>
                    </a>
                </div>
                <div class="post-container">
                    <div class="post-header">
                        <img src="bahan/profile1.png" alt="Avatar" class="avatar" />
                        <div class="user-info">
                            <a href="detail_profil.php" style="text-decoration: none;">
                                <h3>Futsu Kun <span class="icons">🐱‍👤⭐</span></h3>
                            </a>
                            <p>02/10 - Platform Game</p>
                        </div>
                        <button class="follow-btn" id="ikuti2-masuk">Ikuti +</button>
                    </div>
                    <a href="post_detail.php" style="text-decoration: none;">
                        <div class="post-content">
                            <h2>
                                Mainkan Sesuai Aturan Anda Sendiri di Game Komunitas Battlefield™ V
                            </h2>
                            <div class="post-images">
                                <img src="bahan/action/bf-content.jpg" alt="gambar 3" class="post-image" />
                                <img src="bahan/action/bf-content2.jpg" alt="gambar 3" class="post-image" />
                            </div>
                            <div class="post-tags">
                                <a href="#">#bf</a>
                                <a href="#">#Battlefield5</a>
                                <a href="#">#z.z.z</a>
                            </div>
                        </div>

                        <div class="post-footer">
                            <span>👁 2 rb</span>
                            <span>✉ 350</span>
                            <span>❤ 1 rb</span>
                        </div>
                    </a>
                </div>
            </article>
        </section>

        <aside class="sidebar">
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

            <div class="post-options">
                <h3>Ayo segera posting!</h3>
                <button id="konten-masuk">Konten</button>
                <button id="gambar-masuk">Gambar</button>
                <button id="video-masuk">Video</button>
            </div>

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
                <input type="text" id="username" name="username" placeholder="Enter your username" style="background-color: #212226" />
                <label for="password" class="text-light">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" style="background-color: #212226" />
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
    <?php include 'template/footer.php' ?>
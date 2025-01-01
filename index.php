<?php include 'template/header.php' ?>

<body>
    <!-- Modal Structure -->
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

    <?php include 'template/navbar.php' ?>
    <!-- Banner -->
    <section class="banner">
        <div class="banner-overlay">
            <h1>Selamat Datang di ForGameLab</h1>
            <p>Komunitas game favorit Anda. Temukan panduan, diskusi, dan teman bermain!</p>
        </div>
    </section>
    <main>
        <section class="forum">
            <article class="post">
                <div class="post-container">
                    <div class="post-header">
                        <img src="bahan/profile1.png" alt="Avatar" class="avatar" />
                        <div class="user-info">
                            <h3>Futsu Kun <span class="icons">🐱‍👤⭐</span></h3>
                            <p>14/10 - Expert Gamer</p>
                        </div>
                        <button class="follow-btn">Ikuti +</button>
                    </div>

                    <div class="post-content">
                        <h2>Apakah Ini Malaikat? 😳</h2>
                        <div class="post-images">
                            <img src="bahan/gambar1.png" alt="gambar 1" class="post-image" />
                            <img src="bahan/gambar2.png" alt="gambar 2" class="post-image" />
                        </div>
                        <div class="post-tags">
                            <a href="#">#waifu</a>
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
                <div class="post-container">
                    <div class="post-header">
                        <img src="bahan/profile1.png" alt="Avatar" class="avatar" />
                        <div class="user-info">
                            <h3>Zenless Zone Zero <span class="icons">🤖⭐</span></h3>
                            <p>02/10 - Platform Game</p>
                        </div>
                        <button class="follow-btn">Ikuti +</button>
                    </div>

                    <div class="post-content">
                        <h2>
                            🎂Perayaan Ultah Bulan Oktober | Ikuti Event Kue DIY dan
                            Menangkan Polychrome!
                        </h2>
                        <div class="post-images">
                            <img src="bahan/gambar3.png" alt="gambar 3" class="post-image" />
                        </div>
                        <div class="post-tags">
                            <a href="#">#ultah</a>
                            <a href="#">#ZenlessZoneZero</a>
                            <a href="#">#z.z.z</a>
                        </div>
                    </div>

                    <div class="post-footer">
                        <span>👁 2 rb</span>
                        <span>✉ 350</span>
                        <span>❤ 1 rb</span>
                    </div>
                </div>
            </article>
        </section>

        <aside class="sidebar">
            <div class="widget">
                <p>
                    <b></b>Hanya butuh beberapa detik untuk log in dan buka bonus lapor
                    kehadiran serta fitur game lainnya!
                </p>
                <button class="login-btn">Login Akun</button>
            </div>

            <div class="post-options">
                <h3>Ayo segera posting!</h3>
                <button>Konten</button>
                <button>Gambar</button>
                <button>Video</button>
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
    <footer>
        <p>© 2024 ForGameLab</p>
    </footer>
    <!-- JavaScript Libraries -->
    <script>
        // Mendapatkan elemen modal
        const modal = document.getElementById("loginModal");
        const closeBtn = document.querySelector(".close-btn");

        // Fungsi Load Modal
        window.onload = function() {
            modal.style.display = "block";
        };

        // Close Modal
        closeBtn.onclick = function() {
            window.location.href = "beranda.php";
        };

        // Close Modal Diluar Konten
        window.onclick = function(event) {
            if (event.target === modal) {
                window.location.href = "beranda.php";
            }
        };
    </script>
</body>

</html>
<?php include 'template/header.php' ?>

<body>
    <?php include 'template/navbar.php' ?>

    <div class="profile-container">
        <!-- Header Profil -->
        <div class="profile-header">
            <img src="bahan/action_bf5.jpg" alt="Background Image" class="header-bg">
            <div class="profile-info">
                <img src="bahan/genshin.jpeg" alt="User Avatar" class="avatar-detail">
                <div class="user-details">
                    <h1>Your Fab</h1>
                    <p>Follow My Profile for Upcoming Redeem Codes</p>
                </div>
                <div class="follow-button">
                    <button class="btn-follow"><b>Ikuti</b></button>
                </div>
            </div>
            <div class="profile-stats">
                <span><i class="fa-solid fa-download"></i> 74 Postingan</span>
                <span><i class="fa-solid fa-user-plus"></i> 10 Ikuti</span>
                <span><i class="fa-solid fa-user-group"></i> 65 rb Pengikut</span>
                <span><i class="fa-solid fa-heart"></i> 79 rb Suka</span>
            </div>
        </div>
        <main class="action-main">
            <section class="forum">
                <!-- Tab Konten -->
                <div class="content-tabs">
                    <div class="tabs-profile">
                        <button class="tab-profile active">Postingan</button>
                        <button class="tab-profile">Komentar</button>
                        <button class="tab-profile">Favorit</button>
                        <button class="tab-profile">Topik</button>
                    </div>
                    <div class="tab-content">
                        <div class="post">
                            <div class="post-header">
                                <img src="bahan/genshin.jpeg" alt="User Avatar" class="post-avatar">
                                <div class="post-details">
                                    <span>Your Fab</span>
                                    <span>• 4 jam yang lalu</span>
                                    <span>Genshin Impact</span>
                                </div>
                            </div>
                            <div class="post-body">
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
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <aside class="sidebar">
                <div class="widget">
                    <p>
                        <b></b>Hanya butuh beberapa detik untuk log in dan buka bonus lapor
                        kehadiran serta fitur game lainnya!
                    </p>
                    <button class="login-btn" id="login-masuk">Login Akun</button>
                </div>

                <div class="post-options">
                    <h3>Pusat Achievement</h3>
                    <img src="bahan/achievement/piala1.webp" alt="piala1">
                    <img src="bahan/achievement/piala2.webp" alt="piala2">
                    <img src="bahan/achievement/piala3.webp" alt="piala3">
                    <img src="bahan/achievement/piala4.webp" alt="piala4">
                    <img src="bahan/achievement/piala5.webp" alt="piala5">
                    <img src="bahan/achievement/piala6.webp" alt="piala6">
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

    </div>

    <!-- Modal pop-up Form -->
    <div id="loginModal" class="modal-overlay">
        <div class="modal-konten">
            <span class="close-btn">&times;</span>
            <div class="logo">ForGameLab</div>
            <h2>Log in</h2>
            <form action="#">
                <label for="username" class="text-light">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" style="background-color: #212226" />
                <label for="password" class="text-light">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" style="background-color: #212226" />
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
    <?php include 'template/footer.php' ?>
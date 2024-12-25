<?php include 'template/header.php' ?>

<body>
    <?php include 'template/navbar.php' ?>
    <!-- Konten Utama -->
    <main>
        <section class="forum">
            <article class="post">
                <div class="container-detail">
                    <div class="post-header">
                        <div class="user-info">
                            <h3>Detail Postingan</h3>
                        </div>
                    </div>
                    <hr style="color:rgb(146, 151, 188)">
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
                    <div class="post-content">
                        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="bahan/genshin/genshin_update.webp" class="d-block w-100" alt="1" data-bs-interval="1000">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <div class="post-tags">
                            <a href="#">#bf5</a>
                            <a href="#">#Action</a>
                            <a href="#">#Fyp</a>
                        </div>
                    </div>
                    <div class="post-footer">
                        <span>👁 11 rb</span>
                        <span>✉ 29</span>
                        <span>❤ 94</span>
                    </div>
                    <div class="post-content" style="margin-top: 30px;">
                        <h1 class="post-title">Preview Tampilan Echo Baru "Envisaged Echoes" Versi 5.3</h1>
                        <p class="post-description">
                            Halo, Traveler! Setelah update v5.3, gameplay "Envisaged Echoes" akan menghadirkan stage tantangan baru untuk Ganyu dan Kaedehara Kazuha, beserta tampilan Echo mereka, "Echo: Scarlet Leaves Pursue Wild Waves" dan "Echo: Plenilune Gaze". Yuk dilihat~
                        </p>
                    </div>
                    <div class="post-content" style="margin-top: 30px;">
                        <form>
                            <div class="mb-3">
                                <textarea class="form-control" id="komentar" rows="3" placeholder="Cepat tulis komentar kalian~ " style="background-color: transparent; border: 1px solid rgb(53, 53, 53); color: white;"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </form>
                    </div>
                    <hr style="color:rgb(146, 151, 188)">
                    <div class="post-content" style="margin-top: 30px;">
                        <h3 class="post-title" style="font-size: 20px; margin-bottom:20px">Komentar Postingan</h3>
                        <div class="comment-container">
                            <div class="comment-header">
                                <img class="user-avatar" src="bahan/profile2.png" alt="User Avatar">
                                <div class="user-desc">
                                    <span class="user-name">Daemonchai</span>
                                    <span class="comment-count">Komentar 1</span>
                                </div>
                                <div class="comment-actions">
                                    <button class="action-button"><i class="fas fa-ellipsis-h"></i></button>
                                </div>
                            </div>
                            <div class="comment-body">
                                <div class="comment-content">
                                    <div class="comment-bubble">
                                        <p>Little late on that one 🍒</p>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-footer">
                                <span class="comment-time">35 menit yang lalu</span>
                                <div class="comment-reply">
                                    <button class="reply-button"><i class="fas fa-reply"></i> Balas</button>
                                    <button class="like-button"><i class="fas fa-thumbs-up"></i> 0</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </section>

        <aside class="sidebar">
            <div class="widget">
                <p>
                    Hanya butuh beberapa detik untuk log in dan buka bonus lapor
                    kehadiran serta fitur game lainnya!
                </p>
                <button class="login-btn" id="login-masuk">Login Akun</button>
            </div>
            <div class="topik-info">
                <h3>Informasi Penulis</h3>
                <div class="kode-list">
                    <div class="kode-item">
                        <div class="info">
                            <div class="user-info">
                                <h3>Futsu Kun <span class="icons">🐱‍👤⭐</span></h3>
                                <p>14/10 - Expert Gamer</p>
                            </div>
                        </div>
                        <button class="tukar-btn" id="login-ikuti"><b>Ikuti +</b></button>
                    </div>
                </div>
            </div>
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
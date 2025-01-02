<?php
session_start();
?>
<?php include 'template/header.php' ?>

<body>
    <?php include 'template/navbar.php' ?>

    <div class="profile-container">
        <!-- Header Profil -->
        <div class="profile-header">
            <img src="bahan/honkai_banner.webp" alt="Background Image" class="header-bg">
            <div class="profile-info">
                <img src="bahan/profile2.png" alt="User Avatar" class="avatar-detail">
                <div class="user-details">
                    <h1><?php echo htmlspecialchars($_SESSION['username']); ?></h1>
                    <p>Follow My Profile for Upcoming Redeem Codes</p>
                </div>
            </div>
            <div class="profile-stats">
                <span><i class="fa-solid fa-download"></i> 1 Postingan</span>
                <span><i class="fa-solid fa-user-plus"></i> 0 Ikuti</span>
                <span><i class="fa-solid fa-user-group"></i> 0 Pengikut</span>
                <span><i class="fa-solid fa-heart"></i> 1 Suka</span>
            </div>
        </div>
        <main class="action-main">
            <section class="forum">
                <!-- Tab Postingan -->
                <div class="content-tabs">
                    <?php include 'template/tabs_user.php' ?>
                    <div class="tab-content">
                        <div id="postsPostContainer"></div>
                    </div>
                </div>
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

                <div class="post-options" style="display: none;">
                    <h3>Ayo segera posting!</h3>
                    <button id="konten-masuk">Konten</button>
                    <button id="gambar-masuk">Gambar</button>
                    <button id="video-masuk">Video</button>
                </div>

                <div class="achievement-container">
                    <h2>Pusat Achievement</h2>
                    <div class="achievement-grid">
                        <div class="achievement-item">
                            <img src="bahan/achievement/piala1.webp" alt="Achievement Icon">
                        </div>
                        <div class="achievement-item">
                            <img src="bahan/achievement/piala2.webp" alt="Achievement Icon">
                        </div>
                        <div class="achievement-item">
                            <img src="bahan/achievement/piala3.webp" alt="Achievement Icon">
                        </div>
                        <div class="achievement-item">
                            <img src="bahan/achievement/piala4.webp" alt="Achievement Icon">
                        </div>
                        <div class="achievement-item">
                            <img src="bahan/achievement/piala5.webp" alt="Achievement Icon">
                        </div>
                        <div class="achievement-item">
                            <img src="bahan/achievement/piala6.webp" alt="Achievement Icon">
                        </div>
                    </div>
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
            <form method="POST" action="modul/session_login.php">
                <label for="username" class="text-light">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" style="background-color: #212226; color: white;" />
                <label for="password" class="text-light">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" style="background-color: #212226; color: white;" />
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
    <script>
        // Load posts from localStorage
        const loadposts = () => {
            const posts = JSON.parse(localStorage.getItem("posts")) || [];
            postsPostContainer.innerHTML = "";
            posts.forEach((post, index) => {
                const postElement = document.createElement("div");
                postElement.classList.add("post");
                postElement.id = `post-${index}`;
                postElement.innerHTML = `
      <div class="post-header">
                <img src="bahan/profile2.png" alt="User Avatar" class="post-avatar">
                <div class="post-details">
                    <span><?php echo htmlspecialchars($_SESSION['username']); ?></span>
                    <span>Genshin Impact</span>
                    <button class="follow-btn" id="ikuti-masuk" style="display: none;">Ikuti +</button>
                </div>
                <div class="comment-actions">
                <button class="action-button" onclick="deletePost(${index})"><i class="fas fa-xmark"></i></button>
        </div>
            </div>
            <div class="post-body">
                <div class="post-content">
                    <h2><b>${post.title}</b></h2>
                    <div class="post-images">
                                            <img src="${post.image}" alt="gambar 1" class="post-image" style="max-width: 100%; height: auto;" />
                                        </div>
                </div>
                <div class="post-tags">
                                            <a href="#">#${post.hastag}</a>
                                        </div>
                <div class="post-footer">
                    <span>👀 (2)</span>
                    <button class="like-button">📧 (<span id="comment-count">0</span>)</button>
                    <button class="like-button" onclick="incrementLike()">❤️ (<span id="">0</span>)</button>
                </div>
            </div>
        `;

                postsPostContainer.appendChild(postElement);
            });
        };

        // Delete Postingan
        window.deletePost = (index) => {
            const posts = JSON.parse(localStorage.getItem("posts")) || [];
            posts.splice(index, 1);
            localStorage.setItem("posts", JSON.stringify(posts));

            const postElement = document.querySelector(`#post-${index}`);
            if (postElement) {
                postElement.remove();
            }
        };
        // Initial load
        loadposts();
    </script>
    <?php include 'template/footer.php' ?>
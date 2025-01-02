<?php
session_start();
?>
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
                                    <img src="bahan/action/update-bf.jpg" class="d-block w-100" alt="1" data-bs-interval="1000">
                                </div>
                                <div class="carousel-item">
                                    <img src="bahan/action/update-bf2.jpg" class="d-block w-100" alt="2" data-bs-interval="1000">
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
                        <button class="like-button">👀 (<span id="view-count">0</span>)</button>
                        <button class="like-button">📧 (<span id="comment-count">0</span>)</button>
                        <button class="like-button" onclick="incrementLike()">❤️ (<span id="like-count">0</span>)</button>
                    </div>
                    <div class="post-content" style="margin-top: 30px;">
                        <h1 class="post-title">Judul Postingan</h1>
                        <p class="post-description">
                            Deskripsi lengkap dari postingan ini. Anda dapat menambahkan teks yang lebih panjang di sini
                            untuk menjelaskan lebih detail mengenai isi postingan, fitur, atau informasi lainnya.
                        </p>
                    </div>
                    <div class="post-content" style="margin-top: 30px;">
                        <form id="komenForm">
                            <div class="mb-3">
                                <textarea class="form-control" id="komen" rows="3" placeholder="Cepat tulis komentar kalian~ " style="background-color: transparent; border: 1px solid rgb(53, 53, 53); color: white;"></textarea>
                            </div>
                            <input type="text" id="username_komen" value="<?php echo htmlspecialchars($_SESSION['username']); ?>" style="display:none">
                            <input type="time" id="date_komen" style="display: none;">
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
                                <span class="comment-time">10:15</span>
                                <div class="comment-reply">
                                    <button class="like-button"><i class="fas fa-thumbs-up"></i> 0</button>
                                </div>
                            </div>
                        </div>
                        <div id="postsKomenContainer"></div>
                    </div>
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
        // Value Time
        const inputTime = document.getElementById('date_komen');

        function getCurrentTime() {
            const now = new Date();
            const hours = String(now.getHours()).padStart(2, '0');
            const minutes = String(now.getMinutes()).padStart(2, '0');

            return `${hours}:${minutes}`;
        }

        // Update waktu setiap detik
        function updateTime() {
            const inputTime = document.getElementById('date_komen');
            inputTime.value = getCurrentTime();
        }

        setInterval(updateTime, 1000);
        updateTime();

        inputTime.value = updateTime();

        // Form Komentar
        const komenForm = document.getElementById("komenForm");
        const postsKomen = document.getElementById("postsKomen");

        // Load Komentar
        const loadkomens = () => {
            const komens = JSON.parse(localStorage.getItem("komens")) || [];
            postsKomenContainer.innerHTML = "";
            komens.forEach((post, index) => {
                const postElement = document.createElement("div");
                postElement.classList.add("comment-container");
                postElement.id = `komen-${index}`;
                postElement.innerHTML = `
      <div class="comment-header">
                                <img class="user-avatar" src="bahan/profile2.png" alt="User Avatar">
                                <div class="user-desc">
                                    <span class="user-name">${post.username_komen}</span>
                                </div>
                            </div>
                            <div class="comment-body">
                                <div class="comment-content">
                                    <div class="comment-bubble">
                                        <p>${post.komen}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-footer">
                                <span class="comment-time">${post.date}</span>
                                <div class="comment-reply">
                                    <button class="like-button"><i class="fas fa-thumbs-up"></i> 0</button>
                                </div>
                            </div>
        `;

                postsKomenContainer.appendChild(postElement);
            });
        };

        // Save new post
        komenForm.addEventListener("submit", (e) => {
            e.preventDefault();
            const username_komenInput = document.getElementById("username_komen");
            const komenInput = document.getElementById("komen");
            const date_komenInput = inputTime;
            // Ambil Data
            const newPost = {
                username_komen: username_komenInput.value,
                komen: komenInput.value,
                date: date_komenInput.value,
            };
            const komens = JSON.parse(localStorage.getItem("komens")) || [];
            komens.push(newPost);
            localStorage.setItem("komens", JSON.stringify(komens));
            alert("Komentar berhasil disimpan!");
            loadkomens();
            komenForm.reset();
        });

        // Initial load
        loadkomens();

        // Fungsi Lihat Postingan
        const viewKey = 'post_views';

        function getViewCount() {
            const views = localStorage.getItem(viewKey);
            return views ? parseInt(views, 10) : 0;
        }

        function incrementViewCount() {
            let currentViews = getViewCount();
            currentViews++;
            localStorage.setItem(viewKey, currentViews);
            return currentViews;
        }

        function updateViewCounter() {
            const newViewCount = incrementViewCount();
            document.getElementById('view-count').textContent = newViewCount;
        }

        document.addEventListener('DOMContentLoaded', () => {
            updateViewCounter();
        });
    </script>
    <?php include 'template/footer.php' ?>
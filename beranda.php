<?php
session_start();
?>
<?php include 'template/header.php' ?>

<body>
  <?php include 'template/navbar.php' ?>
  <!-- Banner -->
  <section class="banner">
    <div class="banner-overlay">
      <h1>Selamat Datang di ForGameLab</h1>
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
              <button class="like-button">👀 (<span id="view-count">0</span>)</button>
              <a href="post_detail.php" style="text-decoration: none;"><button class="like-button">📧 (<span id="comment-count">0</span>)</button></a>
              <button class="like-button" id="like-login">❤️ (<span>0</span>)</button>
            </div>
          </a>
        </div>
        <div class="post-container">
          <div class="post-header">
            <img src="bahan/profile1.png" alt="Avatar" class="avatar" />
            <div class="user-info">
              <h3>Zenless Zone Zero <span class="icons">🤖⭐</span></h3>
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
              <span>👀 (2)</span>
              <a href="post_detail.php" style="text-decoration: none;"><button class="like-button">📧 (<span id="comment-count">0</span>)</button></a>
              <button class="like-button">❤️ (<span id="">0</span>)</button>
            </div>
          </a>
        </div>
        <!-- Id Konten -->
        <div id="videosPostContainer"></div>
        <div id="postsPostContainer"></div>
        <div id="postsKontenContainer"></div>
      </article>
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
    // Load videos
    const loadvideos = () => {
      const videos = JSON.parse(localStorage.getItem("videos")) || [];
      videosPostContainer.innerHTML = "";
      videos.forEach((video, index) => {
        const videoElement = document.createElement("div");
        videoElement.classList.add("post-container");
        videoElement.id = `video-${index}`;
        videoElement.innerHTML = `
      <div class="post-header">
                        <img src="bahan/profile2.png" alt="Avatar" class="avatar" />
                        <div class="user-info">
                            <a href="detail_profil.php" style="text-decoration: none;">
                                <h3>${video.username}</h3>
                            </a>
                            <p>02/10 - Platform Game</p>
                        </div>
                        <button class="follow-btn" id="ikuti2-masuk">Ikuti +</button>
                    </div>
            </div>
            <div class="post-body">
            <a href="post_detail.php" style="text-decoration: none;">
                <div class="post-content">
                    <h2><b>${video.title}</b></h2>
                    <div class="post-images">
                                            <iframe width="560" height="315" src="${video.link}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                        </div>
                </div>
                <div class="post-tags">
                                            <a href="#">#${video.hastag}</a>
                                        </div>
                <div class="post-footer">
                    <span>👀 (2)</span>
                    <button class="like-button">📧 (<span id="comment-count">0</span>)</button>
                    <button class="like-button" onclick="incrementLike()">❤️ (<span id="">0</span>)</button>
                </div>
                </a>
            </div>
        `;

        videosPostContainer.appendChild(videoElement);
      });
    };
    // Initial load
    loadvideos();

    // Load Postingan
    const loadposts = () => {
      const posts = JSON.parse(localStorage.getItem("posts")) || [];
      postsPostContainer.innerHTML = "";
      posts.forEach((post, index) => {
        const postElement = document.createElement("div");
        postElement.classList.add("post-container");
        postElement.id = `post-${index}`;
        postElement.innerHTML = `
      <div class="post-header">
                        <img src="bahan/profile2.png" alt="Avatar" class="avatar" />
                        <div class="user-info">
                            <a href="detail_profil.php" style="text-decoration: none;">
                                <h3>${post.username}</h3>
                            </a>
                            <p>02/10 - Platform Game</p>
                        </div>
                        <button class="follow-btn" id="ikuti2-masuk">Ikuti +</button>
                    </div>
            </div>
            <div class="post-body">
            <a href="post_detail.php" style="text-decoration: none;">
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
                    <button class="like-button">❤️ (<span id="">0</span>)</button>
                </div>
                </a>
            </div>
        `;

        postsPostContainer.appendChild(postElement);
      });
    };
    // Initial load
    loadposts();

    // Load Konten
    const loadkontens = () => {
      const kontens = JSON.parse(localStorage.getItem("kontens")) || [];
      postsKontenContainer.innerHTML = "";
      kontens.forEach((kontenku, index) => {
        const postElement = document.createElement("div");
        postElement.classList.add("post-container");
        postElement.id = `konten-${index}`;
        postElement.innerHTML = `
      <div class="post-header">
                        <img src="bahan/profile2.png" alt="Avatar" class="avatar" />
                        <div class="user-info">
                            <a href="detail_profil.php" style="text-decoration: none;">
                                <h3>${kontenku.username_konten}</h3>
                            </a>
                            <p>02/10 - Platform Game</p>
                        </div>
                        <button class="follow-btn" id="ikuti2-masuk">Ikuti +</button>
                    </div>
            </div>
            <div class="post-body">
                <div class="post-content">
                    <h2><b>${kontenku.title_konten}</b></h2>
                    <p>${kontenku.konten}</p>
                </div>
                <div class="post-footer">
                    <span>👀 (2)</span>
                    <button class="like-button">📧 (<span id="comment-count">0</span>)</button>
                    <button class="like-button">❤️ (<span id="">0</span>)</button>
                </div>
            </div>
        `;

        postsKontenContainer.appendChild(postElement);
      });
    };
    // Initial load
    loadkontens();

    // Fungsi Lihat Postingan
    const viewKey = 'post_views';

    function getViewCount() {
      const views = localStorage.getItem(viewKey);
      return views ? parseInt(views, 10) : 0;
    }

    function displayViewCount() {
      const viewCount = getViewCount();
      document.getElementById('view-count').textContent = viewCount;
    }

    document.addEventListener('DOMContentLoaded', displayViewCount);
  </script>
  <?php include 'template/footer.php' ?>
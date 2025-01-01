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
                            <h3>Upload Video</h3>
                        </div>
                    </div>
                    <hr style="color:rgb(146, 151, 188)">
                    <div class="post-content" style="margin-top: 30px;">
                        <form id="videoForm">
                            <div class="mb-3">
                                <label for="title_video" class="form-label" style="color:aliceblue"><b>Judul Video</b></label>
                                <input type="text" class="form-control" id="title_video" placeholder="Tulis judul disini~ " required style="background-color: transparent; border: 1px solid rgb(53, 53, 53); color: white;">
                            </div>
                            <div class="mb-3">
                                <label for="video_postingan" class="form-label" style="color:aliceblue"><b>Upload Video</b></label>
                                <input type="url" class="form-control" id="video_postingan" placeholder="https://www.youtube.com/watch?v=..." required style="background-color: transparent; border: 1px solid rgb(53, 53, 53); color: white;">
                            </div>
                            <div class="mb-3">
                                <label for="caption_video" class="form-label" style="color:aliceblue"><b>Caption Video</b></label>
                                <textarea class="form-control" rows="3" id="caption_video" placeholder="Tulis caption disini~ " required style="background-color: transparent; border: 1px solid rgb(53, 53, 53); color: white;"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="hastag_video" class="form-label" style="color:aliceblue"><b>Hastag Video</b></label>
                                <input type="text" class="form-control" id="hastag_video" placeholder="Tulis hastag disini~ " required style="background-color: transparent; border: 1px solid rgb(53, 53, 53); color: white;"></input>
                            </div>
                            <input type="text" class="form-control" id="username_konten" style="background-color: transparent; border: 1px solid rgb(53, 53, 53); color: white; display:none;" value="<?php echo htmlspecialchars($_SESSION['username']); ?>"></input>
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </form>
                        <hr>
                    </div>
                </div>
            </article>
        </section>

        <aside class="sidebar">
            <div class="post-options">
                <h3>Ayo segera posting!</h3>
                <a href="konten.php"><button id="konten-masuk">Konten</button></a>
                <a href="postingan.php"><button id="gambar-masuk">Gambar</button></a>
                <a href="video.php"><button id="video-masuk">Video</button></a>
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
    <script>
        // Form Video
        const videoForm = document.getElementById("videoForm");
        const videosPostingan = document.getElementById("videosPostingan");

        const getEmbedLink = (url) => {
            const regex = /(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:embed\/|watch\?v=|.*[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/;
            const match = url.match(regex);

            if (match) {
                const videoId = match[1];
                return `https://www.youtube.com/embed/${videoId}`;
            }
            return null;
        };
        // Save new video
        videoForm.addEventListener("submit", (e) => {
            e.preventDefault();
            const title_videoInput = document.getElementById("title_video");
            const videoInput = document.getElementById("video_postingan");
            const caption_videoInput = document.getElementById("caption_video");
            const hastag_videoInput = document.getElementById("hastag_video");
            const username_kontenInput = document.getElementById("username_konten");

            // Dapatkan embed link dari URL
            const embedLink = getEmbedLink(videoInput.value);

            if (embedLink) {
                // Ambil array videos dari localStorage atau buat array kosong
                const videos = JSON.parse(localStorage.getItem("videos")) || [];

                const newVideo = {
                    title: title_videoInput.value,
                    link: embedLink,
                    caption: caption_videoInput.value,
                    hastag: hastag_videoInput.value,
                    username: username_kontenInput.value,
                };
                videos.push(newVideo);
                localStorage.setItem("videos", JSON.stringify(videos));
                alert("Video berhasil disimpan!");
                videoForm.reset();
            } else {
                alert("Link YouTube tidak valid!");
            }
        });
    </script>
    <?php include 'template/footer.php' ?>
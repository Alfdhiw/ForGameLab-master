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
                            <h3>Upload Postingan</h3>
                        </div>
                    </div>
                    <hr style="color:rgb(146, 151, 188)">
                    <div class="post-content" style="margin-top: 30px;">
                        <form id="postinganForm">
                            <div class="mb-3">
                                <label for="title_postingan" class="form-label" style="color:aliceblue"><b>Judul Postingan</b></label>
                                <input type="text" class="form-control" id="title_postingan" placeholder="Tulis judul disini~ " required style="background-color: transparent; border: 1px solid rgb(53, 53, 53); color: white;">
                            </div>
                            <div class="mb-3">
                                <label for="gambar_postingan" class="form-label" style="color:aliceblue"><b>Upload Postingan</b></label>
                                <input type="file" class="form-control" id="gambar_postingan" accept="image/*" required style="background-color: transparent; border: 1px solid rgb(53, 53, 53); color: white;">
                            </div>
                            <div class="mb-3">
                                <label for="caption_postingan" class="form-label" style="color:aliceblue"><b>Caption postingan</b></label>
                                <textarea class="form-control" rows="3" id="caption_postingan" placeholder="Tulis caption disini~ " required style="background-color: transparent; border: 1px solid rgb(53, 53, 53); color: white;"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="hastag_postingan" class="form-label" style="color:aliceblue"><b>Hastag postingan</b></label>
                                <input type="text" class="form-control" id="hastag_postingan" placeholder="Tulis hastag disini~ " required style="background-color: transparent; border: 1px solid rgb(53, 53, 53); color: white;"></input>
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
        // Form Postingan
        const postinganForm = document.getElementById("postinganForm");
        const postsPostingan = document.getElementById("postsPostingan");

        // Save new post
        postinganForm.addEventListener("submit", (e) => {
            e.preventDefault();
            const title_postinganInput = document.getElementById("title_postingan");
            const imageInput = document.getElementById("gambar_postingan");
            const captionInput = document.getElementById("caption_postingan");
            const postinganInput = document.getElementById("hastag_postingan");
            const username_kontenInput = document.getElementById("username_konten");
            // Ambil Data
            const reader = new FileReader();
            reader.onload = () => {
                const newPost = {
                    title: title_postinganInput.value,
                    image: reader.result,
                    caption: captionInput.value,
                    hastag: postinganInput.value,
                    username: username_kontenInput.value,
                };
                const posts = JSON.parse(localStorage.getItem("posts")) || [];
                posts.push(newPost);
                localStorage.setItem("posts", JSON.stringify(posts));
                alert("Postingan berhasil disimpan!");
                postinganForm.reset();
            };

            if (imageInput.files[0]) {
                reader.readAsDataURL(imageInput.files[0]);
            }
        });
    </script>
    <?php include 'template/footer.php' ?>
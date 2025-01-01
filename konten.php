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
                            <h3>Upload Konten</h3>
                        </div>
                    </div>
                    <hr style="color:rgb(146, 151, 188)">
                    <div class="post-content" style="margin-top: 30px;">
                        <form id="kontenForm">
                            <div class="mb-3">
                                <label for="title_konten" class="form-label" style="color:aliceblue"><b>Judul Konten</b></label>
                                <input type="text" class="form-control" id="title_konten" placeholder="Tulis judul disini~ " style="background-color: transparent; border: 1px solid rgb(53, 53, 53); color: white;">
                            </div>
                            <div class="mb-3">
                                <label for="konten" class="form-label" style="color:aliceblue"><b>Caption Konten</b></label>
                                <textarea class="form-control" id="konten" rows="3" placeholder="Cepat tulis konten kalian~ " style="background-color: transparent; border: 1px solid rgb(53, 53, 53); color: white;"></textarea>
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
        // Form Konten
        const kontenForm = document.getElementById("kontenForm");
        const postsKonten = document.getElementById("postsKonten");

        // Save new post
        kontenForm.addEventListener("submit", (e) => {
            e.preventDefault();
            const title_kontenInput = document.getElementById("title_konten");
            const kontenInput = document.getElementById("konten");
            const username_kontenInput = document.getElementById("username_konten");
            // Ambil Data
            const newPost = {
                title_konten: title_kontenInput.value,
                konten: kontenInput.value,
                username_konten: username_kontenInput.value,
            };
            const kontens = JSON.parse(localStorage.getItem("kontens")) || [];
            kontens.push(newPost);
            localStorage.setItem("kontens", JSON.stringify(kontens));
            alert("Postingan berhasil disimpan!");
            kontenForm.reset();
        });
    </script>
    <?php include 'template/footer.php' ?>
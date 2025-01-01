<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Prototype</title>
</head>

<body>
    <div class="container">
        <h1>Upload Postingan</h1>
        <form id="postForm">
            <label for="caption">Caption:</label>
            <textarea id="caption" placeholder="Tulis caption di sini..." required></textarea>
            <button type="submit">Upload</button>
        </form>

        <hr>

        <h2>Daftar Postingan</h2>
        <div id="postsContainer"></div>
    </div>
</body>

</html>
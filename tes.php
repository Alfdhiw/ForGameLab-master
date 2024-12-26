<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOM Manipulation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: left;
            margin: 20px;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 5px;
        }

        button:hover:not([disabled]) {
            background-color: #ddd;
        }

        button[disabled] {
            background-color: #e0e0e0;
            color: #a0a0a0;
            border-color: #ccc;
            cursor: not-allowed;
        }
    </style>
</head>

<body>
    <h1 id="text">DOM Manipulation (Inggris language)</h1>
    <button id="showButton">Terjemahkan</button>
    <button id="backButton">Balik lagi yok</button>

    <script>
        // Elemen Id
        const headerText = document.getElementById('text');
        const showButton = document.getElementById('showButton');
        const backButton = document.getElementById('backButton');

        // Function Untuk Terjemahan
        showButton.addEventListener('click', function() {
            headerText.textContent = 'DOM Manipulasi (Bahasa Indonesia)';
            showButton.disabled = true;
            backButton.disabled = false;
        });

        // Function Untuk Kembali
        backButton.addEventListener('click', function() {
            headerText.textContent = 'DOM Manipulation (Inggris language)';
            showButton.disabled = false;
            backButton.disabled = true;
        });
    </script>
</body>

</html>
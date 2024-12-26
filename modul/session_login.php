<?php
session_start();

// Data pengguna hard-coded
$users = [
    'user1' => 'password1',
    'user2' => 'password2',
    'usergame' => '12345'
];

// Proses login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek username dan password
    if (isset($users[$username]) && $users[$username] === $password) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;

        // Redirect ke beranda
        header("Location: http://localhost/ForGameLab-master/beranda_login.php");
        exit();
    } else {
        $_SESSION['error'] = "Username atau password salah!";
        header("Location: http://localhost/ForGameLab-master/beranda.php");
        exit();
    }
}

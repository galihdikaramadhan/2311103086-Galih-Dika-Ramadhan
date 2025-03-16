<?php
session_start();

$default_password = "123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username']) && isset($_POST['age']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $age = intval($_POST['age']);
        $password = $_POST['password'];

        if ($password === $default_password) {
            $_SESSION['username'] = $username;
            $_SESSION['age'] = $age;
            header("Location: dashboard.php");
            exit();
        } else {
            echo "Login Gagal! Password salah.";
        }
    } else {
        echo "Harap masukkan semua data!";
    }
} else {
    echo "Akses tidak valid!";
}
?>

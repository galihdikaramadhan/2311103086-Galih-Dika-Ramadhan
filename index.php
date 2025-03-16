<?php
session_start();
$sapaan = !isset($_SESSION['visited']) ? "Selamat datang di website kami! 😊" : "Halo, selamat datang kembali! 👋";
$_SESSION['visited'] = true;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sapaan Pengunjung</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        .container {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        }
        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 20px;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <h2><?= $sapaan; ?></h2>
    <p>Terima kasih telah mengunjungi website ini.</p>
    <a href="login.php"><button>Menuju Halaman Login</button></a>
</div>

</body>
</html>

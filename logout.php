<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout Berhasil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background:rgb(255, 255, 255);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .logout-container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 320px;
        }

        h2 {
            color: #333;
        }

        p {
            color: #666;
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background: #ff416c;
            color: white;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            transition: background 0.3s;
        }

        .btn:hover {
            background: #ff4b2b;
        }
    </style>
</head>
<body>

    <div class="logout-container">
        <h2>Logout Berhasil</h2>
        <p>Anda telah berhasil keluar. Klik tombol di bawah untuk kembali ke halaman login.</p>
        <a href="index.php" class="btn">Kembali ke Login</a>
    </div>

</body>
</html>

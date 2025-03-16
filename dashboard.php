<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
$age = $_SESSION['age'];
$status = ($age >= 18) ? "Dewasa" : "Belum Dewasa";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <h2>Selamat datang, <?php echo htmlspecialchars($username); ?>!</h2>
    <p>Status Anda: <?php echo $status; ?></p>
    <a href="logout.php">Logout</a>
</body>
</html>

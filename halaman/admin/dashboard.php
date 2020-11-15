<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
</head>
<body>
    <h1>SELAMAT DATANG ADMIN <?= $_SESSION['email']; ?></h1>
    <a href="../../logout.php">Keluar</a>
</body>
</html>
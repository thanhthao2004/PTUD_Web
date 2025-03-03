<?php
session_start();
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="banner">BANNER WEBSITE</div>
    <div class="container">
        <div class="content-left">
            <div class="menu">
                <h3>Menu</h3>
                <a href="index.php">Trang chủ</a><br>
                <a href="register.php">Đăng ký</a><br>
                <a href="login.php">Đăng nhập</a>
            </div>
        </div>
        <div class="content-right">
            <h2>Đăng nhập</h2>
            <form action="process_login.php" method="post">
                Email: <input type="email" name="email" required><br>
                Mật khẩu: <input type="password" name="password" required><br>
                <button type="submit">Đăng nhập</button>
            </form>
        </div>
    </div>
    <div class="footer">Footer website</div>
</body>
</html>

<?php
session_start();

// Kiểm tra nếu có màu được lưu trong cookie
$bannerColor = isset($_COOKIE['bgcolor']) ? $_COOKIE['bgcolor'] : '#666';

// Xử lý đăng xuất
if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    session_destroy();
    setcookie("remember", "", time() - 3600, "/"); // Xóa cookie
    setcookie("bgcolor", "", time() - 3600, "/");
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .banner { background-color: <?php echo $bannerColor; ?>; }
    </style>
</head>
<body>
    <div class="banner">BANNER WEBSITE</div>
    <div class="container">
        <div class="content-left">
            <div class="menu">
                <h3>Menu</h3>
                <a href="index.php">Trang chủ</a><br>
                <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) : ?>
                    <a href="?action=logout">Đăng xuất</a>
                <?php else : ?>
                    <a href="register.php">Đăng ký</a><br>
                    <a href="login.php">Đăng nhập</a>
                <?php endif; ?>
            </div>
        </div>
        <div class="content-right">
            <h2>Chào mừng đến với hệ thống!</h2>
            <p>
            <?php
            if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) {
                echo "Bạn đã đăng nhập thành công! Email của bạn: " . ($_SESSION['user_email'] ?? 'Không xác định');
            } else {
                echo "Vui lòng đăng nhập hoặc đăng ký.";
            }
            ?>
            </p>
        </div>
    </div>
    <div class="footer">Footer website</div>
</body>
</html>

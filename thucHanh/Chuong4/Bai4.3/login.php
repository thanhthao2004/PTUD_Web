<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Kiểm tra trong session trước
    if (isset($_SESSION['user_email']) && $_SESSION['user_email'] == $email) {
        $_SESSION['logged_in'] = true;
        header("Location: index.php");
        exit();
    }

    // Kiểm tra cookie nếu không có session
    if (isset($_COOKIE["remember"])) {
        parse_str($_COOKIE["remember"], $result);
        if ($email == $result["dkemail"]) {
            $_SESSION['logged_in'] = true;
            $_SESSION['user_email'] = $email; // Cập nhật session từ cookie
            setcookie("bgcolor", $result["dksothich"], time() + (10 * 24 * 60 * 60), "/"); // Lưu lại màu sắc
            
            header("Location: index.php");
            exit();
        }
    }
    echo "Thông tin đăng nhập không đúng.";
}
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
        <div class="content-right">
            <h2>Đăng nhập</h2>
            <form action="login.php" method="post">
                Email: <input type="email" name="email" required><br>
                Mật khẩu: <input type="password" name="password" required><br>
                <button type="submit">Đăng nhập</button>
            </form>
        </div>
    </div>
    <div class="footer">Footer website</div>
</body>
</html>

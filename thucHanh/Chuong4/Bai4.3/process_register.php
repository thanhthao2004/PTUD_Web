<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $banner_color = isset($_POST["banner_color"]) ? $_POST["banner_color"] : "#666";

    if ($password === $confirm_password) {
        $_SESSION['logged_in'] = true;
        $_SESSION['user_email'] = $email; // Lưu email vào session
        setcookie("remember", "dkemail=$email&dksothich=$banner_color", time() + (10 * 24 * 60 * 60), "/");
        setcookie("bgcolor", $banner_color, time() + (10 * 24 * 60 * 60), "/"); // Lưu màu sắc

        header("Location: index.php");
        exit();
    } else {
        echo "Mật khẩu không khớp. Vui lòng thử lại.";
    }
}
?>

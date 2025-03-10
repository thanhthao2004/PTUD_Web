<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    $hoten = $_POST['hoten'];
    $quequan = $_POST['quequan'];
    $sdt = $_POST['sdt'];
    $gioitinh = $_POST['gioitinh'];
    $sothich = isset($_POST['sothich']) ? implode(", ", $_POST['sothich']) : "Không có";

    if ($password !== $repassword) {
        echo "<script>alert('Mật khẩu nhập lại không khớp!'); window.location.href='dangky.php';</script>";
        exit();
    }

    // Giả lập lưu vào database (session để mô phỏng)
    $_SESSION['users'][$email] = [
        'password' => $password,
        'name' => $hoten,
        'quequan' => $quequan,
        'sdt' => $sdt,
        'gioitinh' => $gioitinh,
        'sothich' => $sothich
    ];

    // Điều hướng sang trang đăng nhập
    header("Location: dangnhap.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
    <style>
        .container {
            margin: 0 auto;
            height: auto;
            width: 1000px;
            border: 1px solid #999;
        }

        header {
            height: 100px;
            width: 100%;
            background: #7d7f91;
            border-bottom: 1px solid #999;
            text-align: center;
            line-height: 100px;
            font-size: 24px;
            color: white;
        }

        .main {
            display: flex;
            min-height: 400px;
        }

        nav {
            flex-grow: 1;
            border-right: 1px solid #999;
            padding: 10px;
        }

        .content {
            flex-grow: 4;
            padding: 20px;
        }

        footer {
            height: 60px;
            line-height: 60px;
            width: 100%;
            background-color: #CCC;
            border-top: 1px solid #999;
            text-align: center;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        nav ul li {
            margin: 10px 0;
        }

        nav ul li a {
            text-decoration: none;
            color: black;
            font-weight: bold;
        }

        nav ul li a:hover {
            color: rgb(156, 182, 39);
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px;
        }

        form div {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            width: 100%;
            max-width: 500px;
        }

        form div label {
            flex: 1;
            text-align: left;
        }

        form div input, 
        form div select {
            flex: 2;
            padding: 8px;
            border: 1px solid #999;
            border-radius: 4px;
            box-sizing: border-box;
        }

        form div input[type="radio"], 
        form div input[type="checkbox"] {
            flex: 0;
            width: auto;
            margin: 0 5px;
        }

        form button {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            background-color: #7d7f91;
            color: white;
            cursor: pointer;
            border-radius: 4px;
        }

        form button:hover {
            background-color: #5a5a80;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>BANNER WEBSITE</header>
        <div class="main">
            <nav>
                <ul>
                    <li><a href="index.php">Trang chủ</a></li>
                    <li><a href="dangky.php">Đăng ký</a></li>
                    <li><a href="dangnhap.php">Đăng nhập</a></li>
                </ul>
            </nav>
            <div class="content">
                <h1>THÔNG TIN ĐĂNG KÝ</h1>
                <form method="post">
                    <div>
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div>
                        <label for="password">Mật khẩu:</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <div>
                        <label for="repassword">Nhập lại mật khẩu:</label>
                        <input type="password" id="repassword" name="repassword" required>
                    </div>
                    <div>
                        <label for="hoten">Họ tên:</label>
                        <input type="text" id="hoten" name="hoten" required>
                    </div>
                    <div>
                        <label for="quequan">Quê quán:</label>
                        <select id="quequan" name="quequan" required>
                            <option value="">Chọn Tỉnh/Thành phố</option>
                            <option value="Hà Nội">Hà Nội</option>
                            <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                            <option value="Đà Nẵng">Đà Nẵng</option>
                        </select>
                    </div>
                    <div>
                        <label for="sdt">Điện thoại:</label>
                        <input type="text" id="sdt" name="sdt" required>
                    </div>
                    <div>
                        <label>Giới tính:</label>
                        <input type="radio" name="gioitinh" value="Nam" required> Nam
                        <input type="radio" name="gioitinh" value="Nữ" required> Nữ
                    </div>
                    <div>
                    <label>Sở thích:</label>
                        <input type="checkbox" name="sothich[]" value="Màu xanh"> Màu xanh
                        <input type="checkbox" name="sothich[]" value="Màu đỏ"> Màu đỏ
                        <input type="checkbox" name="sothich[]" value="Đồng quê"> Đồng quê
                        <input type="checkbox" name="sothich[]" value="Cao nguyên"> Cao nguyên
                    </div>
                    <div style="justify-content: space-around;">
                        <button type="submit" name="sbdangky">Đăng ký</button>
                        <button type="reset">Làm lại</button>
                    </div>
                </form>
            </div>
        </div>
        <footer>Footer website</footer>
    </div>
</body>
</html>   
<?php
session_start();
if (isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (isset($_SESSION['users'][$email]) && $_SESSION['users'][$email]['password'] === $password) {
        $_SESSION['user'] = $_SESSION['users'][$email]['name'];

        // Nếu có cookie ghi nhớ sở thích, đặt lại màu nền header
        if (isset($_COOKIE["remember"])) {
            parse_str($_COOKIE["remember"], $result);
            if ($email == $result["dkemail"]) {
                setcookie("bgcolor", $result["dksothich"], time() + 3600 * 24 * 10, "/");
            }
        }

        header("Location: index.php");
        exit();
    } else {
        echo "<script>alert('Sai thông tin đăng nhập!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
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
        .bg_green {
    background: green !important;
}

.bg_red {
    background: red !important;
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
                <h1>Đăng Nhập</h1>
                <form method="post">
                    <div>
                        <label>Email:</label>
                        <input type="email" name="email" required>
                    </div>
                    <div>
                        <label>Mật khẩu:</label>
                        <input type="password" name="password" required>
                    </div>
                    <div>
                        <button type="submit">Đăng nhập</button>
                    </div>
                </form>
            </div>
        </div>
        <footer>Footer website</footer>
    </div>
</body>
</html>
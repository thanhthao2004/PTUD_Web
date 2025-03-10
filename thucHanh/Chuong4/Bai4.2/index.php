<?php
session_start();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
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
    </style>
</head>
<body>
    <div class="container">
        <header>BANNER WEBSITE</header>
        <div class="main">
            <nav>
                <ul>
                    <li><a href="index.php">Trang chủ</a></li>
                    <?php if (!isset($_SESSION['user'])): ?>
                        <li><a href="dangky.php">Đăng ký</a></li>
                        <li><a href="dangnhap.php">Đăng nhập</a></li>
                    <?php else: ?>
                        <li><a href="dangxuat.php">Đăng xuất</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
            <div class="content">
                <h1>Chào mừng đến với website</h1>
                <?php
                if (isset($_SESSION['user'])) {
                    echo "<p>Xin chào, <strong>" . $_SESSION['user'] . "</strong>! Bạn đã đăng nhập thành công.</p>";
                } else {
                    echo "<p>Vui lòng đăng nhập để sử dụng đầy đủ tính năng.</p>";
                }
                ?>
            </div>
        </div>
        <footer>Footer website</footer>
    </div>
</body>
</html>
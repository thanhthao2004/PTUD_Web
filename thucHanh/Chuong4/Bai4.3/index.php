<?php
session_start();
$headerClass = isset($_COOKIE["bgcolor"]) ? $_COOKIE["bgcolor"] : "";
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
        <header class="<?= $headerClass ?>">BANNER WEBSITE</header>
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
                    echo "<p>Xin chào, " . $_SESSION['user'] . "! Bạn đã đăng nhập thành công.</p>";
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
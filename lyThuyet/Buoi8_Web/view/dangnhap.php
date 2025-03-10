<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div class="container">
        <div class="banner">
            <img src="style/image/image1.png" alt="">
        </div>
        <div class="main-container">
            <nav>
                <ul>
                    <li><a href="">Trang chủ</a></li>
                    <li><a href="dangnhap.php">Đăng nhập</a></li>
                    <li><a href="">Đăng ký</a></li>
                </ul>
            </nav>
            <form action="#" name="frmDangnhap" method="POST">
                <h4>Vui lòng đăng nhập</h4> <br>
                Tên đăng nhập: <input type="text" name="tdn"><br>
                Mật khẩu: <input type="text" name="mk"><br>
                Nhập lại mật khẩu: <input type="text" name="nlmk"><br>
                <input type="submit" name="btn_dn" value="Đăng nhập">
                <input type="reset" name="btn_reset"value ="reset">
            </form>
        </div>
        <footer>
            <h3>MSSV: Trần Thị Thanh Thảo</h3>
        </footer>
    </div>
    <?php 
    ?>
</body>
</html>
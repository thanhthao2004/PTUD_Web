<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>BANNER WEBSITE</h1>
        </div>
        <div class="main">
            <div class="nav">
                <ul>
                    <li>Trang chủ</li>
                    <li>Đăng ký</li>
                    <li>Đăng nhập</li>
                </ul>
            </div>
            <div class="content">
                <h2>THÔNG TIN ĐĂNG NHẬP</h2>
                <form method="POST" action="Ctrl_Xuly.php">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" >
                    </div>
                    <div class="form-group">
                        <input type="submit" name="btnDN" value="Đăng nhập">
                        <input type="reset" value="Làm lại">
                    </div>
                </form>
        <div class="footer">
            <p>footer website</p>
        </div>
    </div>
</body>
</html>
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
        <div class="banner-website">
            <h3>BANNER WEBSITE</h3>
        </div>
        <div class="main">
            <div class="container-left">
                <h4>MENU</h4>
                <nav>
                    <ul>
                        <li><a href="#">Trang chủ</a></li>
                        <li>Công ty</li>
                        <li><a href="#">Công ty Shoppe</a></li>
                        <li><a href="#">Công ty Tiki</a></li>
                        <li><a href="#">Công ty Lazada</a></li>
                    </ul>
                </nav>
            </div>
            <div class="container-right">
                <?php
                include('khachhang.php');
                $p = new khachhang();
                $sanpham = $p -> XemDSSanPham();
                foreach($sanpham as $sp){
                    echo '<div class="sanpham">
                    <div class="tensp">' . $sp['tensp'] . '</div>
                    <div class="hinh"><img src="hinh/' . $sp['hinh'] . '" width="150" height="150" /></div>
                    <div class="gia">Giá: ' . $sp['gia'] . ' USD</div>
                  </div>';
                }
                ?>
            </div>
        </div>
        <footer>
            <h3>Footer website</h3>
        </footer>
    </div>
</body>
</html>
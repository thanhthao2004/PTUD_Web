<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop quần áo của Thảo</title>
    <link rel="stylesheet" href="view/style/style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <nav>
                <a href="index.php" class="logo">Thanh Thảo Shop</a>
                <ul class="menu">
                    <li><a href="index.php?act=dky"><i class="fas fa-user-plus"></i> Đăng ký</a></li>
                    <li><a href="index.php?act=dnhap"><i class="fas fa-sign-in-alt"></i> Đăng nhập</a></li>
                    <li><a href="index.php?act=sanpham"><i class="fas fa-tshirt"></i> Sản phẩm</a></li>
                </ul>
            </nav>
        </div>  
        <div class="banner">
            <img src="view/style/image/banner.jpg" alt="Thanh Thảo Shop Banner">
        </div>
        <div class="container-main">
            <div class="container-left">
                <ul class="menu-left">
                    <li><a href="index.php?act=sanpham&type=2"><i class="fas fa-tshirt"></i> Áo</a></li>
                    <li><a href="index.php?act=sanpham&type=1"><i class="fas fa-socks"></i> Quần</a></li>
                    <li><a href="index.php?act=sanpham&type=3"><i class="fas fa-female"></i> Váy</a></li>
                </ul>
            </div>
            <div class="container-right">
                <?php
                    if(isset($_GET['act'])){
                        switch($_GET['act']){
                            case 'dnhap':
                                include_once('view/dangnhap.php');
                                break;
                            case 'dky':
                                include_once('view/dangky.php');
                                break;
                            case 'sanpham':
                                $type = isset($_GET['type']) ? $_GET['type']:null;
                                include_once('view/danhsachP.php');
                                break;
                            default:
                                include_once('index.php');
                        }
                    } else {
                        // Default welcome content
                        include_once('view/danhsachP.php');
                    }
                ?>
            </div>
        </div>
        <div class="footer">
            <h3>Sản phẩm của Thanh Thảo</h3>
            <p>Thanh Thảo Shop</p>
        </div>
    </div>
</body>
</html>
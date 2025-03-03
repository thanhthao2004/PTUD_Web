<!DOCTYPE html>
<?php
    session_start();
?>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div class="header">
        <div class="container">
            <!-- <img id ="id1" src="style/image/image1.png" alt=""> -->
        </div>
    </div>
    <div class="sidebar">
                <input type="text" class="search-box" placeholder="Tìm kiếm sản phẩm...">
                <?php       
                    include_once('view/menu.php');
                ?>
            </div>
    <div class="container">
        <div class="main-content">
            <div class="content_left">
                <h3>Danh mục thương hiệu</h3>
                <!-- <img id ="id2" src="style/image/image2.png" alt=""> -->
            </div>
            <div class="content_right">
                <?php
            if(isset($_GET['act'])){
                switch($_GET['act']){
                    case "dky":include("view/dangky.php");break;
                    case "dnhap":include("view/dangnhap.php");break;
                    case "dxuat":include("view/dangxuat.php");break;
                    default: 
                        echo "<div class='welcome-message'>Chào mừng đến với hệ thống quản lý</div>";
                }
            }
                ?>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="container">
            <p>Trần Thị Thanh Thảo </p>
        </div>
    </div>
</body>
</html>
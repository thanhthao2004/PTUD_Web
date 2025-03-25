<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="banner">
        <img src="image.png" alt="">
    </div>
    <div class="header">
        <ul>
            <?php
                include_once('menu.php');
            ?>
            <input id="search" type="search" placeholder="Tìm kiếm sản phẩm">
        </ul>
    </div>
    <div class="content">
        <div class="content-left">
            <h4>Danh mục thương hiệu</h4>
        </div>
        <div class="content-right">
            <?php
                if(isset($_GET['page'])){
                    $page  = $_GET['page'];
                    include_once($page.'.php');
                }else{
                    echo "Chào mừng bạn!";
                }
            ?>
        </div>
    </div>
</body>
</html>
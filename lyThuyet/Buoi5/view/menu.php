<?php
    echo '<a href="index.php">Trang chủ</a> | ';
    if(isset($_SESSION['login'])){
        echo '<a href="index.php?page=dxuat">Đăng xuất</a>';
    } else if (isset($_SESSION['tdn'])){
        echo '<a href="index.php?page=dnhap">Đăng nhập</a>';
    }else{
        echo '<a href="index.php?page=dky">Đăng ký</a>';
    }
?>
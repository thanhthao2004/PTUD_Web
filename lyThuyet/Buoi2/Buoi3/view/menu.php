<?php
    echo '<a href="index.php">Trang chủ</a><hr>';
    if(isset($_SESSION['login'])){
        echo '<a href="index.php?page=dxuat">Đăng xuất</a><hr>';
        echo '<a href="index.php?page=upload">Upload ảnh</a><hr>';
        echo '<a href="index.php?page=xemanh">Xem ảnh</a><hr>';
    } else if (isset($_SESSION['tdn'])){
        echo '<a href="index.php?page=dnhap">Đăng nhập</a><hr>';
    }else{
        echo '<a href="index.php?page=dky">Đăng ký</a><hr>';
    }
?>
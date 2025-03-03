<?php
    session_start();
    echo '<a href="index.php">Trang chủ</a> | ';
    if(isset($_SESSION['login'])){
        echo "<a href='?act=dxuat'>Đăng xuất</a>";
    }else{
        echo "<a href='?act=dky'>Đăng ký</a> | <a href='?act=dnhap'>Đăng nhập</a>";
    }
?>
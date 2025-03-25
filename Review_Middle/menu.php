<?php
    session_start();
?>
    <ul>
        <?php
            echo '<li>Trang chủ </li>';
            if (!$_SESSION['regis']){
                echo '<li><a href="index.php?page=dangky">Đăng ký</a></li>';
            }elseif(!($_SESSION['login'])){
                echo '<li><a href="index.php?page=dangnhap">Đăng nhập</a></li>';
            }else{
                echo '<li><a href="index.php?page=dangxuat">Đăng xuất</a></li>';
                echo "<li><a href='index.php?page=upload'>Upload file</a></li>";
            }
        ?>
    </ul>
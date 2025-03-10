<?php
    session_start();
    session_destroy();
    echo "Đã đăng xuất";
    header("Refresh: 1; url=index.php"); 
?>
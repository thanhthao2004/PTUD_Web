<?php
    session_start();
    session_destroy();
    echo "<script>alert('Đã đăng xuất'); setTimeout(()=>window.location.href='index.php',1000)</script>";
?>
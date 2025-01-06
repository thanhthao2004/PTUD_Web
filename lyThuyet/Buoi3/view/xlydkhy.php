<?php
    session_start();
    include_once("controller/ctrUser.php");
    $p = new ctrUser();
    $email = $_POST["txtEmail"];
    $pass = $_POST["txtPass"];
    if($p->Registration($email,$pass)){
        echo "<script>alert('Dang ky thanh cong')</script>";
    }
    header("Refresh:0.5;url=index.php");
?>
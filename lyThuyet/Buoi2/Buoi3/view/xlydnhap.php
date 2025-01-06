<?php
    session_start();
    include_once("controller/ctrUser.php");
    $p = new ctrUser();
    $email = $_POST["txtEmail"];
    $pass = $_POST["txtPass"];
    if($p->Login($email,$pass)){
        echo "<script>alert('Dang nhap thanh cong')</script>";
    }else{
        echo "<script>alert('Sai thong tin dang nhap')</script>";
    }
    header("Refresh:0.5;url=index.php");
?> 
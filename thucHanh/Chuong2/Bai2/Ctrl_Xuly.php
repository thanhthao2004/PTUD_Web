<?php
   if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST["btnDN"])){
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $validEmail = 'abc@gmail.com';
        $validPassword = '123456';
        if($email == $validEmail && $password == $validPassword){
            echo "Chuc mung dang nhap thanh cong";
        }else{
            echo "Dang nhap that bai!";
        }
}}
?>